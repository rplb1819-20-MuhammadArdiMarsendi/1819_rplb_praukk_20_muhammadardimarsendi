<?php

namespace App\Model\Transportasi;

use Illuminate\Database\Eloquent\Model;

class Transportasi extends Model
{
     public $table = "transportasi";
     // public $timestaps = false;
     protected $guarded=[];
     protected $fillable = ['type_transportasi_id','kode_transportasi','jumlah_kursi','keterangan'];

     public function Tipe_transportasi()
	{
	//BERELASI DENGAN MODEL StudentClass
	return $this->belongsTo(Type_Transportasi::class,'type_transportasi_id');

	}

}
