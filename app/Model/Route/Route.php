<?php

namespace App\Model\Route;

use Illuminate\Database\Eloquent\Model;
use App\Model\Transportasi\Transportasi;
class Route extends Model
{
	public $guarded = [];
    public $table = 'routes';
    public $fillale =['transportasi_id','kota_awal','kota_akhir',
    'rute_awal','rute_akhir','jam_cekin','jam_berangkat','tanggal_berangkat','harga'];

    public function transportasi()
    {
    	return $this->belongsTo(Transportasi::class,'transportasi_id');
    }
}
