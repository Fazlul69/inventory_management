<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Session;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $vendors=Vendor::all();
        return view('vendor_pages.index')->with('vendors',$vendors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor_pages.create');
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
            'mobile' => 'nullable',
            'unpaid' => 'nullable',
        ]);
        $vendor = Vendor::create($request->all());
        
        Session::flash('success','Data insert successfully');
        return redirect(route('vendor_pages.index'));
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $vendors = Vendor::where('name','LIKE','%'.$search_text.'%')->get();
        return view('vendor_pages.index')->with('vendors',$vendors);
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
        $vendor = Vendor::find($id);
        return view('vendor_pages.edit',compact('vendor'));
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
        $this->validate($request,[
            'name' => 'required',
            'mobile' => 'required',
            'unpaid' => 'required',
        ]);
        $vendor = Vendor::find($id);
        
        $vendor->name = $request->name;
        $vendor->mobile = $request->mobile;
        $vendor->unpaid = $request->unpaid;

        $vendor->save();
        
        Session::flash('success','Data insert successfully');
        return redirect(route('vendor_pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Vendor::find($id)->delete();
        return redirect()->back();
    }
}
