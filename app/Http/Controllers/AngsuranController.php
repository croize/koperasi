<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use App\Angsuran;
use App\Katagori;

class AngsuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ang = Angsuran::all();
        return view('angsuran.index')->with('sa',$ang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ang = Anggota::all();
      $kat = Katagori::all();
      return view('angsuran.create')->with('sa',$ang)->with('gar',$kat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'id_anggota' => 'required',
        'id_katagori' => 'required',
        'tgl_pembayaran' => 'required',
        'angsuran_ke' => 'required',
        'besar_angsuran' => 'required',
        'ket' => 'required',
      ]);

      $sa = new Angsuran();
      $sa->id_anggota = $request->id_anggota;
      $sa->id_katagori = $request->id_katagori;
      $sa->besar_angsuran = $request->besar_angsuran;
      $sa->tgl_pembayaran = $request->tgl_pembayaran;
      $sa->angsuran_ke = $request->angsuran_ke;
      $sa->ket = $request->ket;
      $sa->save();
      return redirect('angsuran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ang = Angsuran::find($id);
        return view('angsuran.show')->with('sa',$ang);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $ang = Angsuran::find($id);
      $got = Anggota::all();
      $kat = Katagori::all();
      return view('angsuran.edit')->with('sa',$ang)->with('ta',$got)->with('gori',$kat);
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
      $this->validate($request, [
        'id_anggota' => 'required',
        'id_katagori' => 'required',
        'tgl_pembayaran' => 'required',
        'angsuran_ke' => 'required',
        'ket' => 'required',
      ]);

      $sa = Angsuran::find($id);
      $sa->id_anggota = $request->id_anggota;
      $sa->id_katagori = $request->id_katagori;
      $sa->tgl_pembayaran = $request->tgl_pembayaran;
      $sa->besar_angsuran = $request->besar_angsuran;
      $sa->angsuran_ke = $request->angsuran_ke;
      $sa->ket = $request->ket;
      $sa->save();
      return redirect('angsuran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Angsuran::find($id);
        $sa->delete();
        return redirect('angsuran');
    }
}
