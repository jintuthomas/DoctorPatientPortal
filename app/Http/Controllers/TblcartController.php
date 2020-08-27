<?php

namespace App\Http\Controllers;

use App\Tblcart;
use App\Tbl_Amount;
use Illuminate\Http\Request;
use DB;
use Session;

class TblcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view("Patient.viewCart");
    }
	 public function addcart(Request $request)
	  {
		   return $request;
		 $mid=$request->input('mid');
		 $price=$request->input('price');
		 $quantity=$request->input('quantity');
		 // $pr= $price * $quantity;
		 
		 if(session()->has('email'))
			 
		 {
			 $email=Session::get('email');
			
	        $id=DB::table('registers')->select('id')->where('email',"=",$email)->get();	
		 }
		 else 
		 {
			echo "login First";
   		 }		
		 foreach($id as $log)
		{
		$regid=$log->id;		
        $cart=DB::table('tblcarts')->select('mid')->where('id',"=",$regid)->get();
        foreach($cart as $shoppy)
		{
	      if($shoppy->mid==$mid)
		  {
		       $cartz=DB::table('tblcarts')->where('id',"=",$regid)->get();
			   Return view('Patient.viewCart',compact('cartz')); 
		  }
		}
		$price=$request->input('price');
		$status=1;
				
	    $carts=array('id'=>$regid,'mid'=>$mid,'quantity'=>$quantity,'price'=>$price,'status'=>$status);
		DB::table('tblcarts')->insert($carts);	
		$cartz=DB::table('tblcarts')->select('mid')->where('id',"=",$regid)->where('status',"=",1)->get();
		
		Return view('Patient.viewCart',compact('cartz'));    
		}				
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		//return $request;
		$name=$request->input('name');
		$address=$request->input('address');
		$city=$request->input('city');
		$district=$request->input('district');
		$pin=$request->input('pin');
		$email=$request->input('email');
		$mobile=$request->input('mobile');
		$amt=$request->input('amt');
		$p_id=$request->input('p_id');
		$result=DB::insert("insert into tbl__delievry_addresses(p_id,name,address,city,district,pin,phone,status)values(?,?,?,?,?,?,?,?)",[$p_id,$name,$address,$city,$district,$pin,$mobile,1]);
		$cartz=DB::table('tblcarts')->where('id',$p_id)->where('status',1)->get();		
		Return view('Patient.OnlinePayment',compact('p_id','amt'));   
		
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$email=Session::get('email');
		//$id=DB::table('registers')->select('id')->where('email',"=",$email)->get();			
		$mid=$request->input('mid');
		$p_id=$request->input('p_id');
		 
		$price=$request->input('price');
		$quantity=$request->input('quantity');
		$type=$request->input('type');	
		$req=DB::table('tblcarts')->where('mid',$mid)->get();
		$q1=count($req);
		if($q1==0)
		{			
		if($type=='p_need')
		{
			 $approve=DB::table('tbl_medicine_requests')->where(['mid'=>$mid])->where(['status'=>2])->get();			
		     $c1=count($approve);				 
			 if($c1==1)
			 {			 
				$result=DB::insert("insert into tblcarts(id,mid,quantity,price,status)values(?,?,?,?,?)",[$p_id,$mid,$quantity,$price,1]);
				$cartz=DB::table('tblcarts')->select('mid')->where('id',$p_id)->where('status',1)->get();		
				Return view('Patient.viewCart',compact('cartz'));    
			 }
			 else
			 {
				 return redirect()->back() ->with('alert', 'Prescription is Needed');
			 }
		}	 
		elseif($type=='p_not')
		{
			
			$result=DB::insert("insert into tblcarts(id,mid,quantity,price,status)values(?,?,?,?,?)",[$p_id,$mid,$quantity,$price,1]);
			$cartz=DB::table('tblcarts')->select('mid')->where('id',"=",$p_id)->where('status',"=",1)->get();		
			Return view('Patient.viewCart',compact('cartz'));    	
		}
		}
		else
		{
			return view('Patient.viewCart');
		}
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblcart  $tblcart
     * @return \Illuminate\Http\Response
     */
    public function payOnline(Request $request)
    {
		//return $request;		
		//return $cartz;
		
	   $p_id=$request->input('p_id');
	   $c_name=$request->input('c_name');
	   $c_no=$request->input('cardNumber');
	   $exp=$request->input('cardExpiry');
	   $cvv=$request->input('cardCVC');
	   $amt=$request->input('amt');
	   $card=DB::table('tbl_cards')->where(['c_name'=>$c_name])->where(['c_number'=>$c_no])->where(['cvv'=>$cvv])->where(['exp'=>$exp])->get();
	   $c1=count($card);
	   if($c1==1)
	   {
		$result=DB::insert("insert into tbl__amounts(p_id,amount,status)values(?,?,?)",[$p_id,$amt,1]);
		$amt_id=Tbl_Amount::max('amt_id');
	    $cartz=DB::table('tblcarts')->where('id',$p_id)->where('status',1)->get();
		
		foreach($cartz as $a)
		{	
		  $p_id=$a->id;
		  $mid=$a->mid;
		  $quantity=$a->quantity;
		  $price=$a->price;
		  
          $res=DB::insert("insert into tbl__orders(p_id,amt_id,mid,quantity,price,status)values(?,?,?,?,?,?)",[$p_id,$amt_id,$mid,$quantity,$price,1]);  
		  $del=DB::delete('delete from tblcarts where id= ?',[$p_id]);

		}	
		//return redirect()->back() ->with('Order successfully!');
		return view('Patient.sucess');	
	   }
	   else
	   {
		  	return view('Patient.notsucess');
	      //  return redirect()->back() ->with('Enter Valid Card Details!');

 
	   }
	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblcart  $tblcart
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
		// return $request;
		$t=$request->input('id');
       return view('Patient.CheckOut',compact('t'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblcart  $tblcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tblcart $tblcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblcart  $tblcart
     * @return \Illuminate\Http\Response
     */
   public function cart($cart_id)
    {
		
		//DB::delete('update tblcarts set status=0 where  cart_id= ?',[$cart_id]);
		DB::delete('delete from tblcarts where cart_id= ?',[$cart_id]);
		return redirect("viewCart"); 
		
    }
}
