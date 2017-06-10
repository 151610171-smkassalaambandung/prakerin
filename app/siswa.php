<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable =  ['nama','jk','alamat'];
    protected $visible =  ['nama','jk','alamat'];
    public $timestamps = true ;
}
