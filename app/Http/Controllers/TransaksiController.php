<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Model\Route\Route;
use App\Model\Petugas\Petugas;
use App\Model\Pemesanan\Pemesanan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $transaksi = Pemesanan::where('status','0')->get();
        // $transaksi = Pemesanan::where('status','0')->get();
        return view('Transaksi/Index',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request->validate(
            [
              
                'petugas_id'=>'required',
                'route_id'=>'required',
                'penumpang_id'=>'required',
                'tanggal_pemesanan'=> 'required',
                'tempat_pemesanan' => 'required | max:20',
                'qty' => 'required',
                'tanggal_berangkat' => 'required',
                'bukti_pembayaran' => 'mimes:jpeg,png,jpg,gif,svg',
                'total_bayar'=>'required'

            ]
        );
       
        
        $imgName = $request->bukti_pembayaran->getClientOriginalName() . '-' . time() . '.' . 
        $request->bukti_pembayaran->extension();
        $request->bukti_pembayaran  = $request->bukti_pembayaran->move(public_path('image'), $imgName);
        $q = $request->qty;
        $t = Route::where('id','=',$request->route_id)->first();
        $h = $t->harga;
        $total  = $q * $h;
        Pemesanan::create([
            
            'petugas_id'=>$request->petugas_id,
            'route_id'=>$request->route_id,
            'penumpang_id'=>$request->penumpang_id,
            'tanggal_pemesanan'=>$request->tanggal_pemesanan,
            'tempat_pemesanan' =>$request->tempat_pemesanan,
            'qty' =>$request->qty,
            'tanggal_berangkat' =>$request->tanggal_berangkat,
            'bukti_pembayaran' =>$imgName,
            'total_bayar'=>$total


        ]);
        
        return redirect()->route('transaksi.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $transaksi = Pemesanan::where('status','0');
        $transaksi->update(['status'=>'1']);
        return redirect()->back();
    }

    public function laporan()
    {
        $transaksi = Pemesanan::all();
        // $transaksi = Pemesanan::where('status','0')->get();
        return view('Transaksi/Table',compact('transaksi'));
    }
    public function Cetaklaporan()
    {
        $transaksi = Pemesanan::all();
        // $transaksi = Pemesanan::where('status','0')->get();
        return view('Transaksi/Cetak',compact('transaksi'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Pemesanan::findOrFail($id);
        if(!$transaksi)
        {
            return redirect()->back();
        }
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
