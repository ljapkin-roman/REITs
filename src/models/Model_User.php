<?php


namespace Roma\ReiTs\models;
use Roma\ReiTs\core\Model;
use Roma\ReiTs\core\DB;

class Model_User extends Model
{
     public function __construct(\Roma\ReiTs\core\DB $database)
     {
         parent::__construct($database);
     }

    public function get()
     {
         print_r("Im get method of model_user");

     }
}