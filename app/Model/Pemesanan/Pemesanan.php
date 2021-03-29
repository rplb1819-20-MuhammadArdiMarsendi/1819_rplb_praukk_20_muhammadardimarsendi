<?php

namespace App\Model\Pemesanan;

use Illuminate\Database\Eloquent\Model;
use App\Model\Route\Route;
use App\Model\Penumpang\Penumpang;
use App\Model\Petugas\Petugas;

class Pemesanan extends Model

{
 
     public $table = "pemesanan";
   
    protected $fillable = ['petugas_id',
                             'route_id',
                            'penumpang_id',
                            'tanggal_pemesanan',
                            'tempat_pemesanan',
                            'qty',
                            'tanggal_berangkat',
                            'bukti_pembayaran',
                            'status',
                                'total_bayar'];

    public function rute()
    {
        return $this->belongsTo(Route::class,'route_id');

    }

    public function penumpang()
    {
        return $this->belongsTo(Penumpang::class,'penumpang_id');

    }
    
    public function petugas()
    {
        return $this->belongsTo(Petugas::class,'petugas_id');

    }
}