<?php

namespace Roma\ReiTs\core;
use Illuminate\Database\Capsule\Manager as Capsule;

class DB
{
    public object $capsule;
    public function __construct()
    {
        $this->capsule = new Capsule();
        $this->capsule->addConnection([
            "driver" => "pgsql",
            "host" => "127.0.0.1",
            "database" => "roma",
            "username" => "roma",
            "password" => "230678"
        ]);

        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
        return $this->capsule;
    }

    public function connect() :object
    {
        return $this->capsule;
    }
}