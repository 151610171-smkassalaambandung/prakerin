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
    public function percobaan5()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	$hewan = ['Kucing','Anjing','Lumba-lumba','Gajah','Harimau'];
    	$komputer = ['Lenovo','Hp','Acer','Toshiba','Samsung'];
    	return view('latihan', compact('buah','hewan','komputer'));
    }
}
