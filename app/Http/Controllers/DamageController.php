<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Damage;
use App\Models\Sale;
use App\Models\Purchase;
use DB;
use Session;

class DamageController extends Controller
{
    public function index()
    {
        $damage=Damage::all();
        // $damage = Damage::with('vendor')->paginate(15);
        return view('damage_pages.index')->with('damage',$damage);
    }

    public function create(Request $request)
    {
        
        $search = $request->input('query');

        $vendors=Vendor::all();
        $sales=Sale::all();
        $damages=Damage::all();
        $search = $request->input('query');
        $purchases = Purchase::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('product_code', 'LIKE', "%{$search}%")
            ->get();
        
        return view('damage_pages.create', compact('vendors'))->with('purchases',$purchases)->with('sales', $sales)->with('damages', $damages);
       }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'product_code' => 'required',
            'particular' => 'nullable',
            'category' => 'nullable',
            'product_price' => 'nullable',
            'quantity'=> 'required',
        ]);
           $damage = Damage::where([
             ['product_code', '=', $request->product_code],
         ])->first();
        
            if ($damage) {
                $damage->increment('quantity', (int)$request->quantity);
                // $purchase->increment('product_price', $request->product_price);
            } else {
                Damage::create($request->all());
            }
            // $purchases = Purchase::create($request->all());
            return redirect(route('damage.index'));
        }
    
    // public function search(Request $request){
    //         $search_text = $_GET['query'];
    //         $purchases = Purchase::where('product_code','LIKE','%'.$search_text.'%')
    //                                 ->orWhere('name','LIKE','%'.$search_text.'%')
    //                                 ->paginate(15);
    //         return view('damage_pages.index')->with('damage',$damage);
    // }


    public function edit($id)
    {
        $damage = Damage::find($id);
        return view('damage_pages.edit',compact('damage'));
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
        $damage = Damage::find($id);
        
        $damage->name = $request->name;
        $damage->product_code = $request->product_code;
        $damage->particular = $request->particular;
        $damage->category = $request->category;
        $damage->product_price = $request->product_price;
        $damage->quantity = $request->quantity;

        $damage->save();
        
        Session::flash('success','Data insert successfully');
        return redirect(route('damage.index'));
    }

    public function delete($id)
    {
        Damage::find($id)->delete();
        return redirect()->back();
    }
}
