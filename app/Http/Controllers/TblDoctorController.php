<?php

namespace App\Http\Controllers;

use App\tbl_Doctor;
use Illuminate\Http\Request;
use DB;
use Storage;
use App\Tbl_doctorHistory;
use Validator;
class TblDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $add_doctor=DB::table('tbl__doctors')->where(['status'=>1])->get();
		//$add_doctor=tbl_Doctor::select('select * from tbl__doctors where status = ?', [1]);
      //$add_doctor=tbl_Doctor::all();
	  return view('Admin.ViewDoctor',compact('add_doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function doctor(Request $request,$id)
    {
		$request->session()->put('id',$id);
		return view('Patient.Doctor');
        
    }
	 public function search(Request $request)
    {
		//return $request;
		$id=$request->input('id');
		$request->session()->put('id',$id);
		// $sid=$request->input('id');
		 //$results = DB::select('select * from tbl__doctors where sid = ?', [$sid]);
		 //dd($results);
		return view('Patient.search');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		// $photo=$request->file('photo');
		 
		//$filename= $request->photo->getClientOriginalName();
		//Storage::put('public\upload\',$filename,file_get_contents($request->file('photo')->getRealPath()));
      // $request->photo->storeAs('public/upload',$filename);
        $uname=$request->input('email');
		 $check=DB::table('tbl__doctors')->where(['email'=>$uname])->get();
		 
		 if(count($check)==0)		
		{
                         $users=new tbl_Doctor([
						 'd_name'=>$request->get('d_name'),
	                     'surname'=>$request->get('surname'),
						// 'dob'=>$request->get('dob'),	
						 'gender'=>$request->get('gender'),										 
						 'sid'=>$request->get('specilalization'),						 
						// 'h_name'=>$request->get('h_name'),
						// 'street'=>$request->get('street'),
		                // 'city'=>$request->get('city'),						 
						// 'state'=>$request->get('state'),
						// 'country'=>$request->get('country'),
                    	// 'zip'=>$request->get('zip'),
						 'email'=>$request->get('email'),
						  //'pwd'=>$request->get('pwd'),
		                 'phone'=>$request->get('phone'),						 
						 'quali'=>$request->get('quali'),
						// 'y_exp'=>$request->get('y_exp'),
                    	 //'emp_history'=>$request->get('emp_history'),
						  'fee'=>$request->get('fee'),
						 // 'photo'=>$filename,
						  'status'=>'0'
		                   ]);
		$users->save();
		$d_name=$request->input('d_name');
		$pwd=$request->input('pwd');
		
			$result=DB::insert("insert into logins(name,email,password,role,status,remember_token)values(?,?,?,?,?,?)",[$d_name,$uname,$pwd,2,1,'null']);
			//$add_doctor=TblDoctor::all();
	       // return view('ViewDoctor',compact('add_doctor'));
			return view('Admin.addDoctor1');
			
			
		}
		else
		{
			return view('Admin.addDoctor1');
			echo "Already exist";
		}
	}
		

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_Doctor  $tbl_Doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       return view("Patient.ListDoctor");
    }
	public function list(Request $request)
    {
       return view("Patient.ListDoctor");
    }
	public function medical(Request $request)
    {
       return view("Doctor.addMedicalHistory");
    }
	public function medicalhistory(Request $request)
    {
     //return $request;
	 
	 
            $d_id=$request->input('d_id');
            $rules = [];
            foreach($request->input('name') as $key => $value) {
              $rules["name.{$key}"] = 'required';
            }
            $validator = Validator::make($request->all(), $rules);   
            if ($validator->passes()) {    
                foreach($request->input('name') as $key => $value) {
                    Tbl_doctorHistory::create(['d_id'=>$d_id,'history'=>$value,'status'=>'1']);
                }
                
                return redirect()->back() ->with('alert', 'Added to cart successfully!');
			}
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_Doctor  $tbl_Doctor
     * @return \Illuminate\Http\Response
     */
	 public function profile(Request $request,$id)
    {
		//$unm = $request->session()->get('username');
		$request->session()->put('id',$id);
		//$items = DB::table('tbl__doctors')->where(['id'=>$id])->get();
        return view('Doctor.DoctorProfile');
    }
    public function edit(Request $request,$id)
    {
		$request->session()->put('id',$id);
		//$edt= $request->session()->get('username');
		$edit = DB::table('tbl__doctors')->where(['id',$id]);
        return view('Doctor.editProfile',compact($edit));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_Doctor  $tbl_Doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		//$photo=$request->file('photo');
		 
		$filename= $request->photo->getClientOriginalName();
		//Storage::put('public\upload\',$filename,file_get_contents($request->file('photo')->getRealPath()));
       $request->photo->storeAs('public/upload',$filename);
       
		$d_id=$request->input('d_id');
		$dob=$request->input('dob');
		$h_name=$request->input('h_name');
		$city=$request->input('city');
		$state=$request->input('state');
		$country=$request->input('country');
		$zip=$request->input('zip');
		$y_exp=$request->input('y_exp');
		DB::table('tbl__doctors')->where('id',$d_id)->update(['dob'=>$dob,
		'h_name'=>$h_name,'city'=>$city,'state'=>$state,'country'=>$country,
		'zip'=>$zip,'y_exp'=>$y_exp,
		'photo'=>$filename,
		 'status'=>'1']);
		return redirect('DoctorHome');
    }
	public function profile_update(Request $request)
    {
		//$filename= $request->photo->getClientOriginalName();
        //$request->photo->storeAs('public/upload',$filename);      
		$d_id=$request->input('d_id');
		$dob=$request->input('dob');
		$surname=$request->input('surname');
		$phone=$request->input('phone');
		$quali=$request->input('quali');
		$h_name=$request->input('h_name');
		$city=$request->input('city');
		$state=$request->input('state');
		$country=$request->input('country');
		$zip=$request->input('zip');
		$y_exp=$request->input('y_exp');
		DB::table('tbl__doctors')->where('id',$d_id)->update(['surname'=>$surname,'dob'=>$dob,
		'h_name'=>$h_name,'city'=>$city,'state'=>$state,'country'=>$country,
		'zip'=>$zip,'phone'=>$phone,'quali'=>$quali,'y_exp'=>$y_exp
		//'photo'=>$filename,
		 ]);
		return redirect('editProfile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_Doctor  $tbl_Doctor
     * @return \Illuminate\Http\Response
     */
   
	public function destroy($id)
    {
		
		//DB::delete('delete from tbl__doctors where id = ?',[$id]);
		//return view('Admin.ViewDoctor');
		DB::delete('update tbl__doctors set status=0 where id = ?',[$id]);
		return redirect("ViewDoctor");
       
       
        
    }
}
