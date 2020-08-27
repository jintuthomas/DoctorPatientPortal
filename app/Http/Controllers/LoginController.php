<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use DB;
use Auth;
//use Crypt;
class LoginController extends Controller
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
	public function Login(Request $request)
    {
        //$u_name=$request->input('name');
		$name=$request->input('username');
		$pwd=$request->input('password');
		$user=DB::table('tbl__doctors')->where('email',$name)->first();
		$check1=DB::table('Logins')->where(['email'=>$name,'password'=>$pwd,'role'=>0])->get();
		$check2=DB::table('Logins')->where(['email'=>$name,'password'=>$pwd,'role'=>1])->get();
		$check3=DB::table('Logins')->where(['email'=>$name,'password'=>$pwd,'role'=>2])->get();
		$check4=DB::table('Logins')->where(['email'=>$name,'password'=>$pwd,'role'=>3])->get();
         //$pass=Crypt::decrypt($object->password);
		 //if($pass==$password)
		 //{
		if(count($check1)>0)
		{
					session_start();

			$request->session()->put('email',$name);
		 return view("AdminHome");
        }
		elseif(count($check2)>0)
		{
			$request->session()->put('email',$name);
		  return view("PatientHome");
        }
		elseif(count($check3)>0)
		{
			if($user->status==0)
			{
			$request->session()->put('email',$name);
		    return view("Doctor.Detail");
				
			}
            else
			{			
			$request->session()->put('email',$name);
		     return view("DoctorHome");
			}
        }
		elseif(count($check4)>0)
		{
			$request->session()->put('email',$name);
		  return view("PharmacyHome");
        }
		else
		{
			echo "not sucess";
		}
        
		
		 //}
		
	}
	public function logout(Request $request)
    {
		session_start();
		session_destroy();
		session()->flush();
		return redirect('/Login');
	}
     //   Auth::logout();
	//	return redirect()->route("Login");
   // }

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
