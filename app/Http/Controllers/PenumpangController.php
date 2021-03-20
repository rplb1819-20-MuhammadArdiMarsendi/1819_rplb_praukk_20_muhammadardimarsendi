<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\Penumpang\Penumpang;
use App\Model\Route\Route;


class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Homepage()
    {
      $data_penumpang = Penumpang::all();
       return view("Penumpang/TablePenumpang",compact('data_penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahPenumpang()
    {
        $data = [
            'rute_id' => Route::all(),
            'penumpang' => Penumpang::all()
        ];

        return view("Penumpang/TambahPenumpang",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Penumpang::create([
            
            'route_id'=>$request->route_id,
            'username'=>$request->username,
            'password'=>$request->password,
            'nama_penumpang'=>$request->nama_penumpang,
            'alamat_penumpang'=>$request->alamat_penumpang,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'telephone'=>$request->telephone

        ]);
       
        return redirect('/Penumpang')->with('berhasil dihapus');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailPenumpang($id)
    {
        $data_penumpang = Penumpang::find($id);
        return view ("Penumpang/DetailPenumpang",compact('data_penumpang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditPenumpang($id)
    {
        $data = [
            'rute' => Route::all(),
            'penumpang' => Penumpang::find($id)
        ];
        return view("Penumpang/EditPenumpang",$data);
        
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
            
            'route_id'=>'required',
            'username'=>'required',
            'password'=>'required',
            'nama_penumpang'=>'required',
            'alamat_penumpang'=>'required',
            'tanggal_lahir'=>'required',
            'jenis_kelamin'=>'required',
            'telephone'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect('/Penumpang')->withErrors($validator)->withInput();
        } else {
        // $request->validate([
        //     'nominal' => 'required|max:6'
        // ]);
        // return redirect('/spp')->withErrors($request, 'nominal');
        
        
        $penumpang = Penumpang::find($id);
        $penumpang->route_id  = $request->route_id; 
        $penumpang->username  = $request->username;
        $penumpang->password = $request->password;
        $penumpang->nama_penumpang  = $request->nama_penumpang;
        $penumpang->alamat_penumpang  = $request->alamat_penumpang;
        $penumpang->tanggal_lahir  = $request->tanggal_lahir;
        $penumpang->jenis_kelamin  = $request->jenis_kelamin;
        $penumpang->telephone  = $request->telephone;
        $penumpang->update();
        return redirect(route('Index.penumpang'));
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
         $data = Penumpang::find($id);
        $data->delete();
        
        return redirect(route('Index.penumpang'));
    }
}
