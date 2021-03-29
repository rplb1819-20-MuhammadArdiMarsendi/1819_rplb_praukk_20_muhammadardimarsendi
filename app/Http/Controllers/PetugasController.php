<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Petugas\Petugas;
use App\Model\Level\Level;


class PetugasController extends Controller
{
  
    public function Homepage()
    {
       $data_petugas = Petugas::all();
       return view('Petugas/TablePetugas',compact('data_petugas'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'petugas' => Petugas::all(),
            'level_id' => Level::all()
        ];
        return view('Petugas/TambahPetugas',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Petugas::create([
            
            'level_id'=>$request->level_id,
            'username'=>$request->username,
            'password'=>$request->password,
            'nama_petugas'=>$request->nama_petugas


        ]);
        //JIKA BENAR MAKA KEMBALI KE INDEX SISWA
        return redirect(route('Index.petugas'));
        
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailPetugas($id)
    {
        $petugas = Petugas::find($id);
        return view('Petugas/DetailPetugas',compact('petugas'));  
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditPetugas($id)
    {  
        $data = [
            'petugas' => Petugas::find($id),
            'level' => Level::all()
        ];
             return view('Petugas/EditPetugas',$data);  
   
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
         //VALIDASI
         $validator = Validator::make( $request->all(), [
            
            'level_id'=> 'required',
            'username' => 'required',
            'password' => 'required',
            'nama_petugas' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/Petugas')->withErrors($validator)->withInput();
        } else {
        
        
        
        $petugas = Petugas::find($id);
        $petugas->level_id  = $request->level_id; 
        $petugas->username  = $request->username;
        $petugas->password = $request->password;
        $petugas->nama_petugas  = $request->nama_petugas;
        $petugas->update();
        return redirect(route('Index.petugas'));
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
        $data = Petugas::find($id);
        $data->delete();
        
        return redirect(route('Index.petugas'));
    }
}
