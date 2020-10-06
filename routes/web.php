<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowHome;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::class);

Route::prefix('admin')->group(function () {
    Route::resource('/navbar', 'App\Http\Controllers\admin\NavbarController');
    Route::resource('/section2', 'App\Http\Controllers\admin\Section2Controller');
    Route::resource('/section3', 'App\Http\Controllers\admin\Section3Controller');
    Route::resource('/section4', 'App\Http\Controllers\admin\Section4Controller');
    Route::resource('/section5', 'App\Http\Controllers\admin\Section5Controller');
    Route::resource('/section6', 'App\Http\Controllers\admin\Section6Controller');
    Route::resource('/section7', 'App\Http\Controllers\admin\Section7Controller');
    Route::resource('/footer', 'App\Http\Controllers\admin\FooterController');
});