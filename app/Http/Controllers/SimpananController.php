<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simpanan;
use App\Anggota;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      $as = Simpanan::all();
      return view('simpanan.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $as = Anggota::all();
        return view('simpanan.create')->with('sa',$as);
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
        'nm_simpanan' => 'required',
        'id_anggota' => 'required',
        'tgl_simpanan' => 'required',
        'besar_simpanan' => 'required',
        'ket' => 'required',
      ]);

      $sa = new Simpanan();
      $sa->nm_simpanan = $request->nm_simpanan;
      $sa->id_anggota = $request->id_anggota;
      $sa->tgl_simpanan = $request->tgl_simpanan;
      $sa->besar_simpanan = $request->besar_simpanan;
      $sa->ket = $request->ket;
      $sa->save();

      return redirect('simpanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Simpanan::find($id);
      return view('simpanan.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Simpanan::find($id);
      $su = Anggota::all();
      return view('simpanan.edit')->with('sa',$as)->with('us',$su);
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
        'nm_simpanan' => 'required',
        'id_anggota' => 'required',
        'tgl_simpanan' => 'required',
        'besar_simpanan' => 'required',
        'ket' => 'required',
      ]);

      $sa = Simpanan::find($id);
      $sa->nm_simpanan = $request->nm_simpanan;
      $sa->id_anggota = $request->id_anggota;
      $sa->tgl_simpanan = $request->tgl_simpanan;
      $sa->besar_simpanan = $request->besar_simpanan;
      $sa->ket = $request->ket;
      $sa->save();

      return redirect('simpanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Simpanan::find($id);
        $sa->delete();
        return redirect('simpanan');
    }
}
