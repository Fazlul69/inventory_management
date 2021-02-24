@extends('home')

@section('content')
    <div class="container">
        <div class="card" style="margin-top:100px">
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
                                <input type="text" class="form-control" name="s_product_name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="s_product_code"  placeholder="Product Code" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="s_product_particular" placeholder="Particular" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="s_product_category" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">	৳</span>
                                </div>
                                <input type="text" class="form-control" name="s_product_price"  placeholder="Purchase Price" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="s_quantity" placeholder="Quantity" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="customer_info" placeholder="Customer Information" aria-label="Username" aria-describedby="basic-addon1">
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
@endsection