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

Route::get('/', function () {
    return view('welcome');
});

Route::get('jualbeli', function(){
	$a = App\produk::all();
	$b = App\pengaturan::all();
	$c = App\pengguna::all();
	$d = App\Post::all();
	return $a."</br></br>".$b."</br></br>".$c."</br></br>".$d;
});

// Latihan
Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/loop/{data?}/{data2?}','MyController@faram');
Route::get('/coba/{nama}','SiswaController@percobaan5');





