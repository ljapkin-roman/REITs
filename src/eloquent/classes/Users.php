<?php


namespace Roma\ReiTs\eloquent\classes;

use Illuminate\Database\Eloquent\Model as Eloquent;
class Users extends Eloquent
{
    protected $fillable = [
        'name', 'email', 'password', 'userimage'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}