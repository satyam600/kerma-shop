<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Userr;
use App\Rules\LoginRule;
use App\Rules\UserRule;

class LoginController extends Controller
{
    function login() {
        return view('frontend.login');
    }
    function loginUser(Request $request) {
        $loginPassed = false;
        $message = 'User not found.';
        try {
        $user=Userr::where('user_name', $request->username)->firstOrFail();
        }

        catch (\Exception $e) {
            $loginPassed = false;
            $message = 'User not found.';   
            // return view('frontend.login');             
        
            $request->validate([
                'username' => [new UserRule($loginPassed, $message)]
            ]);
        }
        if ($user->password==$request->password) {
            $loginPassed = true;
        } else {
            $message = 'Incorrect password.';
        }
        $request->validate([
        'password' => [new LoginRule($loginPassed, $message)]
        ]);
        return redirect('index');
    }
}