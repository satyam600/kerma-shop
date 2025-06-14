<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class KarmaController extends Controller
{
    function blog() {
        return view('frontend.blog');
    }
    function cart() {
        return view('frontend.cart');
    }
    function category() {
        return view('frontend.category');
    }
    function checkout() {
        return view('frontend.checkout');
    }
    function confirmation() {
        return view('frontend.confirmation');
    }
    function contact() {
        return view('frontend.contact');
    }
    function elements() {
        return view('frontend.elements');
    }
    function index() {
        return view('frontend.index');
    }
    function single_blog() {
        return view('frontend.single-blog');
    }
    function single_product() {
        return view('frontend.single-product');
    }
    function tracking() {
        return view('frontend.tracking');
    }
    
    function data() {
        $datas=Admin::all();
        return $datas->id;
    }

}
