<?php
namespace Casaoeste\Interfaces;

use Illuminate\Http\Request;

interface EstateInterface
{
    public function all();
    public function getEstateByid($hashId);
    public function getEstateByName();
    public function getEstateBySlug();
    public function storeEstate(Request $request);
}
