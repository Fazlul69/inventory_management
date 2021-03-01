<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Sale;
use DB;

class SalesController extends Controller
{
    public function index()
    {
        $sales=Sale::all();
        return view('sales_pages.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales_pages.create');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $sales = Sale::where('s_product_code','LIKE','%'.$search_text.'%')->get();
        return view('sales_pages.index', compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            's_product_name' => 'required',
            's_product_code' => 'required',
            's_product_particular' => 'required',
            's_product_category' => 'required',
            's_product_price' => 'required',
            's_quantity'=> 'required',
            'customer_info' => 'required',
        ]);
        $sales = Sale::create($request->all());
        
        // $purchases->save();
        Session::flash('success','Data insert successfully');
        return redirect(route('sales_pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
