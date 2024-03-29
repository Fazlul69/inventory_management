<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Purchase;
use App\Models\Vendor;
use App\Models\Sale;
use App\Models\Damage;
use DB;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::all();
        $purchases = Purchase::with('vendor')->paginate(15);
        return view('purchase_pages.index')->with('purchases',$purchases);
    }

    public function create(Request $request)
    {
        $vendors=Vendor::all();
        $sales=Sale::all();
        $damages=Damage::all();

        $search = $request->input('query');
        $purchases = Purchase::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('product_code', 'LIKE', "%{$search}%")
            ->get();
        
        return view('purchase_pages.create', compact('vendors'))->with('purchases',$purchases)->with('sales', $sales)->with('damages', $damages);
    }

    public function store(Request $request)
    {
       //dump($request->all());
       $this->validate($request,[
        'name' => 'required',
        'product_code' => 'required',
        'particular' => 'nullable',
        'category' => 'nullable',
        'product_price' => 'nullable',
        'quantity'=> 'required',
        'total'=> 'nullable',
        'date'=>'nullable',
    ]);
       $purchase = Purchase::where([
        // ['name', '=',$request->name],
         ['product_code', '=', $request->product_code],
         // ['particular', '=', $request->particular],
         // ['category', '=', $request->category],
         // ['product_price', '=', $request->product_price],
         // ['vendor_id', '=', $request->vendor_id],
        //  ['quantity', '=', $request->quantity]
     ])->first();
    
        if ($purchase) {
            $purchase->increment('quantity', (int)$request->quantity);
            // $purchase->increment('product_price', $request->product_price);
        } else {
            Purchase::create($request->all());
            $purchases=Purchase::all();
        }
        return redirect(route('purchase_pages.index'));
    }

    public function search(Request $request){
        $search_text = $_GET['query'];
        $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')
                                ->orWhere('name','LIKE','%'.$search_text.'%')
                                ->paginate(120);
        return view('purchase_pages.index')->with('purchases',$purchases);
    }

    public function edit($id)
    {
        $purchase = Purchase::find($id);
        return view('purchase_pages.edit',compact('purchase'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'product_code' => 'required',
            'particular' => 'nullable',
            'category' => 'nullable',
            'product_price' => 'nullable',
            'quantity'=> 'required',
        ]);
        $purchase = Purchase::find($id);
        
        $purchase->name = $request->name;
        $purchase->product_code = $request->product_code;
        $purchase->particular = $request->particular;
        $purchase->category = $request->category;
        $purchase->product_price = $request->product_price;
        $purchase->quantity = $request->quantity;

        $purchase->save();
        
        Session::flash('success','Data insert successfully');
        return redirect(route('purchase_pages.index'));
    }

    public function delete($id)
    {
        Purchase::find($id)->delete();
        return redirect()->back();
    }
}
