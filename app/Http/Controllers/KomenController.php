<?php

namespace App\Http\Controllers;

use App\komen;
use App\forum;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class KomenController extends Controller
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
        //
        $komen = new komen;
        $komen->komforid=$request['komforid'];
        
        $komen->komis=$request['komis'];
        $komen->komauth=Auth::user()->id;
        $komen->save();
        return redirect('/forum/detail/'.$request['komforid']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function show($idfor,$idkom)
    {
        //
     
        $forum = forum::join('users','users.id','=','forums.forauth')->select('*', 'forums.created_at as tglpost')->select('*','forums.created_at as tglpost')->where('forums.forid','=',$idfor)->get();
        $komen = komen::join('users','users.id','=','komens.komauth')->select('*', 'komens.created_at as komtglpost')->where('komens.komid','=',$idkom)->get();

        return view('forum.editkomen',compact('forum','komen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function edit(komen $komen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $komen)
    {
        //
        $komen = komen::find($komen);
        $komen->komforid=$request['komforid'];
        $komen->komis=$request['komis'];
        $komen->komauth=Auth::user()->id;
        $komen->save();
        return redirect('/forum/detail/'.$request['komforid']);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function destroy( $komen)
    {
        //
        $komen = komen::find($komen);
        $id= $komen->komforid;
        $komen->delete();
        return redirect('/forum/detail/'.$id);
    }
}
