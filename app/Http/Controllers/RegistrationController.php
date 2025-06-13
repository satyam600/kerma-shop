<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;

class RegistrationController extends Controller
{
    function registration() {
        return view('frontend.registration');
    }
    function registeredUser(Request $request) {
        $request->validate([
            'username'=>'required | min:3 | max:20',
            'password'=>'required | regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!#@$%]).+$/ | confirmed',
            'fname'=>'required | min:3 | max:20',
            'lname'=>'required | min:3 | max:20',
            'gender_id'=>'required',
            'phone'=>'required | min:10 | max:10',
            'email'=>'required | email | max:50',
            'address'=>'required',
            'state'=>'required | max:40',
            'status'=>'required | max:20'
        ],[
            'password.regex'=>'The password dont have alest 1 number 1 upper and one 1 lower one of !#@$%',
            'gender_id.required'=>'Gender cannot be empty'
        ]);
        $user=new Userr();
        $user->user_name=$request->username;
        $user->f_name=$request->password;
        $user->f_name=$request->fname;
        $user->l_name=$request->lname;
        $user->gender_id=$request->gender_id;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->state=$request->state;
        $user->r_date=now();
        if ($request->terms=="Yes") {
            $user->terms="Yes"; 
        }
        else {
            $user->terms="No";
        }
        if ($request->newsletters=="Yes") {
            $user->newsletters="Yes"; 
        }
        else {
            $user->newsletters="No";
        }
        if ($request->promotion=="Yes") {
            $user->promotion="Yes"; 
        }
        else {
            $user->promotion="No";
        }
        $user->status=$request->status;
        $user->email_verified_at=now();
        $user->password=$request->password;
        $user->remember_tocken=$request->_token;
        $user->save();
        if ($user) {
            return redirect('login');
        }
        else {
            return "data cannot be added succesfully";
        }
        if ($request->terms=="Yes") {
            echo "Yes";
        }
        return $request;
    }
}
