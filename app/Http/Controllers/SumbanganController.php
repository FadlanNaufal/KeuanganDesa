<?php

namespace App\Http\Controllers;

use App\Sumbangan;
use App\Warga;
use Illuminate\Http\Request;

class SumbanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.sumbangan.index',['data'=>Sumbangan::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sumbangan.create',[
            'warga'=>Warga::all()
        ]);
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
            'nama_donatur'=>'required',
            'tujuan'=>'required',
            'total'=>'required',
        ]);

        $s = new Sumbangan($request->all());
        $s->save();

        return redirect()->route('sumbangan.index')->with('message','Sumbangan di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        Sumbangan::where('id',$id)
                    ->update([
                        'status'=>'diberikan'
                    ]);

        return back()->with('message','Sumbangan Diberikan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumbangan $sumbangan)
    {
        return view('pages.sumbangan.edit',[
            'data'=>$sumbangan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_donatur'=>'required',
            'tujuan'=>'required',
            'total'=>'required',
        ]);

        Sumbangan::where('id',$id)->update($request->except('_method','_token'));
        return redirect()->route('sumbangan.index')->with('message','Sumbangan di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumbangan  $sumbangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumbangan $sumbangan)
    {
        $sumbangan->delete();
        return back()->with('message','Data terhapus');
    }
}

