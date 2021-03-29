<?php

namespace App\Model\Petugas;
use App\Model\Level\Level;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
	public $table = "petugas";
	protected $guarded=[];
     protected $fillable = ['level_id','username','password','nama_petugas'];
     

   public function level()
	{
	
	return $this->belongsTo(Level::class);

	}
}
