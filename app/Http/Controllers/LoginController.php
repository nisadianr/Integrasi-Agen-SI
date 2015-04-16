<?php namespace App\Http\Controllers;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Cookie\CookieJar;

use App\Agent;
class LoginController extends Controller
{
    //
    public function login(){
    	$username=Request::get('username');
    	$pass=Request::get('password');

    	if($username == 'admin'){
    		//set cookie jaid admin

    	}
    	$real_pass=Agent::where('username','=',$username)->firstOrFail();
        if($real_password != null){
            $real=var_dump($real_pass->password);
        }
    // 	if($real_password != null){
    // 		if($real_password == $pass){
    // // 			$response = new \Illuminate\Http\Response(view('welcome'));
				// // $response->withCookie(cookie('referrer', $request->referrer, 45000));
				// return view('home');
    // 		}
    // 	}
    // 	else{
    // 		return redirect()->back();
    // 	}
    	return $real_password;
    }

}
