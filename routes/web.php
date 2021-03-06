<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
 <a class="nav-link" href="{{ route('login') }}">Login</a>
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Registration:

Route::get('registration', [CustomAuthController::class, 'registration']);
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

//Login:

Route::get('login', [CustomAuthController::class, 'index']);
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

//dashboard
Route::get('/dashboard',[CustomAuthController::class,'dashboard']);