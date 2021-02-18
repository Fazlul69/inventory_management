<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $items=Item::all();
       // return view('item_pages.index')->with('items',$items);
        //return view('home');
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
        // $items->name= $request->input('name');
        // $items->product_code= $request->input('product_code');
        // $items->particular= $request->input('particular');
        // $items->category= $request->input('category');
        // $items->purchase_price= $request->input('purchase_price');
        // $items->vendors= $request->input('vendors');
        $items->name = $request->name;
        $items->product_code=  $request->product_code;
        $items->particular = $request->particular;
        $items->category = $request->category;
        $items->product_price = $request->product_price;
        $items->vendors = $request->vendors;

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
