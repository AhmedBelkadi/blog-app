<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class LoginController extends Controller
{
    public function showLogin ()
    {
        return view("login");
    }

    public function login( Request $request )
    {

            $request->validate([
                "email"=>"required"
            ]);
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
            $request->session()->regenerate();
            return to_route("home");
        }else{
            return to_route("showLogin")->with("error", "3awd l mot de pass rah 3ndk ghalat alkhawa dyali");
        }

    }

    public function logout(Request $request)
    {
//        dd("Hhh");
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route("home");
    }
}
