<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestTambahLevel;
use Illuminate\Support\Facades\Validator;

use App\Model\Level\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Homepage()
    {
        $data_level = Level::all();
        return view("Level/TableLevel",compact('data_level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TambahLevel()
    {
        $data_level = Level::all();
        return view("Level/TambahLevel",compact('data_level'));
    }

    public function ProsesTambahLevel(Request $request)
    {
        Level::Create($request->all());
        return redirect()->route('Index.level');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DetailLevel($id)
    {
        $detail_level = Level::find($id);
        return view('Level/DetailLevel',compact('detail_level'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EditLevel($id)
    {
        $data_level = Level::find($id);
        return view("Level/EditLevel",compact('data_level'));
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
            
            'nama_level'=> 'required'
            
        ]);
        if ($validator->fails()) {
            return redirect('/Level')->withErrors($validator)->withInput();
        } else {
        // $request->validate([
        //     'nominal' => 'required|max:6'
        // ]);
        // return redirect('/spp')->withErrors($request, 'nominal');
        
        
        $level = Level::find($id);
        $level->nama_level  = $request->nama_level;
        $level->update();
        return redirect(route('Index.level'));
    }

  }  /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Level::find($id);
        $data->delete();
        return redirect(route('Index.level'));
    }
}
