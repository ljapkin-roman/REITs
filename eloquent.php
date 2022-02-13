<?php
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    "driver" => "pgsql",
    "host" => "127.0.0.1",
    "database" => "roma",
    "username" => "roma",
    "password" => "230678"
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
