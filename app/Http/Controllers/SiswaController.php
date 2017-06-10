<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    //
     public function percobaan5($id)
    {
    	$a = Siswa::find($id);
    	return $a;
    }
}
