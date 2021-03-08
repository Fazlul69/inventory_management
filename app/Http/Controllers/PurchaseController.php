<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Purchase;
use App\Models\Vendor;
use DB;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::all();
        // $purchases = DB::table('purchases')->paginate(15);
        $purchases = Purchase::with('vendor')->paginate(15);
        return view('purchase_pages.index')->with('purchases',$purchases);
    }


    public function create(Request $request)
    {
        $vendors=Vendor::all();
        // return view('purchase_pages.create', compact('vendors'));

        // $search_text = $_GET['query'];
        // $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')->get();
        // return view('purchase_pages.create', compact('vendors'))->with('purchases',$purchases);

        $search = $request->input('query');

        // Search in the title and body columns from the posts table
        $purchases = Purchase::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('product_code', 'LIKE', "%{$search}%")
            ->get();
        
        return view('purchase_pages.create', compact('vendors'))->with('purchases',$purchases);
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

    public function search(Request $request){
        $search_text = $_GET['query'];
        $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')->paginate(15);
        return view('purchase_pages.index')->with('purchases',$purchases);
    }
}
