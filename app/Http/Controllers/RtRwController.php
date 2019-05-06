<?php

namespace App\Http\Controllers;

use App\RtRw;
use Illuminate\Http\Request;

class RtRwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.rtrw.index',['data'=>RtRw::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rtrw.create');
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
            'nama_rt'=>'required',
            'nama_rw'=>'required',
        ]);

        $r = new RtRw($request->all());
        $r->save();

        return redirect()->route('rtrw.index')->with('message','Rt Rw Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RtRw  $rtRw
     * @return \Illuminate\Http\Response
     */
    public function show(RtRw $rtRw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RtRw  $rtRw
     * @return \Illuminate\Http\Response
     */
    public function edit($rtRw)
    {
        return view('pages.rtrw.edit',['data'=>RtRw::find($rtRw)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RtRw  $rtRw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RtRw $rtRw , $id)
    {
        
        $this->validate($request,[
            'nama_rt'=>'required',
            'nama_rw'=>'required',
        ]);

        RtRw::where('id',$id)->update($request->except('_method','_token'));

        return redirect()->route('rtrw.index')->with('message','Rt Rw Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RtRw  $rtRw
     * @return \Illuminate\Http\Response
     */
    public function destroy( $rtRw)
    {
        RtRw::destroy($rtRw);
        return back()->with('message','RT /  RW Terhapus');
    }
}
