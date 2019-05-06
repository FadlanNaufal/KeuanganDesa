<?php

namespace App\Http\Controllers;

use App\Warga;
use App\KepalaKeluarga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('pages.warga.index',['data'=>Warga::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.warga.create',['kk'=>KepalaKeluarga::all()]);
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
            'status'=>'required',
            'pekerjaan'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
        ]);

        $warga = new Warga($request->all());
        $warga->save();
        return redirect()->route('warga.index')->with('message','Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga)
    {
        return view('pages.warga.edit',[
            'data'=>$warga,
            'kk'=>KepalaKeluarga::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warga  $warga
     * @return \Illuminate\HttpResponse
     */
    public function update(Request $request,  $id)
    {
         $this->validate($request,[
            'nik'=>'required',
            'nama'=>'required',
            'status'=>'required',
            'agama'=>'required',
            'pekerjaan'=>'required',
            'alamat'=>'required',
        ]); 
         
        Warga::where('id',$id)->update($request->except('_method','_token'));
        
        return redirect()->route('warga.index')->with('message','Berhasil Update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
        return back()->with('message','Data Terhapus');
    }
}
