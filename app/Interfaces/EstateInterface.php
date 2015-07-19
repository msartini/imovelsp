<?php
namespace Casaoeste\Interfaces;

use Illuminate\Http\Request;

interface EstateInterface
{
    public function getEstateByid();
    public function getEstateByName();
    public function getEstateBySlug();
    public function storeEstate(Request $request);
}
