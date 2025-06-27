<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KarmaController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', [KarmaController::class, 'blog']);
Route::get('cart', [KarmaController::class, 'cart']);
Route::get('category', [KarmaController::class, 'category']);
Route::get('checkout', [KarmaController::class, 'checkout']);
Route::get('confirmation', [KarmaController::class, 'confirmation']);
Route::get('contact', [KarmaController::class, 'contact']);
Route::get('elements', [KarmaController::class, 'elements']);
Route::get('single-blog', [KarmaController::class, 'single_blog']);
Route::get('single-product', [KarmaController::class, 'single_product']);
Route::get('tracking', [KarmaController::class, 'tracking']);

Route::get('data', [KarmaController::class, 'data']);

//Registration 
Route::get('registration', [RegistrationController::class, 'registration']);
Route::post('registration', [RegistrationController::class, 'registeredUser']);

//login
Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'loginUser']);
//logout
Route::get('logout', [LoginController::class, 'logout']);

//home Page
Route::get('index', [IndexController::class, 'index']);

//table view
//user Table
Route::middleware('logincheck')->group(function() {
    Route::get('userTable', [TableController::class, 'userTable']);
    Route::post('searchUser', [TableController::class, 'userSearch']);
});
Route::middleware('logincheck')->prefix('brand')->group(function() {
    //Brand Table
    Route::get('/', [BrandController::class, 'index']);
    Route::post('search', [BrandController::class, 'search']);
    Route::get('del/{id}', [BrandController::class, 'destroy']);
    Route::get('add', [BrandController::class, 'brandAdd']);
    Route::post('store', [BrandController::class, 'store']);
    Route::get('/{id}', [BrandController::class, 'show']);

    Route::get('/{id}/edit', [BrandController::class, 'brandUpdatView']);
    Route::patch('/{id}', [BrandController::class, 'update']);
    //    
});