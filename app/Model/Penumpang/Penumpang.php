<?php

namespace App\Model\Penumpang;

use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
     public $table = "penumpang";
     public $guarded = [];
     public $fillable = ['route_id','username', 'password', 'nama_penumpang', 'alamat_penumpang','tujuan',
 							'tanggal_lahir','jenis_kelamin','telephone'];
    
    public function Rute()
    {
    	return $this->belongsTo(Route::class,'route_id');
    }
}
