<?php
require_once('Model.php');
class Store extends Model
{
    protected $table = 'store';

    public function all(array $columns = ['*'])
    {
        return parent::all();
    }
}
