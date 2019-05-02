<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AlumniController extends Controller
{
    //
    public function index(){
      
        $user = user::where("level",'=','alumni')->orderBy('tahun', 'DESC')->get();
        
        return view('alumni.index',compact('user'));
    }
    public function create(){
        
        return view('alumni.tambah');
    } 
    public function edit($id){
        $user = user::find($id);

        return view('alumni.edit', compact('user'));
    }
    public function update(Request $request,$id){
        $user = user::find($id);
        $user->nisn=$request['nisn'];
        $user->email=$request['email'];
        $user->name=$request['name'];
        $user->alamat=$request['alamat'];
        $user->temker=$request['temker'];
        $user->jurusan=$request['jurusan'];
        $user->tahun=$request['tahun'];
        $user->status=$request['status'];
        
        $user->save();
        return redirect('/alumni');
    }
    public function destroy($id){
        $user = user::find($id);
        $user->delete();
        return redirect('/alumni');
    }
}
