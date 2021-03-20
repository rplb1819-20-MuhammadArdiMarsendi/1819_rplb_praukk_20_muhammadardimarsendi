<?php

namespace App\Model\Petugas;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
	protected $guarded=[];
     protected $fillable = ['level_id','username','password','nama_petugas'];
     

   public function Level_petugas()
	{
	//BERELASI DENGAN MODEL StudentClass
	return $this->belongsTo(Level::class,'level_id');

	}
}
