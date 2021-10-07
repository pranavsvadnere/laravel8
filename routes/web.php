<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('first-page',function(){
 return view('first-page');

} );

Route::get('second',function() {
return view('second-page');
} );


use App\Http\Controllers\HelloController;

Route::get('/hello',[HelloController::class,'example']);


use App\Http\Controllers\Pranav;
Route::get('/pranav/{fname}/{lname}',[Pranav::class,'welcome']);
