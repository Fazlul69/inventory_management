<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Sale;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases=Purchase::all();
        $sales = Sale::all();
        return view('item_pages.index')->with('purchases',$purchases)->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item_pages.create');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')->get();
        $sales = Sale::where('s_product_code','LIKE','%'.$search_text.'%')->get();
        return view('item_pages.index')->with('purchases',$purchases)->with('sales',$sales);
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
            'name' => 'required',
            'product_code' => 'required',
            'category' => 'required',
            'product_price' => 'required',
            'vendors' => 'required',
        ]);

        $items = new Item;
        

        $items->save();
        Session::flash('success','Data insert successfully');
        return redirect(route('item_pages.index'));
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
