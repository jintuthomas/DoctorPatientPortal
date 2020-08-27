<?php

namespace App\Http\Controllers;

use App\tbl_category;
use Illuminate\Http\Request;
use DB;
class TblCategoryController extends Controller
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
      $category = $request->input('c_name');
	  $status=1;
      DB::insert('insert into tbl_categories (c_name	,status) values(?,?)',[$category,$status]);
	  return view("Pharmacy.AddCategory");
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
     * @param  \App\tbl_category  $tbl_category
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_category $tbl_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_category  $tbl_category
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_category $tbl_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_category  $tbl_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_category $tbl_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_category  $tbl_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_category $tbl_category)
    {
        //
    }
}
