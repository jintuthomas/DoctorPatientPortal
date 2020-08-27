<?php

namespace App\Http\Controllers;

use App\tbl_leave;
use Illuminate\Http\Request;
use DB;
class TblLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
	public function approve($l_id)
    {		
		DB::delete('update tbl_leaves set status=1 where l_id = ?',[$l_id]);
		return redirect("LeaveView");       
    }
	public function reject($l_id)
    {		
		DB::delete('update tbl_leaves set status=2 where l_id = ?',[$l_id]);
		return redirect("LeaveView");       
    }
	public function insert(Request $request)
	  {
	  $d_id=$request->input('email');
      $date = $request->input('date');
	  //$status=0;
      
	  return view("Doctor.ApplyLeave");
	  }
    public function cancelLeave($l_id)
    {		
	    DB::delete('delete from tbl_leaves where l_id = ?',[$l_id]);
		//DB::delete('update tbl_leaves set status=2 where l_id = ?',[$l_id]);
		return redirect("LeaveCancel");       
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
		//return $request;
		$id = $request['id'];
        $date = implode(",", $request['date']);
        $dates = explode(",", $date);
		$session = implode(",", $request['session']);
        $sessions = explode(",", $session);
		$reason = implode(",", $request['reason']);
        $reasons = explode(",", $reason);
		//return $dates;
        for ($i = 0; $i < count($dates); $i++)
        {
			$users=new tbl_leave([
				'email' => $id,
				'date' => $dates[$i],
				'session' => $sessions[$i],
				'reason' => $reasons[$i],
				'status'=>'0'
			]);
			$users->save();
            $i = $i++;
		}
		
		//$email=$request->input('email');
		//$date=$request->input('date');
		//$session=$request->input('session');
		//$reason=$request->input('reason');
		//foreach($request->input('email') as $key)
		//{
			//$data=array('email'=>$email,
			  //        'date'=>$request->date[$key],	
				//	  'session'=>$request->session[$key],
					//  'reason'=>$request->reason[$key],
					  // 'status'=>'0'
					  //);
		 //  DB::insert($data);
		//}
		return view("Doctor.ApplyLeave");
		
    }
	

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_leave  $tbl_leave
     * @return \Illuminate\Http\Response
     */
    public function cancel(Request $request)
    {
      return view("Doctor.LeaveCancel");  
    }
    public function status(Request $request)
    {
      return view("Doctor.LeaveStatus");  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_leave  $tbl_leave
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_leave $tbl_leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_leave  $tbl_leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_leave $tbl_leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_leave  $tbl_leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_leave $tbl_leave)
    {
        //
    }
}
