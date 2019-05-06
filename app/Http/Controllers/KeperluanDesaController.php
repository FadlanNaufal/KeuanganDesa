<?php

namespace App\Http\Controllers;

use App\KeperluanDesa;
use App\Kas;
use Illuminate\Http\Request;

class KeperluanDesaController extends Controller
{
   public function index()
    {
        return view('pages.keperluan.index',['data'=>KeperluanDesa::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $kas = Kas::sum('total');
        
        return view('pages.keperluan.create',compact('kas'));
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
     * @param  \App\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function show(KeperluanDesa $keperluan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function edit(KeperluanDesa $keperluan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kas)
    {
         $kas = Kas::find($kas);

         if($kas->first()->total < $request->total){
            return back()->with('message','Melebihi Kas Tersedia');
         }else{

            $current = $kas->first()->total - $request->total;

            $id = KeperluanDesa::create($request->all())->id;

            $kas->update([
                'total'=>$current
            ]);
         }

        return redirect()->route('keperluan.index')->with('message','Berhasil Dipakai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keperluan  $keperluan
     * @return \Illuminate\Http\Response
     */

}
