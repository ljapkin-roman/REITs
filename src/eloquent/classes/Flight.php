<?php


namespace Roma\ReiTs\eloquent\classes;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Roma\ReiTs\core\DB as Capsule;


class Flight extends Eloquent
{
    protected $fillable = ['name'];

}