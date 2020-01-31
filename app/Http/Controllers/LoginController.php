<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Http\Requests;
use Auth;
use App\Setting;
use Session;
class LoginController extends Controller
{
    public function get_login()
    {
			$title = "Backend Login";
			$web_name = Setting::where('language','=',1)->get();
    	return view('admin.user.login',compact('title','web_name'));
    }
    public function post_login(Request $request)
    {
    	$rules = $this->validate($request ,[
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	if(Auth::attempt(['email'=>$request->email ,'password'=>$request->password , 'status' => 1 ]))
    	{
    		return redirect('admin')->with('success','Welcome');
    	}
    	else
    	{
            
    		return redirect::back()->withErrors('The user and password information is invalid');

    	}

    }
    public function dologout()
    {
       Auth::logout();
    	return redirect('login');
    }
}
