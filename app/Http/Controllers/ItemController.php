<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Damage;
use DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $purchases=Purchase::all();
        $sales = Sale::all();
        $damages = Damage::all();
        // dd($damages);
        $purchases = DB::table('purchases')->paginate(15);
        return view('item_pages.index')->with('purchases',$purchases)->with('sales',$sales)->with('damages',$damages);
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
        $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')
                    ->orWhere('name','LIKE','%'.$search_text.'%')
                    ->orWhere('category','LIKE','%'.$search_text.'%')
                    ->paginate(15);
        $sales = Sale::where('s_product_code','LIKE','%'.$search_text.'%')
        ->orWhere('s_product_name','LIKE','%'.$search_text.'%')
        ->orWhere('s_product_category','LIKE','%'.$search_text.'%')
        ->get();
        $damages = Damage::where('product_code','LIKE','%'.$search_text.'%')
                    ->orWhere('name','LIKE','%'.$search_text.'%')
                    ->orWhere('category','LIKE','%'.$search_text.'%')
                    ->get();

        return view('item_pages.index')->with('purchases',$purchases)->with('sales',$sales)->with('damages',$damages);
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
