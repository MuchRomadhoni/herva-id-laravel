<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarReseller extends Model
{
    protected $fillable = [
        'nama', 'alamat','hp','email','status'
    ];
     public $table = "daftar-reseller";
}
