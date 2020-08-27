<?php

namespace App\Http\Controllers;

use App\Tbl_appoinment;
use App\tbl_Doctor;
use App\Register;
use DB;
use Illuminate\Http\Request;

class TblAppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function viewAppoin(Request $request)
    {
		return view("Doctor.viewAppointment");        
    }
	 public function avail(Request $request)
    {
		return view("Patient.notAvail");        
    }
	public function Prescription($a_id)
    {
		 $a_id;
        $view=DB::table('tbl_appoinments')->where('a_id',"=",$a_id)->get();
      return view('Doctor.addTreatment',compact('view'));        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
	   $p_id=$request->input('p_id');
	   $d_id=$request->input('d_id');
	   $adate=$request->input('date');
	   $atime=$request->input('time');
	   $fee=DB::table('tbl__doctors')->select('fee')->where('id',$d_id)->pluck('fee');
	   $sid=DB::table('tbl__doctors')->select('sid')->where('id',$d_id)->pluck('sid');
	   $photo=DB::table('tbl__doctors')->select('photo')->where('id',$d_id)->pluck('photo');
	   $cname=DB::table('specilizations')->select('specilization')->where('sid',$sid)->pluck('specilization');
	   $leaves=DB::table('tbl_leaves')->where(['email'=>$d_id])->where(['date'=>$adate])->where(['status'=>1])->get();
	   $c1=count($leaves);
	   $appoin=DB::table('tbl_appoinments')->where(['date'=>$adate])->where(['time'=>$atime])->where(['d_id'=>$d_id])->where(['status'=>1])->get();
	   $c2=count($appoin);
	   if(($c1==0)&&($c2==0))
	   {
		    return view('Patient.AppoitnmentConfirm', compact('d_id','p_id','adate','atime','fee','cname','photo'));
	   }
	   else
	   {
		   //return redirect()->back() ->with('alert', 'slot not avail!');
			return view("Patient.notAvail");
		    
	   }      
    }
	public function Confirm(Request $request)
    {
        //return $request;
		$p_id=$request->input('p_id');
		//dd($p_id);
	   $d_id=$request->input('d_id');
	   $adate=$request->input('adate');
	   $atime=$request->input('atime');
	   $fee=$request->input('fee');
	   return view('Patient.payment',compact('d_id','p_id','adate','atime','fee'));
	   //$result=DB::insert("insert into tbl_appoinments(d_id,p_id,date,time,status)values(?,?,?,?,?)",[$d_id,$p_id,$adate,$atime,1]);
		
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function appoinmnet(Request $request)
    {
       // return $request;
	   $p_id=$request->input('p_id');
	   $d_id=$request->input('d_id');
	   $adate=$request->input('date');
	   $atime=$request->input('time');
	   $leaves=DB::table('tbl_leaves')->where(['email'=>$d_id])->where(['date'=>$adate])->where(['status'=>1])->get();
	   $c1=count($leaves);
	   $appoin=DB::table('tbl_appoinments')->where(['date'=>$adate])->where(['time'=>$atime])->where(['status'=>1])->get();
	   $c2=count($appoin);
	   if(($c1==0)&&($c2==0))
	   {
		   //return "hai";
		  
		$result=DB::insert("insert into tbl_appoinments(d_id,p_id,date,time,status)values(?,?,?,?,?)",[$d_id,$p_id,$adate,$atime,1]);
		return redirect()->back() ->with('alert', 'Appoinment Registered successfully!');


		   
	   }
	   else
	   {
		   //return redirect()->back() ->with('alert', 'slot not avail!');
			return view("Patient.notAvail");
		    
	   }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbl_appoinment  $tbl_appoinment
     * @return \Illuminate\Http\Response
     */
	 public function Payment(Request $request)
    {
       
	   $p_id=$request->input('p_id');
	   $d_id=$request->input('d_id');
	   $adate=$request->input('adate');
	   $atime=$request->input('atime');
	   $c_name=$request->input('c_name');
	   $c_no=$request->input('cardNumber');
	   $exp=$request->input('cardExpiry');
	   $cvv=$request->input('cardCVC');
	   $fee=$request->input('fee');
	   //dd($adate);
	   $card=DB::table('tbl_cards')->where(['c_name'=>$c_name])->where(['c_number'=>$c_no])->where(['cvv'=>$cvv])->where(['exp'=>$exp])->get();
	   $c1=count($card);
	   
	   if($c1==1)
	   {
		   foreach($card as $a)
		   {
				   //$c_id=DB::table('tbl_cards')->select('c_id')->where('c_name',$c_name)->pluck('c_id');
				   $amt=DB::table('tbl_banks')->where('c_id',$a->c_id)->first();	
				   $qwe=DB::table('tbl_banks')->where('b_id',3)->first();
				   $ab=$qwe->amount+$fee;
				   $s=$amt->amount-$fee;
				   
				   
				   $result=DB::insert("insert into tbl_appoinments(d_id,p_id,date,time,status)values(?,?,?,?,?)",[$d_id,$p_id,$adate,$atime,1]);
				    $we= DB::table('tbl_banks') 
					->where('b_id',3)
					->update([ 'amount' =>$ab]);
				   
				  
				  $ans= DB::table('tbl_banks') 
					->where('c_id',$a->c_id)
					->update([ 'amount' =>$s]);
				   }
				   return view('Patient.transactionComplete',compact('fee'));
	   }
		else	
		{
			return redirect()->back() ->with('alert', 'Invalid Card Details');
			//return alert('');
		}			
		   
		   

	   
	   
	   
    }

    public function show(Tbl_appoinment $tbl_appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl_appoinment  $tbl_appoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_appoinment $tbl_appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl_appoinment  $tbl_appoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_appoinment $tbl_appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl_appoinment  $tbl_appoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_appoinment $tbl_appoinment)
    {
        //
    }
}
