<?php

use Illuminate\Support\Facades\Route;

// Frontend Side Controller
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\AuthFrontendController;

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

Route::get('/', [HomeFrontendController::class, 'index'])->name('frontend.home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ################################## : Frontend Routes : ################################### 
// Login, Register and Forget Password
Route::get('/user/login', [AuthFrontendController::class, 'loginPage']);
Route::post('/user-signin', [AuthFrontendController::class, 'signIn'])->name('frontend.user.signin');
Route::get('/user/register', [AuthFrontendController::class, 'registerPage']);
Route::post('user-store', [AuthFrontendController::class, 'storeUser'])->name('frontend.user.store');
Route::get('/user/forget-password', [AuthFrontendController::class, 'forgetPasswordPage']);
Route::get('/user/my-account', [AuthFrontendController::class, 'myAccountPage']);
// Wallet 
Route::post('/store-wallet-amount', [AuthFrontendController::class, 'storeWalletAddress']);

