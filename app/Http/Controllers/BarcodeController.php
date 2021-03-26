<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barcode;
use DB;

class BarcodeController extends Controller
{
    public function index(){
        $barcodes = Barcode::all();
        $barcodes = DB::table('barcodes')->paginate(30);
        return view('barcode.index')->with('barcodes', $barcodes);
    }

    public function create(){
        return view('barcode.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'product_code' => 'required',
            'product_name' => 'required',
            'price' => 'nullable',
            'image' => 'required',
        ]);

        $barcodes = new Barcode();
        
        $barcodes->category = $request->category;
        $barcodes->product_code = $request->product_code;
        $barcodes->product_name = $request->product_name;
        $barcodes->price = $request->price;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/doctor/',$filename);
            $barcodes->image = $filename;
        }else{
            //return $request;
            $barcodes->image = '';
        }
        $barcodes->save();
        
        return redirect(route('bar.create'));
    }
}
