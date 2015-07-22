<?php
namespace Casaoeste\Repositories;

use Illuminate\Http\Request;
use Casaoeste\Models\Estate;
use Casaoeste\Resources\Estate as EstateResource;
use Casaoeste\Interfaces\EstateInterface as EstateInterface;

class EstateRepository implements EstateInterface
{
    private $estate;
    private $estateResource;

    public function __construct(Estate $estate, EstateResource $estateResource)
    {
        $this->estate = $estate;
        $this->estateResource = $estateResource;
    }

    public function all()
    {
        return $this->estate->all();
    }

    public function getEstateByid($hashId)
    {
        return $this->estate->find($hashId);
    }

    public function getEstateByName()
    {
        return true;
    }

    public function getEstateBySlug()
    {
        return true;
    }

    public function storeEstate(Request $request)
    {
        $fillableFields = [
            'name',
            'address',
            'neighborhood',
            'city',
            'state',
            'postalcode'
        ];

        //$estate = new Estate();
        $estate = Estate::findOrNew($request->id);
        $estate->fillable($fillableFields);
        $estate->fill($request->all())->save();

        return $estate;
    }
}
