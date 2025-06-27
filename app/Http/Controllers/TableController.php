<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;
use App\Models\Brand;

class TableController extends Controller
{
    //User Table 
    function userTable() {
        $user=Userr::paginate(10);
        return view('frontend.Table_view.user.userTable', ['users'=>$user]);
    }
    function userSearch(Request $request) {
        $user=Userr::where('f_name', 'like', "%$request->search%")->get();
        return view('frontend.Table_view.user.userTable', ['users'=>$user]);
    }

    //Brand Table
    function brandTable() {
        $brand=Brand::paginate(10);
        return view('frontend.Table_view.brandTable', ['brands'=>$brand]);
    }
    function brandSearch(Request $request) {
        $brand=Brand::where('f_name', 'like', "%$request->search%")->get();
        return view('frontend.Table_view.brandTable', ['brands'=>$brand]);
    }
    function brandDelete($id) {
        $isDelete=Brand::destroy($id);
        if ($isDelete) {
            return redirect('brandTable');
        }
        else {
            return "Data couldnot be deleted";
        }
    }
    function brandAdd() {
        return view('frontend.Table_view.brandAdd');
    }
    function brandAddSubmit(Request $request) {
        $brand=new Brand();
        $brand->brand_name=$request->brandname;
        $brand->save();
        return redirect('brandTable');
    }
    function brandView($id) {
        $brand=Brand::find($id);
        return view('frontend.Table_view.brandView', ['brand'=>$brand]);
    }
    function brandUpdatView($id) {
        $brand=Brand::find($id);
        return view('frontend.Table_view.brandUpdate', ['brand'=>$brand]);
    }
    function brandUpdat(Request $request, string $id) {
        $brand=Brand::find($id);
        return $request->all();
        die();
        if ($brand) {
            $brand->brand_name=$request->brandname;
            $brand->updated_at=now();
            $brand->save();
            return redirect('brandTable');//->back()->with('success', 'Brand updated.')
        }
        else {
            return redirect()->back()->with('error', 'Brand not found.');
        }
    }
}
