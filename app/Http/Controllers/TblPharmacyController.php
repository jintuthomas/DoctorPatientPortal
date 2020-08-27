<?php

namespace App\Http\Controllers;

use App\tbl_pharmacy;
use App\tbl_image;
use Illuminate\Http\Request;
use DB;
class TblPharmacyController extends Controller
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
    public function insert(Request $request)
	  {
		 $input=$request->all();
         $image=array();
         if($files=$request->file('image')){
         foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move('public/upload',$name);
            $image[]=$name;
        }
    }
                
	 $users=new tbl_pharmacy([	   
		  
      'b_id' =>$input['brand'],
	   'c_id' =>$input['category'],
		'm_name' =>$input['m_name'],
		'gram' =>$input['gram'],
		'quantity' =>$input['quantity'],
		'price' =>$input['price'], 
	   'image'=>  implode(",",$image),  
	  'status'=>'1']);
	  $users->save();
     // DB::insert('insert into tbl_pharmacies (b_id,c_id,m_name,gram,quantity,price,image,status) values(?,?,?,?,?,?,?,?)',[$b_id,$c_id,$m_name,$gram,$quantity,$price,$image,$status]);
	  return view("Pharmacy.addMedicine");
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
	public function send(Request $request)
	  {
      $req = $request->input('request');
	  $status=1;
      DB::insert('insert into tbl_requests (request	,status) values(?,?)',[$req,$status]);
	  return view("Admin.sendRequest");
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
        $m_name=$request->input('m_name');
		
		$check=DB::table('tbl_pharmacies')->where(['m_name'=>$m_name])->get();
		if(count($check)==0)
        {
			$users=new tbl_pharmacy([	 
					'b_id'=>$request->get('brand'),
					'c_id'=>$request->get('category'),
					'm_name'=>$request->get('m_name'),
					'gram'=>$request->get('gram'),
					'quantity'=>$request->get('quantity'),
					'price'=>$request->get('price'),
					'description'=>$request->get('description'),
					'type'=>$request->get('type'),
					'product_name'=>$request->get('product_name'),
					//'image'=>  implode(",",$image),  
					'status'=>'1']);
					 $users->save();
					 $id=tbl_pharmacy::max('mid');
					 
			if($request->hasfile('image'))
            {
                foreach($request->file('image') as $image)
                {
					$name=$image->getClientOriginalName();
                    $image->move('public/upload', $name);  
                    $pic= new tbl_image();
                    $pic->image=$name;
                    $pic->mid=$id;             
                    $pic->save(); 
			    }	
                return redirect('addMedicine');
            }
        }
        else
        {
            return redirect()->back() ->with('alert', 'Already Exist!');
        }		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_pharmacy  $tbl_pharmacy
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_pharmacy $tbl_pharmacy)
    {
        return view("Patient.ProductView");
    }
	public function detail(Request $request,$mid)
    {
		$request->session()->put('mid',$mid);
		
        return view("Patient.ProductDetails");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_pharmacy  $tbl_pharmacy
     * @return \Illuminate\Http\Response
     */
    public function medicineRequest(tbl_pharmacy $tbl_pharmacy)
    {
        return view("Pharmacy.viewMedicineRequest");
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_pharmacy  $tbl_pharmacy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_pharmacy $tbl_pharmacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_pharmacy  $tbl_pharmacy
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_pharmacy $tbl_pharmacy)
    {
        //
    }
	public function request($id)
    {
		
		DB::delete('update tbl_requests set status=0 where id = ?',[$id]);
		return redirect("viewRequest");
      
    }
}
