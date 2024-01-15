<?php

use Illuminate\Support\Facades\Route;
//walau di folder nama appnya huruf kecil, tetap tulis dengan huruf kapital didepannya
use App\Http\Controllers\DosenController;

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

Route::get("halo", function() {
    return view("halo");
});

Route::get("contoh", function() {
    return "berikut contoh jika kita tidak mengembalikan view";
});

//pada bagian index, ini diartikan sebagai kita memanggil method index pada class controller DosenController
Route::get('dosen', [DosenController::class, "index"]);