<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerSatu;
use App\Http\Controllers\ControllerDua;

Route::get("/view1", [ControllerSatu::class, "satu"]);
Route::get("/view2", [ControllerSatu::class, "dua"]);
Route::get("/view3", [ControllerSatu::class, "tiga"]);
Route::get("/view4", [ControllerDua::class, "kota"]);
Route::get("/view5", [ControllerDua::class, "kampus"]);
Route::get("/view6", [ControllerDua::class, "panggilan"]);

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
    // return view('welcome');
// });
Route::get("nama", function() {
	return "<h1>Nama saya Aulia Rachman</1>";
});
Route::get("nim", function() {
	return "<h1>Nim 1811102441019</1>";
});
Route::get("prodi", function() {
	return "<h1>Saya dari Teknik Informatika</1>";
});
Route::get("semester", function() {
	return "<h1>Saya Semester 5</1>";
});
Route::get("alamat", function() {
	return "<h1>Alamat saya di Jl. K.S Tubun</1>";
});