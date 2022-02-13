<?php
require 'vendor/autoload.php';
use Roma\ReiTs\Core\Model as Model;
use Roma\ReiTs\Core\DB as DataBase;

$database = new DataBase();
$model = new Model($database);
$model->db::schema()->create('todos', function ($table) {
    $table->increments('id');
    $table->string('todo');
    $table->string('description');
    $table->string('category');
    $table->integer('user_id')->unsigned();
    $table->timestamps();
});

