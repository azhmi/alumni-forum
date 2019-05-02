<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\komen;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
class ForumController extends Controller
{
    //
    public function index(){

      
        $batas =12;
        $forum = forum::join('users','users.id','=','forums.forauth')->select('*', 'forums.created_at as tglpost')->paginate($batas);
        $no= $batas*($forum->currentPage()-1);
        return view('forum.index',compact('forum'));
    }

    public function show($id){
        $batas =12;
        $forum = forum::join('users','users.id','=','forums.forauth')->select('*', 'forums.created_at as tglpost')->select('*','forums.created_at as tglpost')->where('forums.forid','=',$id)->get();
        $komen = komen::join('users','users.id','=','komens.komauth')->select('*', 'komens.created_at as komtglpost')->where('komens.komforid','=',$id)->paginate($batas);

        return view('forum.detail',compact('forum','komen'));
    }
    public function create(){

        return view('forum.tambah');
    }
    public function store(Request $request){
        $forum = new forum;
        $forum->forjud=$request['forjud'];
        $forum->foris=$request['foris'];

        $gambar = $request->file('forgam');

        if($gambar !=''){
        $namaFile = $gambar->getClientOriginalName();
        $request->file('forgam')->move('gambar/forum', $namaFile);
        $forum->forgam = $namaFile;
        }
        else{
            $forum->forgam = null;
        }
        $forum->forauth=Auth::user()->id;

        $forum->save();
        
        return redirect('/forum');
        
    }
    public function edit($id){
        $forum = forum::find($id);

        return view('forum.edit',compact('forum'));
    }
    public function update(Request $request,$id){
        $forum = forum::find($id);
        $forum->forjud=$request['forjud'];
        $forum->foris=$request['foris'];
      

        if($request['forgam']!=''){
            $image_path = $forum->forgam;
            File::delete('gambar/forum/'.$image_path);
            $gambar = $request->file('forgam');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('forgam')->move('gambar/forum', $namaFile);
            $forum->forgam = $namaFile;
        }


        $forum->forauth=Auth::user()->id;

        $forum->save();
        
        return redirect('/forum');
        
    }
    public function destroy($id){
        $forum = forum::find($id);
        $forum->delete();
        
        return redirect('/forum');
    }
}
