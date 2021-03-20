<?php

namespace App\Model\Type_Transportasi;

use Illuminate\Database\Eloquent\Model;

class Type_Transportasi extends Model
{
     public $table = "type_transportasi";
     protected $guarded = [];
      protected $fillable = ['nama_type','keterangan'];

      public function Tipe()
	{
	//BERELASI DENGAN MODEL StudentClass
	return $this->HasOne(Transportasi::class,'transportasi');

	}
}
