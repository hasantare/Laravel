<?php
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
//Route::get('/', function () {
//    return view('welcome');
//});
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB as DBAlias;

Route::get('students', function () {
    return view('students');
});

Route::get('class', function () {
   $names = DBAlias::table('users')->pluck('name');
   return view('class',compact('names'));
});

Route::get('course', function (){
    return view('course');
});

Route::get('/{name}' , function ($name){
   $user = DB::table('users')->where('name',$name)->get();
   return view('show' , compact('user'));
});
