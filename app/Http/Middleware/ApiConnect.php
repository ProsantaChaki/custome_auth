<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiConnect
{

    public function handle(Request $request, Closure $next)
    {

        $userData = app('authuser');

        $userData->user=[
            'id'=>1,
            'name'=>'chaki',
            'email'=>'aaa@gmail.com'
        ];
        return $next($request);
    }

}
