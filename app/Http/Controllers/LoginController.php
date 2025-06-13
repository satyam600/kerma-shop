<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Userr;

class LoginController extends Controller
{
    function login() {
        return view('frontend.login');
    }
    function loginUser(Request $request) {
        $user=Userr::where('user_name', $request->username);
        return $user;
    }
}


//bjhhhhhhhhhhhhhhhhhhhhhhhh