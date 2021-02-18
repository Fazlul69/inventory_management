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
        $vendors = Vendor::all();
        return view('purchase_pages.index')->with('purchases',$purchases);;
    }

    public function create()
    {
        return view('purchase_pages.create');
    }
}
