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
        print($request->input());
        // $this->validate($request,[
        //     'name' => 'required',
        //     'product_code' => 'required',
        //     'particular' => 'required',
        //     'category' => 'required',
        //     'product_price' => 'required',
        //     'vendor_id' => 'required',
        // ]);

        // $purchases = new Purchase;
        // $purchases->name= $request->input('name');
        // $purchases->product_code= $request->input('product_code');
        // $purchases->particular= $request->input('particular');
        // $purchases->category= $request->input('category');
        // $purchases->product_price= $request->input('product_price');
        // $purchases->vendor_id= $request->input('vendor');
        
        // $purchases->save();
        // Session::flash('success','Data insert successfully');
        // return redirect(route('purchase_pages.index'));
    }
}
