<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Purchase;
use App\Models\Vendor;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::all();
        return view('purchase_pages.index')->with('purchases',$purchases);
    }


    public function create()
    {
        $vendors=Vendor::all();
        return view('purchase_pages.create', compact('vendors'));
        //return view('purchase_pages.create');
    }

    public function store(Request $request)
    {
       //dump($request->all());

        $purchase = Purchase::where([
           // ['name', '=', $request->name],
            ['product_code', '=', $request->product_code],
            // ['particular', '=', $request->particular],
            // ['category', '=', $request->category],
            // ['product_price', '=', $request->product_price],
            // ['vendor_id', '=', $request->vendor_id],
            // ['quantity', '=', $request->quantity]
        ])->first();
    
        if ($purchase) {
            $purchase->increment('quantity', $request->quantity);
            $purchase->increment('product_price', $request->product_price);
        } else {
            Purchase::create($request->all());
        }
        return redirect(route('purchase_pages.index'));
    }

    public function addsearch(){
        $search_text = $_GET['query'];
        $vendors = Vendor::where('product_code','LIKE','%'.$search_text.'%')->get();
        return view('purchase_pages.create')->with('vendors',$vendors);
    }
}
