<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profil;
class berandaController extends Controller
{
    //
    public function index(){

        $profil = profil::all();

        return view('welcome', compact('profil'));
    }
    public function edit(){

        $profil = profil::all();

        return view('profil.edit', compact('profil'));
    }
    public function update(Request $request){

        $profil = profil::all();
        $profil1 =$profil[0];
        $profil1->pronam=$request['pronam'];
        $profil1->pronv=$request['pronv'];
        $profil1->pronm=$request['pronm'];
        $profil1->prolok=$request['prolok'];
        $profil1->save();
        return Redirect('/');
    }
}
