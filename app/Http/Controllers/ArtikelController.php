<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function read_artikel()
    {
        $artikel = Artikel::all();
        return view('ruanginformasiKonselor', ['artikel' => $artikel]);
    }
    
    public function read_artikeluser()
    {
        $artikel = Artikel::all();
        return view('ruanginformasi', ['artikel' => $artikel]);
    }
    public function open_artikel(Request $request)
    {        
        $open_artikel = Artikel::where ('id',$request -> id)->get();;
        if($open_artikel){
            return view('artikel', ['open_artikel' => $open_artikel]);
        }
        
    }
    public function open_artikelPsikolog(Request $request)
    {        
        $open_artikel = Artikel::where ('id',$request -> id)->get();;
        if($open_artikel){
            return view('artikelPsikolog', ['open_artikel' => $open_artikel]);
        }
        
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
        $move_gambar = $request->file('image');
        $move_gambar->move(public_path('asset'), $move_gambar->getClientOriginalName());
        $store = new Artikel;
        $store->judul = $request->judul;
        $store->image = $request->image;
        $store->konten = $request->konten;
        $store->image = $request->image->getClientOriginalName();
        $store->save();
        return view('ruanginformasiKonselor',['store' => $store])->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
