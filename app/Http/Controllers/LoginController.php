<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Userr;
use App\Rules\LoginRule;
use App\Rules\UserRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login() {
        return view('frontend.login');
    }
    public function username() {
        return 'user_name';
    }
    function loginUser(Request $request) {
        $credentials=$request->only('user_name', 'password'); //$credentials=['username'=>'current_input_in request', 'password'=>'current_iput_in request]
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index');
        }
        return back()->withErrors(['user_name' => 'Invalid credentials']);

        //Other way to login
        // $loginPassed = false;
        // $message = 'User not found.';
        // try {
        // $user=Userr::where('user_name', $request->username)->firstOrFail();
        // }

        // catch (\Exception $e) {
        //     $loginPassed = false;
        //     $message = 'User not found.';   
        //     // return view('frontend.login');             
        
        //     $request->validate([
        //         'username' => [new UserRule($loginPassed, $message)]
        //     ]);
        // }
        // if ($user->password==$request->password) {
        //     $loginPassed = true;
        // } else {
        //     $message = 'Incorrect password.';
        // }
        // $request->validate([
        // 'password' => [new LoginRule($loginPassed, $message)]
        // ]);
        // $request->session()->put('user', $user);
        // return redirect('index');
    }

    function logout() {
        session()->pull('user');
        return redirect('login');
    }
}