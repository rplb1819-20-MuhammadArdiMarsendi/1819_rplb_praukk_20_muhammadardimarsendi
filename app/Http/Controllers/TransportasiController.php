<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Transportasi\Transportasi;
use App\Model\Type_Transportasi\Type_Transportasi;
use App\Http\Requests\RequestTambahTransportasi;
use Illuminate\Support\Facades\Validator;




class TransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Homepage()
    {
        $data_transportasi = Transportasi::all();
        return view("Transportasi/TableTransportasi",compact('data_transportasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahTransportasi()
    {
        $data = [
            'transportasi'  => Transportasi::all(),
            'type_transportasi' => Type_Transportasi::all()
        ];

        return view("Transportasi/TambahTransportasi",$data);
        
    }

    public function ProsesTambahTransportasi(Request $request)
    {
      Transportasi::create([
            
            'type_transportasi_id'=>$request->type_transportasi_id,
            'kode_transportasi'=>$request->kode_transportasi,
            'jumlah_kursi'=>$request->jumlah_kursi,
            'keterangan'=>$request->keterangan


        ]);
        //JIKA BENAR MAKA KEMBALI KE INDEX SISWA
        return redirect('/Transportasi')->with('berhasil dihapus');
        
    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailTransportasi($id)
    {
       $data_transportasi = Transportasi::find($id);
        return view("Transportasi/DetailTransportasi",compact('data_transportasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditTransportasi($id)
    {
        $data =[
             'transportasi'  => Transportasi::find($id),
            'type_transportasi' => Type_Transportasi::all()
        ];
        return view ("Transportasi/EditTransportasi",$data);
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
            
            'type_transportasi_id'=> 'required',
            'kode_transportasi'=> 'required',
            'jumlah_kursi'=> 'required',
            'keterangan' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/Transportasi')->withErrors($validator)->withInput();
        } else {
        // $request->validate([
        //     'nominal' => 'required|max:6'
        // ]);
        // return redirect('/spp')->withErrors($request, 'nominal');
        
        
        $transportasi = Transportasi::find($id);
        $transportasi->type_transportasi_id = $request->type_transportasi_id;
        $transportasi->kode_transportasi = $request->kode_transportasi;
        $transportasi->jumlah_kursi = $request->jumlah_kursi;
        $transportasi->keterangan  = $request->keterangan;
        $transportasi->update();
        return redirect(route('Index.transportasi'));
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
        $data = Transportasi::find($id);
        $data->delete();
        
        return redirect('/Transportasi')->with('berhasil dihapus');
    }
}
