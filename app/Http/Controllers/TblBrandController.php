<?php

namespace App\Http\Controllers;

use App\tbl_brand;
use Illuminate\Http\Request;
use DB;
class TblBrandController extends Controller
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
      $brand = $request->input('b_name');
	  $status=1;
      DB::insert('insert into tbl_brands (b_name	,status) values(?,?)',[$brand,$status]);
	  return view("Pharmacy.addBrand");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_brand  $tbl_brand
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_brand $tbl_brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_brand  $tbl_brand
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_brand $tbl_brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_brand  $tbl_brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_brand $tbl_brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_brand  $tbl_brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_brand $tbl_brand)
    {
        //
    }
}
