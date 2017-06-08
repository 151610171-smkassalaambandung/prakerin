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
}
