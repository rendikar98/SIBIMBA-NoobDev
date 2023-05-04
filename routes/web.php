<?php

use App\Http\Controllers\home;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/data_bimbingan', function () {
    return view('data_bimbingan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/inputdata', function () {
    return view('inputdata');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource("data_bimbingan", App\Http\Controllers\dataController::class);

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/barchart/Data', function(){
    $data = DB::table('data_bimbingan')->get();
    return response()->json($data);
});

Route::get('/barchart', function(){
    return view('statistic.barchart');
});

Route::get('/login', function () {
    return view('login');
});