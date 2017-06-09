<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // passing data basic
    public function percobaan()
    {
    	$a = "Temi";
    	return "Nama Saya Adalah ".$a;
    }

    // passing data view
    public function percobaan2()
    {
    	return view('about');
    }

    // passing data variabel to compact
    public function percobaan3()
    {
    	$a = "Temi";
    	$b = "XII RPL 2";
    	$c = "SMK Assalaam";
    	return view('latihan.saya', compact('a','b','c'));
    }
    public function percobaan4()
    {
    	$a = "1";
    	$b = "2";
    	$c = "3";
    	return view('latihan.seleksi', compact('a','b','c'));
    }
    public function faram($ata,$aa)
    {
        $koplak = ['hewan' => ['kucing' => ['persia', 'anggora', 'garong'],
                                'ikan'=>['sepat','jaer','gurame'],
                                'burung'=['merpati','beo','gagak']];
                   'komputer' => [''=> ['', 'manggis', 'durian', 'naga'],
                              ''
                   'laptop' => ['polytron', 'lg', 'asus', 'acer']];
$baru = $koplak[$ata];
        return view('campuran', compact('baru','ata','aa');
    }
}