<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Sale;
use App\Models\Purchase;
use App\Models\Vendor;
use DB;

class SalesController extends Controller
{
    public function index()
    {
        $sales=Sale::all();
        $sales = DB::table('sales')->paginate(15);
        return view('sales_pages.index')->with('sales',$sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $search = $request->input('query');

        $vendors=Vendor::all();
        $sales=Sale::all();
        $search = $request->input('query');
        $purchases = Purchase::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('product_code', 'LIKE', "%{$search}%")
            ->get();
        
        return view('sales_pages.create', compact('vendors'))->with('purchases',$purchases)->with('sales', $sales);
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $sales = Sale::where('s_product_code','LIKE','%'.$search_text.'%')->paginate(15);
        return view('sales_pages.index')->with('sales',$sales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales=Sale::where([
            // 's_product_name' => 'required',
            ['s_product_code', '=', $request->s_product_code],
            // 's_product_particular' => 'nullable',
            // 's_product_category' => 'nullable',
            // 's_product_price' => 'nullable',
            // 's_quantity'=> 'required',
            // 'customer_info' => 'nullable',
        ])->first();

        if ($sales) {
            $sales->increment('s_quantity', $request->s_quantity);
        }else{
            Sale::create($request->all());
        }
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
