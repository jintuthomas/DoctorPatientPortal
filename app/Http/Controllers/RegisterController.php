<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;
use DB;
//use Crypt;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $view_patient=Register::all();
	  return view('Admin.ViewPatient',compact('view_patient'));
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
		 $uname=$request->input('email');
		 $check=DB::table('registers')->where(['email'=>$uname])->get();
		 if(count($check)==0)
		
		{
                         $users=new Register([
						 'p_name'=>$request->get('p_name'),
	                     'email'=>$request->get('email'),
						// 'password'=>$request->get('password'),	
						// 'password'=>Crypt::encrypt($request->get('password')),
						 'gender'=>$request->get('gender'),						 
						 'dob'=>$request->get('dob'),
						 'phone'=>$request->get('phone'),
		                 'h_name'=>$request->get('h_name'),						 
						 'street'=>$request->get('street'),
						 'district'=>$request->get('district'),
                    	 'city'=>$request->get('city'),
						  'pin'=>$request->get('pin'),
						  'role'=>'1',
						  'status'=>'1'
		                   ]);
		$users->save();
		$p_name=$request->input('p_name');
		$pwd=$request->input('password');
		
		
		//if($passsword==$cpasssword)
		//{
			$result=DB::insert("insert into logins(name,email,password,role,status,remember_token)values(?,?,?,?,?,?)",[$p_name,$uname,$pwd,1,1,'null']);
			
			return redirect("Login");
			//echo "sucess";
		//}
		}
		else
		{
			//echo "already exist";
			return redirect()->back() ->with('alert', 'E-mail already exist!');
		}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }
	public function reach(Request $request)
	{
		return view('Admin.PatientSearch');
	}
	public function search(Request $request)
	{
	if($request->ajax())
	{
	$output="";
	$products=DB::table('registers')->where('p_name','LIKE','%'.$request->search."%")->get();
	if($products)
	{
	foreach ($products as $key => $product) {
	$output.='<tr>'.
	'<td>'.$product->p_name.'</td>'.
	'<td>'.$product->email.'</td>'.
	'<td>'.$product->gender.'</td>'.
	'<td>'.$product->dob.'</td>'.
	'</tr>';
	}
		return Response($output);
	}
	}
	}	


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
