<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katagori;

class KatagoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $as = Katagori::all();
        return view('katagori.index')->with('sa',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('katagori.create');
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
          'nama_pinjaman' => 'required',
        ]);

        $sapi = new Katagori();
        $sapi->nama_pinjaman = $request->nama_pinjaman;
        $sapi->save();

        return redirect('katagori');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sapi = Katagori::find($id);
        return view('katagori.show')->with('sa',$sapi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sapi = Katagori::find($id);
        return view('katagori.edit')->with('sa',$sapi);
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
        'nama_pinjaman' => 'required',
      ]);

      $sapi = Katagori::find($id);
      $sapi->nama_pinjaman = $request->nama_pinjaman;
      $sapi->save();

      return redirect('katagori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $as = Katagori::find($id);
        $as->delete();

        return redirect('katagori');
    }
}
