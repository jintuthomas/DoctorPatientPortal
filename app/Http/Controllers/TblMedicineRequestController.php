<?php

namespace App\Http\Controllers;

use App\Tbl_medicineRequest;
use Illuminate\Http\Request;
use App\Tbl_require;
use Validator;
use DateTime;
use DB;

class TblMedicineRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	  public function add(Request $request)
    {
		//$mydate=getdate(date("U"));
		//dd('hoi');
		return $request;
	}
    public function index()
    {
        
    }
	 public function SearchProduct(Request $request)
    {
		return view("Patient.SearchProduct");       
    }
     public function RequestStatus(Request $request)
    {
		return view("Patient.RequestStatus");       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		//return $request;
		$p_id=$request->input('p_id');
		$date=$request->input('date');
		$m_name = implode(",", $request['m_name']);
        $m_names = explode(",", $m_name);
		$req=new Tbl_require(['p_id'=>$p_id,'date'=>$date,'status'=>1]);
		$req->save();
		$r_id=Tbl_require::max('r_id');
		
		//return $dates;
        for ($i = 0; $i < count($m_names); $i++)
        {
			$users=new Tbl_medicineRequest([
				'r_id' => $r_id,
				'mid' => $m_names[$i],
				'status'=>'1'
			]);
			$users->save();
            $i = $i++;
		}
		//$id=Tbl_medicineRequest::max('mr_id');
			 if($request->hasfile('file1'))
            {
                foreach($request->file('file1') as $image)
                {
					$name=$image->getClientOriginalName();
                    $image->move('storage/upload', $name);  
					DB::insert('insert into tbl_prescriptions (r_id,prescription,status) values(?,?,?)',[$r_id,$name,1]);
                    
			    }	
                
            }
			return redirect('SearchProduct');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        //
    }
	 public function store(Request $request)
    {
		//$mydate=getdate(date("U"));
		
		return $request;
           
	    


		//$now = new DateTime();
		//dd($now);
		 $p_id=$request->input('p_id');
		$date=$request->input('date');
            $rules = [];
            foreach($request->input('name') as $key => $value) {
              $rules["name.{$key}"] = 'required';
            }
            $validator = Validator::make($request->all(), $rules);   
            if ($validator->passes()) {    
                foreach($request->input('name') as $key => $value) {
                    Tbl_medicineRequest::create(['p_id'=>$p_id,'medicine'=>$value,'date'=>$date,'status'=>'1']);
                }                
			}
			 $id=Tbl_medicineRequest::max('mr_id');
			 if($request->hasfile('file1'))
            {
                foreach($request->file('file1') as $image)
                {
					$name=$image->getClientOriginalName();
                    $image->move('storage/upload', $name);  
					DB::insert('insert into tbl_prescriptions (mr_id,p_id,date,prescription,status) values(?,?,?,?,?)',[$id,$p_id,$date,$name,1]);
                    
			    }	
                
            }
			return redirect('productRequest');
					 
		
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Tbl_medicineRequest  $tbl_medicineRequest
     * @return \Illuminate\Http\Response
     */
    public function ok($mr_id)
    {
        DB::delete('update tbl_medicine_requests set status=2 where mr_id = ?',[$mr_id]);
		return redirect("viewMedicineRequest");      
    }
	public function remove($mr_id)
    {
        DB::delete('update tbl_medicine_requests set status=0 where mr_id = ?',[$mr_id]);
		return redirect("viewMedicineRequest");      
    }
    public function move($mr_id)
    {
        DB::delete('delete from  tbl_medicine_requests  where mr_id = ?',[$mr_id]);
		return redirect("RequestStatus");      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbl_medicineRequest  $tbl_medicineRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbl_medicineRequest  $tbl_medicineRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tbl_medicineRequest $tbl_medicineRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbl_medicineRequest  $tbl_medicineRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tbl_medicineRequest $tbl_medicineRequest)
    {
        //
    }
}
