<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
         $this->middleware('roles:0' || 'roles:1' || 'roles:2');
     }

    public function index()
    {
      $as = Anggota::all();
      return view('anggota.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::user()->roles == 2) {
        return redirect('anggota');
      }else{
        return view('anggota.create');
      }
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
        'nama' => 'required',
        'alamat' => 'required',
        'no_tlp' => 'required',
        'tmp_lhr' => 'required',
        'tgl_lahir' => 'required',
        'ket' => 'required',
        'status' => 'required',
        'j_kel' => 'required',
      ]);

      $sa = new Anggota();
      $sa->nama = $request->nama;
      $sa->alamat = $request->alamat;
      $sa->no_tlp = $request->no_tlp;
      $sa->tmp_lhr = $request->tmp_lhr;
      $sa->tgl_lahir = $request->tgl_lahir;
      $sa->ket = $request->ket;
      $sa->j_kel = $request->j_kel;
      $sa->status = $request->status;
      $sa->save();

      return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Anggota::find($id);
      return view('anggota.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if (Auth::user()->roles == 2) {
        return redirect('anggota');
      }else{
        $as = Anggota::find($id);
        return view('anggota.edit')->with('sa',$as);
      }
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
        'nama' => 'required',
        'alamat' => 'required',
        'no_tlp' => 'required',
        'tmp_lhr' => 'required',
        'tgl_lahir' => 'required',
        'ket' => 'required',
        'status' => 'required',
        'j_kel' => 'required',
      ]);

      $sa = Anggota::find($id);
      $sa->nama = $request->nama;
      $sa->alamat = $request->alamat;
      $sa->no_tlp = $request->no_tlp;
      $sa->tmp_lhr = $request->tmp_lhr;
      $sa->tgl_lahir = $request->tgl_lahir;
      $sa->ket = $request->ket;
      $sa->j_kel = $request->j_kel;
      $sa->status = $request->status;
      $sa->save();

      return redirect('anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      if (Auth::user()->roles == 2) {
        return redirect('anggota');
      }else {
        $sa = Anggota::find($id);
        $sa->delete();
        return redirect('anggota');
      }
    }
}
