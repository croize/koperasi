<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjaman;
use App\Anggota;
use App\Angsuran;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $as = Pinjaman::all();
        return view('pinjaman.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $as = Anggota::all();
      $ang = Angsuran::all();
      return view('pinjaman.create')->with('sa',$as)->with('sur',$ang);
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
        'nama_pinjaman' => 'required',
        'id_anggota' => 'required',
        'besar_pinjaman' => 'required',
        'tgl_pengajuan_peminjaman' => 'required',
        'tgl_acc_peminjaman' => 'required',
        'tgl_pinjaman' => 'required',
        'tgl_pelunasan' => 'required',
        'id_angsuran' => 'required',
        'ket' => 'required',
      ]);

      $sa = new Pinjaman();
      $sa->nama_pinjaman = $request->nama_pinjaman;
      $sa->id_anggota = $request->id_anggota;
      $sa->besar_pinjaman = $request->besar_pinjaman;
      $sa->tgl_pengajuan_peminjaman = $request->tgl_pengajuan_peminjaman;
      $sa->tgl_acc_peminjaman = $request->tgl_acc_peminjaman;
      $sa->tgl_pinjaman = $request->tgl_pinjaman;
      $sa->tgl_pelunasan = $request->tgl_pelunasan;
      $sa->id_angsuran = $request->id_angsuran;
      $sa->ket = $request->ket;
      $sa->save();

      return redirect('pinjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Pinjaman::find($id);
      return view('pinjaman.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Pinjaman::find($id);
      $ang = Anggota::all();
      $ans = Angsuran::all();
      return view('pinjaman.edit')->with('sa',$as)->with('gota',$ang)->with('sur',$ans);
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
        'nama_pinjaman' => 'required',
        'id_anggota' => 'required',
        'besar_pinjaman' => 'required',
        'tgl_pengajuan_peminjaman' => 'required',
        'tgl_acc_peminjaman' => 'required',
        'tgl_pinjaman' => 'required',
        'tgl_pelunasan' => 'required',
        'id_angsuran' => 'required',
        'ket' => 'required',
      ]);

      $sa = Pinjaman::find($id);
      $sa->nama_pinjaman = $request->nama_pinjaman;
      $sa->id_anggota = $request->id_anggota;
      $sa->besar_pinjaman = $request->besar_pinjaman;
      $sa->tgl_pengajuan_peminjaman = $request->tgl_pengajuan_peminjaman;
      $sa->tgl_acc_peminjaman = $request->tgl_acc_peminjaman;
      $sa->tgl_pinjaman = $request->tgl_pinjaman;
      $sa->tgl_pelunasan = $request->tgl_pelunasan;
      $sa->id_angsuran = $request->id_angsuran;
      $sa->ket = $request->ket;
      $sa->save();

      return redirect('pinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Pinjaman::find($id);
        $sa->delete();
        return redirect('pinjaman');
    }
}
