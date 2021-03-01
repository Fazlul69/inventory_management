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
        // $this->validate($request,[
        //     'name' => 'required',
        //     'product_code' => 'required',
        //     'particular' => 'required',
        //     'category' => 'required',
        //     'product_price' => 'required',
        //     'vendor_id' => 'required',
        //     'quantity'=> 'required',
        // ]);
        // $purchase = Purchase::create($request->all());
        
        // Session::flash('success','Data insert successfully');
        // return redirect(route('purchase_pages.index'));


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
}
