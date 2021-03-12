@extends('home')

@section('content')
    <div class="container">
        <h4 class="fa">Add New Product Out</h4>
        <div class="divider">
            <div class="row">
                <div class="col-6">
                    <div class="card" style="margin-top:25px">
                        <div class="card-body">
                            <div class="row" >
                                <div class="col-8">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('sales.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="s_product_name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="s_product_code"  placeholder="Product Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="s_product_particular" placeholder="Particular">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="s_product_category" placeholder="Category">
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group-prepend col-1">
                                                <span class="input-group-text">	৳</span>
                                            </div>
                                            <input type="text" class="form-control col-10" name="s_product_price"  placeholder="Sales Price">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="s_quantity" placeholder="Quantity">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="customer_info" placeholder="Customer Information">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <form class="form-inline" action="{{route('sales.create')}}" method="get">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="details">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Product Code</th>
                                            <!-- <th>total qty</th> -->
                                            <th>Stock</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        @foreach($purchases as $p)
                                            <tr>
                                            @php
                                                    $qty = $sales->where('s_product_code',$p->product_code)->sum('s_quantity');
                                                @endphp
                                                <td>{{$p->name}}</td>
                                                <td>{{$p->product_code}}</td>
                                                <!-- <td>{{$qty}}</td> -->
                                                <td>{{$p->quantity - $qty}}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection