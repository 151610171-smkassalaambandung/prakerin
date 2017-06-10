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
Route::get('/test5/buah/hewan/komputer','MyController@param');

Route::get('tes/{mh}',function($mh){
    return'Pilihan Anda Adalah '.$mh;});





//percobaan
Route::get('/jenis', array('as' => 'home', 'uses' => 'MyController@percobaan6'));


Route::get('', function() {  return 'Dashboardoard'	;	 });

Route::get('awalan/{jenis?}',function($jenis=null){ 
	if($jenis == null)
	{
	return "Halaman Awal";
	}
	//1
	elseif($jenis == 'buah') 
	{
	$buah=['Mangga','Jeruk','Apel'];
	return view ("parameter.buah",compact('buah'));
	}
	//2
	elseif ($jenis == 'mahluk')
	{
    $mh=['Manusia','Binatang','Tumbuhan'];
    return view ("parameter.mahluk",compact('mh'));
	}
	//3
	elseif ($jenis == 'komputer')
	{
    $pc=['Mouse','Printer','Monitor'];
    return view ("parameter.komputer",compact('pc'));
	}
	
    }); 