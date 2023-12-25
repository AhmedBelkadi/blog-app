<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SubscribeRequest;

class SubscribeController extends Controller
{
    public function showSubscribe(){
        return view("subscribe");
    }
    public function subscribe( SubscribeRequest $req ){
        $data = $req->validated();
        $data["password"] = Hash::make($req->password);
        User::create($data);
        return to_route("showLogin");
    }
}
