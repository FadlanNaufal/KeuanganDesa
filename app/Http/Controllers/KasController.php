<?php

namespace App\Http\Controllers;

use App\Kas;
use App\KeperluanDesa;
use App\RtRw;
use Illuminate\Http\Request;

class KasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kas.index',['data'=>Kas::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kas.create',['data'=>RtRw::all()]);
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
            'total'=>'required'            
        ]); 

        $kas = new Kas($request->all());

        $kas->save();

        return redirect()->route('kas.index')->with('message','Data ditambakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function show( $kas)
    {
        return view('pages.kas.supply',[
            'data'=>Kas::find($kas),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function edit( $kas)
    {
        return view('pages.kas.edit',[
            'data'=>Kas::find($kas),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KeperluanDesa $KeperluanDesa)
    {
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kas  $kas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kas)
    {
        Kas::destroy($kas);
        return back()->with('message','Data Terhapus');
    }
}
