<?php

namespace App\Http\Controllers;

use App\Tbl_treatment;
use App\Tbl_trtDetails;
use DB;
use Illuminate\Http\Request;

class TblTreatmentController extends Controller
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
    public function add(Request $request)
    {
		//return $request;
				$p_id = $request['p_id'];

		$users=new Tbl_treatment([	 
					'p_id'=>$request->get('p_id'),
					'd_id'=>$request->get('d_id'),
					'date'=>$request->get('date'),
					'diseases'=>$request->get('diseases'),					
					'status'=>'1']);
					 $users->save();
					 $id=Tbl_treatment::max('trt_id');

		//$p_id = $request['p_id'];
		//$date = $request['date'];
		//$d_id = $request['d_id'];
		$request->session()->put('p_id',$p_id);

		
        $name = implode(",", $request['name']);	
        $names = explode(",", $name);
		$time = implode(",", $request['times']);
        $times = explode(",", $time);
		$section = implode(",", $request['section']);
        $sections = explode(",", $section);
		//return $dates;
        for ($i = 0; $i < count($names); $i++)
        {
			$user=new Tbl_trtDetails([
				//'p_id' => $p_id,
				//'d_id' => $d_id,
				//'date' => $date,	
                'trt_id'=>	$id,			
				'treatment' => $names[$i],
				'section' => $sections[$i],
				'time' => $times[$i],
				'status'=>'1'
			]);
			$user->save();
            $i = $i++;
		}
       		return view('Doctor.PrescriptionPrint',compact('p_id'));
     
		
		 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbl_treatment  $tbl_treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Tbl_treatment $tbl_treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl_treatment  $tbl_treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Tbl_treatment $tbl_treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl_treatment  $tbl_treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_treatment $tbl_treatment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl_treatment  $tbl_treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_treatment $tbl_treatment)
    {
        //
    }
}
