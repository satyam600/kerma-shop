<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function registration() {
        return view('frontend.registration');
    }
    function registeredUser(Request $request) {
        return $request;
    }
}
