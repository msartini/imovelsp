<?php

namespace Casaoeste\Resources;

use Casaoeste\Resources\AbstractResource;

class Estate extends AbstractResource
{
    public $name;
    public $address;
    public $neighborhood;
    public $city;
    public $state;
    public $postalcode;
    public $id=0;


    public function getResourcePath()
    {
        return "guia/v0.1/contacts";
    }
}
