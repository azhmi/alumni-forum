<?php

namespace App\Http\Controllers;

use App\loker;
use App\user;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
class LokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batas =12;
        $loker = loker::join('users','users.id','=','lokers.lokauth')->select('*', 'lokers.created_at as tglpost')->paginate($batas);
        $no= $batas*($loker->currentPage()-1);
        return view('loker.index',compact('loker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('loker.tambah');
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
        ini_set('max_execution_time', 180);
        $loker = new loker;
        $loker->lokjud=$request['lokjud'];
        $loker->lokis=$request['lokis'];
        $gambar = $request->file('lokgam');
        
        if($gambar !=''){
        $namaFile = $gambar->getClientOriginalName();
        $request->file('lokgam')->move('gambar/loker', $namaFile);
        $loker->lokgam = $namaFile;
        }
        else{
            $loker->lokgam = null;
        }
        $loker->lokauth=Auth::user()->id;
        $loker->save();
        $url ="http://$_SERVER[HTTP_HOST]"."/gambar/loker/".$namaFile;
        $data = [ 
            "judul"=>$request['lokjud'],
            "isi" =>$request['lokis'],
            "url"=>$url,
        ];
        $user = user::where("level",'=','alumni')->get();

		foreach($user as $key => $users){
				
			
            Mail::send('emailku', ['user' => $users,
                                    'data'=> $data
        ], function($mail) use($users) {
        $mail->from('alumni@gmail.com', 'alumni Laravel Indonesia');
				$mail->to($users->email, $users->name);
				
		});
		
		echo " email ".$key ."terkirim";
		sleep(2);
		}
        return Redirect('/lowongan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show( $loker)
    {
        //
        $loker = loker::find($loker);

        return view ('loker.detail',compact('loker'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit( $loker)
    {
        //
        $loker = loker::find($loker);

        return view ('loker.edit',compact('loker'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$loker)
    {
        //
        $loker = loker::find($loker);
        $loker->lokjud=$request['lokjud'];
        $loker->lokis=$request['lokis'];

        if($request['lokgam']!=''){
            $image_path = $berita->bergam;
            File::delete('gambar/loker/'.$image_path);
            $gambar = $request->file('lokgam');
            $namaFile = $gambar->getClientOriginalName();
            $request->file('lokgam')->move('gambar/loker', $namaFile);
            $loker->lokgam = $namaFile;
        }
        $loker->lokauth=Auth::user()->id;
        $loker->save();
        return Redirect('/lowongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy($loker)
    {
        //
        
        $loker = loker::find($loker);
        $image_path = $loker->lokgam;
            File::delete('gambar/loker/'.$image_path);
        $loker->delete();
        return Redirect('/lowongan');
    }
}
