<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCon;
use App\Http\Controllers\postLikeCon;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/post', [PostCon::class, 'index']);
Route::post('/writepost', [PostCon::class, 'post']);
Route::post('/post/{post}',[postLikeCon::class,'store']);