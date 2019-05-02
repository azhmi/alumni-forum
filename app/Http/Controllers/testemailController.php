<?php

namespace App\Http\Controllers;
use App\Mail\LokerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\user;
class testemailController extends Controller
{
    //
    public function index(){
			$user = user::where("level",'=','alumni')->get();

			foreach($user as $key => $users){
				
			
			Mail::send('emailku', ['user' => $users], function($mail) use($users) {
        $mail->from('laravelid@gmail.com', 'Laravel Indonesia');
				$mail->to($users->email, $users->name);
				
		});
		
		echo " email ".$key ."terkirim";
		sleep(3);
		}
	}
}
