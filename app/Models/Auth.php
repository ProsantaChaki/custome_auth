<?php


namespace App\Models;


class Auth
{
    public static function user(){
        return app('authuser')->user;
    }
    public static function id(){
        return app('authuser')->user['id'];
    }
}
