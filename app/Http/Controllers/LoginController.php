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
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->intended('index'); // Did the user try to access a protected page before logging in? If yes, redirect them back to that page. If no, redirect them to the default page 'dashboard'.
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

    function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}