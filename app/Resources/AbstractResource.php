<?php

namespace Casaoeste\Resources;

use ReflectionObject;
use ReflectionProperty;
use JsonSerializable;
use GuzzleHttp\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\MessageBag;
use Illuminate\Contracts\Support\Arrayable;

abstract class AbstractResource implements JsonSerializable, Arrayable
{
    const EXPAND_PARAM = 'expand';
    const EXPAND_ALL = 'all';

    /**
     * Identificador do recurso.
     *
     * @var integer
     */
    public $id;

    /**
     * Data de criação.
     *
     * @var string
     */
    public $created_at;

    /**
     * Data de modificação.
     *
     * @var string
     */
    public $updated_at;

    /**
     * URI do recurso na API.
     *
     * @var string
     */
    public $uri;

    /**
     * Armazena o corpo da resposta Http.
     *
     * @var array|null
     */
    private $bodyResponse = [];

    /**
     * Lista com as mensagens de erro retornadas na resposta Http.
     *
     * @var array
     */
    private $errors = [];

    /**
     * Dados originais dos atributos do recurso.
     *
     * @var array
     */
    protected $original = [];

    /**
     * Relações do recurso.
     *
     * @var array
     */
    private $relations = [];

    /**
     * Controlador de requisições Http.
     *
     * @var Folha\Durin\Api\RequestHandle;
     */
    private $requestHandle;

    public function __construct()
    {

    }

    /**
     * Retorna o caminho do recurso. Cada implementação dessa class deve
     * informar o caminho do recurso no serviço.
     *
     * @return string.
     */
    abstract public function getResourcePath();

    /**
     * Retorna o valor do identificador único do recurso.
     *
     * @return mixed
     */
    public function getKey()
    {
        return $this->id;
    }

    /**
     * Retorna a instância do controlador de requisições Http.
     *
     * @return  Folha\Durin\Api\RequestHandle
     */
    public function getRequestHandle()
    {
        return $this->requestHandle;
    }

    /**
     * Retorna as regras de relações do recurso.
     *
     * @return array
     */
    public function getRelationsRules()
    {
        return [];
    }

    /**
     * Retorna um MessageBag com os erros.
     *
     * @return Illuminate\Support\MessageBag
     */
    public function getErrors()
    {
        return new MessageBag($this->errors);
    }

    /**
     * Consulta uma lista de recursos.
     *
     * @param  array  $params
     *
     * @return Folha\Durin\Api\CollectionResource
     */
    public static function all(array $params = [])
    {
        $instance = new static;

        return $instance->performAll($params);
    }

    /**
     * Consulta uma lista de recursos.
     *
     * @param  array  $params
     *
     * @return Folha\Durin\Api\CollectionResource
     */
    public function performAll(array $params = [])
    {
        $resourcePath = $this->getResourcePath();
        $params = $this->addDefaultParamsGet($params);
        $response = $this->sendRequest('GET', $resourcePath, $params);

        if ($this->isEmptyResponse($response)) {
            return new CollectionResource();
        }

        return $this->parseGetResponse($response);
    }

    /**
     * Buscar um recurso pelo ID.
     *
     * @param  string   $id
     * @param  array    $params
     *
     * @return static
     */
    public static function find($id, array $params = [])
    {
        $instance = new static;

        return $instance->performFind($id, $params);
    }

    /**
     * Buscar um recurso pelo ID.
     *
     * @param  string   $id
     * @param  array    $params
     *
     * @return static
     */
    public function performFind($id, array $params = [])
    {
        $resourcePath = sprintf('%s/%s', $this->getResourcePath(), $id);
        $params = $this->addDefaultParamsGet($params);
        $response = $this->sendRequest('GET', $resourcePath, $params);

        return $this->parseGetResponse($response);

    }

    /**
     * Cria ou atualiza um recurso.
     *
     * @param  array   $params
     *
     * @return static
     */
    public function save(array $params = [])
    {
        $params['json'] = $this->jsonSerialize();
        $resourcePath = $this->getResourcePath();

        if ($this->getKey()) {
            $resourcePath = sprintf('%s/%s', $this->getResourcePath(), $this->getKey());
            $this->sendRequest('PUT', $resourcePath, $params);

            return $this;
        }

        $response = $this->sendRequest('POST', $resourcePath, $params);

        return $this->parsePostResponse($response);
    }

    /**
     * Deleta o recurso.
     *
     * @param   array   $params
     *
     * @return static
     */
    public function delete(array $params = [])
    {
        $resourcePath = sprintf('%s/%s', $this->getResourcePath(), $this->getKey());
        $this->sendRequest('DELETE', $resourcePath, $params);

        return $this;
    }

    /**
     * Adiciona os parâmetros Padrões para solicitações do método GET.
     *
     * @params  array   $params
     *
     * @return array
     */
    protected function addDefaultParamsGet($params)
    {
        if (!isset($params['query'][$this::EXPAND_PARAM])) {
            $params['query'][$this::EXPAND_PARAM] = $this::EXPAND_ALL;
        }

        return $params;
    }

    /**
     * Envia uma solicitação para o servidor, utilizando o método e o caminho
     * do recurso passados por parâmetro.
     *
     * @param   string  $method
     * @param   string  $resourcePath
     * @param   array   $params
     *
     * @return  Guzzle\Message\ResponseInterface
     * @throws  GuzzleHttp\Exception\RequestException
     */
    public function sendRequest($method, $resourcePath, array $params = [])
    {
        try {
            $method = strtoupper($method);
            $request = $this->requestHandle->createRequest($method, $resourcePath, $params);

            return $this->requestHandle->send($request);
        } catch (RequestException $exception) {
            $this->parseExceptionResponse($exception);
            throw $exception;
        }
    }

    /**
     * Analisa as respostas Http GET e alimenta o model corretamente.
     *
     * @param   Guzzle\Message\ResponseInterface $response
     * @return  static|Folha\Durin\Api\CollectionResource
     */
    public function parseGetResponse(ResponseInterface $response)
    {
        if ($this->isEmptyResponse($response)) {
            return $this;
        }

        $body = $response->json();

        if (!is_array($body)) {
            return $this;
        }

        return $this->parseBodyResponse($body);
    }

    private function isEmptyResponse(ResponseInterface $response)
    {
        return $response->getBody()->getSize() == 0;
    }

    /**
     * Analisa as respostas Http POST
     *
     * @param   Guzzle\Message\ResponseInterface $response
     * @return  static
     */
    public function parsePostResponse(ResponseInterface $response)
    {
        if (!$response->hasHeader('Location')) {
            return $this;
        }

        $this->uri = $response->getHeader('Location');
        $this->id = $this->extractIdFromUri($this->uri);

        return $this;
    }

    /**
     * Extrai o Id do recurso de uma deterina uri.
     *
     * @param  string  $uri
     *
     * @return integer
     */
    public function extractIdFromUri($uri)
    {
        $resourceUriPatterns = sprintf('%s/(?<id>[0-9]+?)', $this->getResourcePath());
        $resourceUriPatterns = str_replace('/', '\\/', $resourceUriPatterns);
        $resourceUriPatterns = '/' . $resourceUriPatterns . '$/';

        preg_match($resourceUriPatterns, $uri, $matches);

        if (array_key_exists('id', $matches)) {
            return $matches['id'];
        }

        return null;
    }

    /**
     * Analisa os dados do corpo de uma resposta Http.
     *
     * @param   array   $body
     *
     * @return static|Folha\Durin\Api\CollectionResource
     */
    public function parseBodyResponse(array $body)
    {
        $this->bodyResponse = $body;

        /**
         * Se existir o atributo "uri" é um único recurso, se não existir o "uri"
         * é uma lista de recursos.
         */
        if (array_key_exists('uri', $this->bodyResponse)) {
            $this->fill($this->bodyResponse);
            return $this->syncOriginal();
        }

        return $this->parseResources($this->bodyResponse);
    }

    /**
     * Analisa os dados do corpo de uma resposta Http como uma lista de recursos.
     *
     * @param   array   $bodyResponse
     *
     * @return  Folha\Durin\Api\CollectionResource
     */
    public function parseResources(array $bodyResponse)
    {
        $resources = new CollectionResource();
        $resources->setModelClass(get_class($this));

        return $resources->parseBodyResponse($bodyResponse);
    }

    /**
     * Analisa os dados de erro de uma solicitação ou resposta Http.
     *
     * @param   GuzzleHttp\Exception\RequestException   $exception
     *
     * @return $this;
     */
    protected function parseExceptionResponse(RequestException $exception)
    {
        if (!$exception->hasResponse()) {
            $this->errors[] = $exception->getMessage();
            return $this;
        }

        $this->errors[] = (string) $exception->getResponse()->getBody();

        $contentType = $exception->getResponse()->getHeader('Content-Type');

        if (mb_strpos($contentType, 'application/json') !== false) {
            $this->errors = $exception->getResponse()->json();
        }

        return $this;
    }

    /**
     * Atribuição de dados em massa no recurso.
     *
     * @param   array   $attributes
     *
     * @return  static
     */
    public function fill($attributes)
    {
        foreach ($attributes as $key => $value) {
            if (!property_exists($this, $key)) {
                continue;
            }

            $this->$key = $value;
        }

        return $this;
    }

    /**
     * Armazena os dados originais do recurso.
     *
     * @return static
     */
    public function syncOriginal()
    {
        $this->original = $this->toArray();

        return $this;
    }

    /**
     * Define os dados de um atributo.
     *
     * @param  string  $key
     * @param  mixed   $value
     *
     * @return static
     */
    public function setAttribute($key, $value)
    {
        $relationRules = $this->getRelationsRules();

        if (!array_key_exists($key, $relationRules)) {
            return $this;
        }

        if (is_a($value, $relationRules[$key])) {
            $this->relations[$key] = $value;
        } elseif ($this->isCollectionRelation($key) && $value instanceof CollectionResource) {
            $this->relations[$key] = $value;
        }

        return $this;
    }

    /**
     * Retorna os dados de um determinado atributo.
     *
     * @param  string  $key
     *
     * @return mixed
     */
    public function getAttribute($key)
    {
        if (array_key_exists($key, $this->relations)) {
            return $this->relations[$key];
        }

        if (array_key_exists($key, $this->getRelationsRules())) {
            return $this->resolveRelation($key);
        }
    }

    /**
     * Resolve os dados de uma determinada relação do recurso.
     *
     * @param   string  $relationName
     * @return  mixed
     */
    protected function resolveRelation($relationName)
    {
        $relationsRules = $this->getRelationsRules();

        if (!isset($relationsRules[$relationName])) {
            return null;
        }

        if (!isset($this->bodyResponse[$relationName])) {
            $this->relations[$relationName] = $this->createEmptyRelation($relationName);
            return $this->relations[$relationName];
        }

        $relationClass = $relationsRules[$relationName];
        $relation = new $relationClass();

        $bodyResponseRelation = $this->bodyResponse[$relationName];
        $this->relations[$relationName] = $relation->parseBodyResponse($bodyResponseRelation);

        $this->lazyLoadRelation($relationName);

        return $this->relations[$relationName];
    }

    /**
     * Cria um objeto vazio que representa o relacionamento passado por parâmetro.
     *
     * @param string $relationName
     *
     * @return static|Folha\Durin\Api\CollectionResource
     */
    protected function createEmptyRelation($relationName)
    {
        if ($this->isCollectionRelation($relationName)) {
            return new CollectionResource();
        }

        $relationsRules = $this->getRelationsRules();
        $relationClass = $relationsRules[$relationName];

        return new $relationClass();
    }

    /**
     * Informa se um determinado relacionamento é uma coleção.
     *
     * @param  string $relationName
     *
     * @return bool
     */
    protected function isCollectionRelation($relationName)
    {
        return $relationName == Str::plural($relationName);
    }

    /**
     * Executa a carga de dados sobre demanda de uma relação do recurso.
     *
     * @param   string  $relationName
     *
     * @return  static
     */
    protected function lazyLoadRelation($relationName)
    {
        if (!array_key_exists($relationName, $this->relations)) {
            return $this;
        }

        $resources = $this->relations[$relationName];

        if ($resources instanceof Collection) {
            $resources->each(function ($resource) {
                $resource->lazyLoad();
            });

            return $this;
        }

        $this->relations[$relationName] = $resources->lazyLoad();

        return $this;
    }

    /**
     * Executa a carga sobre demanda do recurso.
     *
     * @return  static
     */
    public function lazyLoad()
    {
        if ($this->isLazyLoad()) {
            return $this->reload();
        }

        return $this;
    }

    /**
     * Verifica se o recurso precisa executar a carga sobre demanda.
     *
     * @return  bool
     */
    protected function isLazyLoad()
    {
        $isLazyLoad = true;
        $attributesExcluded = array('id','uri');

        foreach ($this->toArray() as $attributeName => $value) {
            if (!in_array($attributeName, $attributesExcluded) && !empty($value)) {
                $isLazyLoad = false;
                break;
            }
        }

        return $isLazyLoad;
    }

    /**
     * Carrega os dados do recurso do servidor.
     *
     * @return static|Folha\Durin\Api\CollectionResource
     */
    public function reload()
    {
        if (!$this->uri) {
            return $this;
        }

        $response = $this->requestHandle->get($this->uri);
        return $this->parseGetResponse($response);
    }

    /**
     * Retorna uma lista de chave e valor, com os atributos que podem ser
     * Serializados na função json_encode.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Converte os dados do objeto em um array.
     *
     * @return array
     */
    public function toArray()
    {
        $attributes = [];

        foreach ($this->getArrayableAttributes() as $attribute) {
            $attributes[$attribute] = $this->$attribute;
        }

        foreach ($this->relations as $relationName => $relation) {
            if ($relation instanceof Arrayable) {
                $attributes[$relationName] = $relation->toArray();
            }
        }

        return $attributes;
    }

    /**
     * Retorna atributos do objeto que são relevantes na conversão para array.
     *
     * @return  array
     */
    public function getArrayableAttributes()
    {
        $reflection = new ReflectionObject($this);
        $publicProperties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        $arrayableAttributes = [];

        foreach ($publicProperties as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $arrayableAttributes[] = $property->name;
        }

        return $arrayableAttributes;
    }

    /**
     * @param  string  $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->getAttribute($key);
    }

    /**
     * @param  string  $key
     * @param  mixed   $value
     *
     * @return void
     */
    public function __set($key, $value)
    {
        $this->setAttribute($key, $value);
    }

    /**
     * @return  void
     */
    public function __clone()
    {
        $this->id = null;
    }
}
