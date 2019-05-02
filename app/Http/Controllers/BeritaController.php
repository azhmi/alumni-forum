<?php

namespace App\Http\Controllers;

use App\berita;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batas =5;
        $berita = berita::join('users','users.id','=','beritas.berauth')->select('*', 'beritas.created_at as tglpost')->paginate($batas);
        $no= $batas*($berita->currentPage()-1);
        return view('berita.index',compact('berita'));
    }
    public function detail($id)
    {
        //
    
        $berita = berita::join('users','users.id','=','beritas.berauth')->where('beritas.berid','=',$id)->get();
     
        return view('berita.detail',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('berita.tambah');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $berita = new berita;
        $berita->berjud=$request['berjud'];
        $berita->beris=$request['beris'];


        $gambar = $request->file('bergam');
        
        if($gambar !=''){
        $namaFile = $gambar->getClientOriginalName();
        $request->file('bergam')->move('gambar/berita', $namaFile);
        $berita->bergam = $namaFile;
        }
        else{
            $berita->bergam = null;
        }
        $berita->berauth=Auth::user()->id;
        $berita->save();
        return Redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($berita)
    {
        //
        $berita = berita::find($berita);

        return view('berita.edit',compact('berita'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $berita)
    {
        //
        $berita = berita::find($berita);
        $berita->berjud=$request['berjud'];
        $berita->beris=$request['beris'];
    
        if($request['bergam']!=''){
            $image_path = $berita->bergam;
            File::delete('gambar/berita/'.$image_path);
            $gambar = $request->file('bergam');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('bergam')->move('gambar/berita', $namaFile);
            $berita->bergam = $namaFile;
        }

        $berita->berauth=Auth::user()->id;
        $berita->save();
        return Redirect('/berita');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($berita)
    {
        //
        $berita = berita::find($berita);
        $image_path = $berita->bergam;
        File::delete('gambar/berita/'.$image_path);
        $berita->delete();
        return Redirect('/berita');
    }
}
