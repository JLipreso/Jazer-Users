<?php

namespace Jazer\Users\Http\Controllers\SignIn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmailPassword extends Controller
{
    public static function signin(Request $request) {
        $source = DB::connection("conn_users")
            ->table("people")
            ->select("project_refid", "firstname", "lastname", "email", "blocked", "active")
            ->where([
                "project_refid"     => env('project_refid'),
                "email"             => $request['email'],
                "password"          => $request['password']
            ])
            ->get();

        if(count($source) > 0) {
            return [
                "success"   => true,
                "message"   => "Authenticated",
                "profile"   => $source[0]
            ];  
        }
        else {
            return [
                "success"   => false,
                "message"   => "Fail to authenticate",
                "profile"   => []
            ]; 
        }
    }
}