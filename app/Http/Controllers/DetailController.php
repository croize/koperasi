<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Angsuran;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $as = Detail::all();
      return view('detail.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $as = Angsuran::all();
        return view('detail.create')->with('sa',$as);
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
        'id_angsuran' => 'required',
        'tgl_jatuh_tempo' => 'required',
        'besar_angsuran' => 'required',
        'ket' => 'required',
      ]);

      $sapi = new Detail();
      $sapi->id_angsuran = $request->id_angsuran;
      $sapi->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
      $sapi->besar_angsuran = $request->besar_angsuran;
      $sapi->ket = $request->ket;
      $sapi->save();

      return redirect('detail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sapi = Detail::find($id);
      return view('detail.show')->with('sa',$sapi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sapi = Detail::find($id);
      $ang = Angsuran::all();
      return view('detail.edit')->with('sa',$ang)->with('de',$sapi);
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
      $this->validate($request,[
        'id_angsuran' => 'required',
        'tgl_jatuh_tempo' => 'required',
        'besar_angsuran' => 'required',
        'ket' => 'required',
      ]);

      $sapi = Detail::find($id);
      $sapi->id_angsuran = $request->id_angsuran;
      $sapi->tgl_jatuh_tempo = $request->tgl_jatuh_tempo;
      $sapi->besar_angsuran = $request->besar_angsuran;
      $sapi->ket = $request->ket;
      $sapi->save();

      return redirect('detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
