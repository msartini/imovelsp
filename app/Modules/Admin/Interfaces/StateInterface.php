<?php
/**
 * Created by Marcio.
 * User: marcio sartini
 * Date: 6/6/15
 * Time: 17:39
 */

namespace Casaoeste\Modules\Admin\Interfaces;

interface StateInterface
{
    public function all();
    public function findById($id);
    public function findByCategoryName($name);
    public function findByRooms($qtde);
    public function deleteById($id);
}