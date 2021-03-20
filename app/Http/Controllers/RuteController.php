<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Model\Route\Route;
use App\Model\Transportasi\Transportasi;
use Illuminate\Http\Request;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Homepage()
    {
        $data_rute = Route::all();
        return view("Rute/TableRute",compact('data_rute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahRute()
    {
        $data = [
        'rute'=> Route::all(),
        'transportasi'=> Transportasi::all()    
        ];
       return view("Rute/TambahRute",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Route::create([
            
            'transportasi_id'=>$request->transportasi_id,
            'kota_awal'=>$request->kota_awal,
            'kota_akhir'=>$request->kota_akhir,
            'rute_awal'=>$request->rute_awal,
            'rute_akhir'=>$request->rute_akhir,
            'jam_cekin'=>$request->jam_cekin,
            'jam_berangkat'=>$request->jam_berangkat,
            'tanggal_berangkat'=>$request->tanggal_berangkat,
            'harga'=>$request->harga


        ]);
       
        return redirect('/Rute')->with('berhasil dihapus');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailRute($id)
    {
        $data_rute = Route::find($id);
        return view ("Rute/DetailRute",compact('data_rute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditRute($id)
    {
         $data = [
        'rute'=> Route::find($id),
        'transportasi'=> Transportasi::all()    
        ];
        
        return view("Rute/EditRute",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $validator = Validator::make( $request->all(), [
            
            'transportasi_id'=>'required',
            'kota_awal'=>'required',
            'kota_akhir'=>'required',
            'rute_awal'=>'required',
            'rute_akhir'=>'required',
            'jam_cekin'=>'required',
            'jam_berangkat'=>'required',
            'tanggal_berangkat'=>'required',
            'harga'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect('/Rute')->withErrors($validator)->withInput();
        } else {
        // $request->validate([
        //     'nominal' => 'required|max:6'
        // ]);
        // return redirect('/spp')->withErrors($request, 'nominal');
        
        
        $rute = Route::find($id);
        $rute->transportasi_id  = $request->transportasi_id; 
        $rute->kota_awal  = $request->kota_awal;
        $rute->kota_akhir = $request->kota_akhir;
        $rute->rute_awal  = $request->rute_awal;
        $rute->rute_akhir  = $request->rute_akhir;
        $rute->jam_cekin  = $request->jam_cekin;
        $rute->jam_berangkat  = $request->jam_berangkat;
        $rute->tanggal_berangkat  = $request->tanggal_berangkat;
        $rute->harga  = $request->harga;
        $rute->update();
        return redirect(route('Index.rute'));
    }
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Route::find($id);
        $data->delete();
        
        return redirect(route('Index.rute'));
    }
}
