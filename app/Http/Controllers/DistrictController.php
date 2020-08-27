<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\district;
use App\city;
use DB;

class DistrictController extends Controller
{
   public function index(){
        $district= DB::table('tbl_district')->get();  
        return view('welcome',['data' => $district]);


       
   }

   public function cityajax(Request $request)
    {
		$id = $_POST['did'];
        // return $id;
       // $city = DB::table('tbl_city')->get();
        // $subcat = DB::table("tbl_subcat")->where("cat_id",$id)->pluck("catagory","Cat_id");
       $city = city::where('district_id',$id)->get();
        return $city;
    }
    public function city()
    {
        $city= city::all();
        return View::make('district', ['city'=>$city]);
    }

  
}
