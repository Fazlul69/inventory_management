<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('pos_part.customer')->with('customers',$customers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required',
            'mobile' => 'required',
            'company_name' => 'required',
            'balance' => 'required',
            'credit_limit'=> 'nullable',
            'address' => 'required',
            'comments' => 'nullable',
            'unpaid' => 'required',
        ]);
        $customers = new Customer;
        $customers = Customer::where([
            ['name', '=',$request->name],
            ['email', '=',$request->email],
            ['mobile', '=',$request->mobile],
            ['company_name', '=',$request->company_name],
            ['balance', '=',$request->balance],
            ['credit_limit', '=',$request->credit_limit],
            ['address', '=',$request->address],
            ['comments', '=',$request->comments],
            ['unpaid', '=',$request->unpaid],
         ]);
        
        Customer::create($request->all());
        return redirect(route('cus.index'));
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
