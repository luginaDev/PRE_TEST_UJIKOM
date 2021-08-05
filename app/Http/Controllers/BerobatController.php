<?php

namespace App\Http\Controllers;

use App\Berobat;
use Illuminate\Http\Request;
use Redirect;
class BerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  Berobat::all();
        return view('berobat.index', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporanBerobat()
    {
        $data =  Berobat::with('dokter', 'pasien')->get();
        //return dd($data);
        return view('berobat.laporan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $berobat = $request->all();
        $berobat = new Berobat();
        $request->save();
        return Redirect::back()->withErrors(['msg', 'Transaction was successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    public function show(Berobat $berobat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    public function edit(Berobat $berobat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berobat $berobat)
    {
        // update belum
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berobat  $berobat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berobat $berobat)
    {
        $berobat =  Berobat::findOrFail($berobat);
        $berobat->delete();
        return Redirect::back()->withErrors(['msg', 'Transaction was successfully deleted']);
    }
}
