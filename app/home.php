<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $fillable = [
        'nama', 'alamat','hp','email'
    ];
     public $table = "daftar-reseller";
}
