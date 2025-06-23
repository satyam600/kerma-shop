<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;

class TableController extends Controller
{
    function userTable() {
        $user=Userr::paginate(10);
        return view('frontend.Table_view.userTable', ['users'=>$user]);
    }
    function userSearch(Request $request) {
        $user=Userr::where('f_name', 'like', "%$request->search%")->get();
        return view('frontend.Table_view.userTable', ['users'=>$user]);
    }
}
