<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
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
        $as = Petugas::all();
        $count = Petugas::count();
        return view('petugas.index')->with('sa',$as)->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('petugas.create');
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
          'nama' => 'required',
          'alamat' => 'required',
          'no_tlp' => 'required',
          'tmp_lhr' => 'required',
          'tgl_lhr' => 'required',
          'ket' => 'required',
        ]);

        $sa = new Petugas();
        $sa->nama = $request->nama;
        $sa->alamat = $request->alamat;
        $sa->no_tlp = $request->no_tlp;
        $sa->tmp_lhr = $request->tmp_lhr;
        $sa->tgl_lhr = $request->tgl_lhr;
        $sa->ket = $request->ket;
        $sa->save();

        return redirect('petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $as = Petugas::find($id);
      return view('petugas.show')->with('sa',$as);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $as = Petugas::find($id);
      return view('petugas.edit')->with('sa',$as);
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
        'tgl_lhr' => 'required',
        'ket' => 'required',
      ]);

      $sa = Petugas::find($id);
      $sa->nama = $request->nama;
      $sa->alamat = $request->alamat;
      $sa->no_tlp = $request->no_tlp;
      $sa->tmp_lhr = $request->tmp_lhr;
      $sa->tgl_lhr = $request->tgl_lhr;
      $sa->ket = $request->ket;
      $sa->save();

      return redirect('petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Petugas::find($id);
        $sa->delete();
        return redirect('petugas');
    }
}
