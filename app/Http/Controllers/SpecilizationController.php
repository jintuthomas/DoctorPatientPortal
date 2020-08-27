<?php

namespace App\Http\Controllers;

use App\Specilization;
use Illuminate\Http\Request;
use DB;
class SpecilizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	  //return view('Admin.addDoctor1',compact('special'));
    }
	
	
	
      public function insert(Request $request)
	  {
      $specli = $request->input('specilization');
	  $status=1;
      DB::insert('insert into specilizations (specilization,status) values(?,?)',[$specli,$status]);
	  return view("Admin.addSpecializaion");
	  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("Admin.viewSpecialization");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=DB::table('logins')->where('role', 1)->count();
		return view('AdminHome',compact('c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function sremove($sid)
    {		
		DB::delete('update specilizations set status=0 where sid = ?',[$sid]);
		return redirect("viewSpecialization");       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function edit(Specilization $specilization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specilization $specilization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specilization $specilization)
    {
        //
    }
}
