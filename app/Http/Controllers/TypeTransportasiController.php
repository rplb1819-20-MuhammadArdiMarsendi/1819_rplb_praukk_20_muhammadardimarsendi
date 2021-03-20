<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Type_Transportasi\Type_Transportasi;
use Illuminate\Support\Facades\Validator;


class TypeTransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Homepage()
    {
        $dtp = Type_Transportasi::all();
        return view("Type_Transportasi/TableTypeTransportasi",compact('dtp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahTypeTransportasi()
    {
        return view("Type_Transportasi/TambahTypeTransportasi");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Type_Transportasi::Create($request->all());
        return redirect()->route('Index.type');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailTypeTransportasi($id)
    {

        $dtp = Type_Transportasi::find($id);
        return view("Type_Transportasi/DetailTypeTransportasi",compact('dtp'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditTypeTransportasi($id)
    {
        $data_tipe = Type_Transportasi::find($id);
        return view("Type_Transportasi/EditTypeTransportasi",compact('data_tipe'));
      
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
            
            'nama_type'=> 'required',
            'keterangan' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/TypeTransportasi')->withErrors($validator)->withInput();
        } else {
        // $request->validate([
        //     'nominal' => 'required|max:6'
        // ]);
        // return redirect('/spp')->withErrors($request, 'nominal');
        
        
        $tipe = Type_Transportasi::find($id);
        $tipe->nama_type = $request->nama_type;
        $tipe->keterangan  = $request->keterangan;
        $tipe->update();
        return redirect(route('Index.type'));
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Hapus($id)
    {
         //MENGGMBIL ID YANG DILEMPAR DARI URL LALU MENGHAPUSNYA
        $dtp = Type_Transportasi::find($id);
        $dtp->delete();
        
        return redirect(route('Index.type'));
    }
}
