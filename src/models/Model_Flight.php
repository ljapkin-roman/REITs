<?php


namespace Roma\ReiTs\models;
use Roma\ReiTs\eloquent\classes\Flight;
use Roma\ReiTs\core\Model;
use Roma\ReiTs\core\DB;


class Model_Flight extends Model
{
    public function __construct(\Roma\ReiTs\core\DB $database)
    {
        $database = new $database();
        $capsule = $database->connect();

    }

    public function table_create()
    {
        $this->db::schema()->create('flights', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function fill_table()
    {
        Flight::create(['name' => "2 hous have been rest in empty"]);
    }
}