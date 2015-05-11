<div role="tabpanel" class="tab-pane" id="local">
	<div class="form-header">
		<h2>Local/Endereço</h2>

		<p class="description">Informações do local e endereço</p>
	</div>
	<div class="row">
        <div class="form-group col-md-9 col-sm-9 col-xs-10">
            {!! Form::label('event[environment][main]', 'Local principal') !!}
            {!! Form::text('event[environment][main]', Input::old('event[environment][main]'), ['class' => 'form-control', 'placeholder' => 'Nome do local principal']) !!}
	  	</div>
		<div class="col-md-3 col-sm-3 col-xs-2">
			<button type="button" class="btn btn-default btn-inline no-label"><i class="glyphicon glyphicon-search" aria-hidden="true"></i> <span class="hidden-xs">Buscar</span></button>
		</div>
	</div>
	<div class="add-remove-group row">
        <div class="form-group col-md-9 col-sm-9 col-xs-10">
            {!! Form::label('event[environment][name]', 'Ambiente') !!}
            {!! Form::text('event[environment][name]', Input::old('event[environment][name]'), ['class' => 'form-control', 'placeholder' => 'Nome do ambiente']) !!}
	  	</div>
		<div class="col-md-3 col-sm-3 col-xs-2">
			<button type="button" class="btn-add btn btn-success btn-inline no-label"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i> <span class="hidden-xs">Ambiente</span></button>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-3 col-sm-6">
            {!! Form::label('event[environment][id]', 'Código do ambiente') !!}
            {!! Form::text('event[environment][id]', Input::old('event[environment][id]'), ['class' => 'form-control', 'placeholder' => '123123']) !!}
		</div>

		<div class="form-group col-md-3 col-sm-6">
            {!! Form::label('event[environment][site][id]', 'Código do local') !!}
            {!! Form::text('event[environment][site][id]', Input::old('event[environment][site][id]'), ['class' => 'form-control', 'placeholder' => '123123']) !!}
		</div>

		<div class="form-group col-md-6">
            {!! Form::label('event[environment][site][type]', 'Tipo Físico') !!}
            {!! Form::select('event[environment][site][type]', ['Rua', 'Shopping'], [], ['class' => 'form-control']) !!}
		</div>
	</div>

    <div class="form-group">
        {!! Form::label('event[environment][site][url]', 'Site') !!}
        {!! Form::text('event[environment][site][url]', Input::old('event[environment][site][url]'), ['class' => 'form-control', 'placeholder' => 'http://guia.folha.com.br/']) !!}
	</div>

	<div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'contact@guia.folha.com.br']) !!}
	</div>

	 
	<fieldset>
		<legend>Endereço</legend>
		<div class="row">
			<div class="form-group col-md-3 col-sm-6">
				{!! Form::label('event[environment][site][address][zip_code]', 'CEP') !!}
				{!! Form::text('event[environment][site][address][zip_code]', Input::old('event[environment][site][address][zip_code]'), ['class' => 'form-control', 'placeholder' => '01202-001']) !!}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3">
				{!! Form::label('event[environment][site][address][address_type]', 'Tipo') !!}
				{!! Form::select('event[environment][site][address][address_type]', ['Tipo', 'Tipo'], [], ['class' => 'form-control']) !!}
			</div>

			<div class="form-group col-md-9">
				{!! Form::label('event[environment][site][address][street]', 'Logradouro') !!}
				{!! Form::text('event[environment][site][address][street]', Input::old('event[environment][site][address][street]'), ['class' => 'form-control', 'placeholder' => 'Barão de Limeira']) !!}
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-3 col-sm-6">
				{!! Form::label('event[environment][site][address][number]', 'Número') !!}
				{!! Form::text('event[environment][site][address][number]', Input::old('event[environment][site][address][number]'), ['class' => 'form-control', 'placeholder' => '425']) !!}
			</div>

			<div class="form-group col-md-5 col-sm-6">
				{!! Form::label('event[environment][site][address][complement]', 'Complemento') !!}
				{!! Form::text('event[environment][site][address][complement]', Input::old('event[environment][site][address][complement]'), ['class' => 'form-control', 'placeholder' => 'Quadra 5, Conjunto C']) !!}
			</div>

			<div class="form-group col-md-4">
				{!! Form::label('event[environment][site][address][neighborhood]', 'Bairro') !!}
				{!! Form::text('event[environment][site][address][neighborhood]', Input::old('event[environment][site][address][neighborhood]'), ['class' => 'form-control', 'placeholder' => 'Higienópolis']) !!}
			</div>

		</div>
		<div class="row">
			<div class="form-group col-md-8">
			  {!! Form::label('event[environment][site][address][city]', 'Cidade') !!}
			  {!! Form::text('event[environment][site][address][city]', Input::old('event[environment][site][address][city]'), ['class' => 'form-control', 'placeholder' => 'Belo Horizonte']) !!}
			</div>

			<div class="form-group col-md-4">
				{!! Form::label('event[environment][site][address][state]', 'Estado') !!}
				{!! Form::select('event[environment][site][address][state]', ['São Paulo', 'Rio de Janeiro'], [], ['class' => 'form-control']) !!}
			</div>
		<div class="row">
			<div class="form-group col-md-8">
				{!! Form::label('event[environment][site][address][reference_neighborhood]', 'Bairro de referência') !!}
				{!! Form::select('event[environment][site][address][reference_neighborhood]', ['São Paulo', 'Rio de Janeiro'], [], ['class' => 'form-control']) !!}
			</div>
			<div class="form-group col-md-4">
				{!! Form::label('event[environment][site][address][region]', 'Região') !!}
				{!! Form::select('event[environment][site][address][region]', ['Norte', 'Sul', 'Leste', 'Oeste', 'Centro'], [], ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('event[environment][site][address][reference]', 'Localização') !!}
			{!! Form::text('event[environment][site][address][reference]', Input::old('event[environment][site][address][reference]'), ['class' => 'form-control', 'placeholder' => 'Ponto de referência. Exemplo: Próximo ao Starbucks']) !!}
		</div>

		<div class="form-group">
			<label>Complemento para publicação</label>
			<input type="text" class="form-control" placeholder="Travessa da Paulista com a Alameda Santos">
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="add-remove-group phone-group row">
					<div class="col-md-7 col-sm-7 col-xs-7">
						<p class="form-label">Telefone de publicação</p>

						<div class="row">
							<div class="form-group col-md-5 col-sm-5 col-xs-5">
								<label for="" class="sr-only">DDD</label>
								<input id="" type="text" class="form-control" placeholder="DDD">
							</div>

							<div class="form-group col-md-7 col-sm-7 col-xs-7">
								<label for="" class="sr-only">Telefone</label>
								<input type="text" class="form-control" placeholder="3224-4000">
							</div>
						</div>
					</div>

					<div class="form-group col-md-4 col-sm-4 col-xs-3">
						<label for="">Ramal</label>
						<input id="" type="text" class="form-control" placeholder="Ramal">
					</div>

					<div class="col-md-1 col-sm-1 col-xs-2">
						<button type="button" class="add-phone-group btn btn-success btn-xs btn-inline no-label"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>

		
		<div class="local-map-view">
			<label>Visualização</label>
			<iframe class="map-embed" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.867235201472!2d-46.64548309999997!3d-23.537277099999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5843f3db4939%3A0xff008f25b9c61e88!2sAlameda+Bar%C3%A3o+de+Limeira%2C+425+-+Campos+El%C3%ADseos%2C+S%C3%A3o+Paulo+-+SP%2C+01202-001!5e0!3m2!1spt-BR!2sbr!4v1427327887386" width="555" height="300" frameborder="0" style="border:0"></iframe>
			<button type="submit" class="btn btn-primary btn-xs btn-single" form="geolocation_form">Atualizar dados no mapa</button>
		</div>
	</fieldset>
 

	<fieldset>
		<legend>Desativação do local</legend>
		<button type="button" class="btn btn-danger btn-single">Desativar evento</button>

		<div class="form-group">
			<label>Informações sobre desativação</label>
		 	<textarea class="form-control" rows="2" placeholder="Detalhes sobre a desativação do evento"></textarea>
		</div>
	</fieldset>
<nav>
	<ul class="pager">
  		<li><a href="#basic_information" aria-controls="basic_information" role="tab" data-toggle="tab">&lt; Anterior</a></li>
   		<li><a href="#">Próxima &gt;</a></li>
  </ul>
</nav>
</div>


<script>
/**
* Desvia para o controle que recuperar a geoLocation do endereco
*/ 
 
function getLocation(obj) {
    document.form2.action = obj.getAttribute('data-url');
    document.form2.submit();
};
</script>