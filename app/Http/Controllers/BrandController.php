<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand=Brand::paginate(10);
        return view('frontend.Table_view.brand.brandTable', ['brands'=>$brand]);
    }

    public function search(Request $request) {
        $brand=Brand::where('brand_name', 'like', "%$request->search%")->get();
        return view('frontend.Table_view.brand.brandTable', ['brands'=>$brand]);
    }

    function brandAdd() {
        return view('frontend.Table_view.brand.brandAdd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand=new Brand();
        $brand->brand_name=$request->brandname;
        $brand->save();
        return redirect('brand');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand=Brand::find($id);
        return view('frontend.Table_view.brand.brandView', ['brand'=>$brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    function brandUpdatView($id) {
        $brand=Brand::find($id);
        return view('frontend.Table_view.brand.brandUpdate', ['brand'=>$brand]);
    }

    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand=Brand::find($id);
        if ($brand) {
            $brand->brand_name=$request->brandname;
            $brand->updated_at=now();
            $brand->save();
            return redirect('brand');//->back()->with('success', 'Brand updated.');
        }
        else {
            return redirect('brand');//->back()->with('error', 'Brand not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete=Brand::destroy($id);
        if ($isDelete) {
            return redirect('brand');
        }
        else {
            return "Data couldnot be deleted";
        }
    }
}
