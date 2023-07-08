<?php


namespace App\Http\Controllers;


use App\Models\Auth;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{

    public function userList(){
        return Auth::user();

        $user = User::all();
        return response(json_encode(['data'=>$user, 'code'=>200]));
    }
    public function userListDelay(){
        sleep(5); // Delay execution for 5 seconds
        $user = User::all();
        return response(json_encode(['data'=>$user, 'code'=>200]));
    }

}
