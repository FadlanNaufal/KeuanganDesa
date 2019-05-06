<?php

namespace App\Http\Controllers;

use App\KepalaKeluarga;
use Illuminate\Http\Request;

class KepalaKeluargaController extends Controller
{
     public function index()
    {
        return view('pages.kk.index',['data'=>KepalaKeluarga::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'pekerjaan'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
        ]);

        $kk = new KepalaKeluarga($request->all());
        $kk->save();
        return redirect()->route('kk.index')->with('message','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KK  $kK
     * @return \Illuminate\Http\Response
     */
    public function show(KepalaKeluarga $kepalaKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KK  $kK
     * @return \Illuminate\Http\Response
     */
    public function edit($kepalaKeluarga)
    {
        $data = KepalaKeluarga::find($kepalaKeluarga);
        return view('pages.kk.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KK  $kK
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KepalaKeluarga $kepalaKeluarga , $id)
    {
         $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'agama'=>'required',
            'pekerjaan'=>'required',
            'alamat'=>'required',
        ]); 
         
        KepalaKeluarga::where('id',$id)->update($request->except('_method','_token'));
        
        return redirect()->route('kk.index')->with('message','Berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KK  $kK
     * @return \Illuminate\Http\Response
     */
    public function destroy($kepalaKeluarga)
    {
        KepalaKeluarga::destroy($kepalaKeluarga);
        return back()->with('message','Berhasil Menghapus data');
    }
}
