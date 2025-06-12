<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KarmaController;
use App\Http\Controllers\RegistrationController;

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
Route::get('index', [KarmaController::class, 'index']);
Route::get('login', [KarmaController::class, 'login']);
Route::get('single-blog', [KarmaController::class, 'single_blog']);
Route::get('single-product', [KarmaController::class, 'single_product']);
Route::get('tracking', [KarmaController::class, 'tracking']);

Route::get('data', [KarmaController::class, 'data']);

//Registration 
Route::get('registration', [RegistrationController::class, 'registration']);
Route::post('registration', [RegistrationController::class, 'registeredUser']);