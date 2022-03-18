@extends('home')

@section('content')
    <div class="container">
        <h4 class="fa">Edit Damage</h4>
        <div class="divider">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="card" style="margin-top:25px">
                        <div class="card-body">
                            <div class="row" >
                                <div class="col-10">
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
                                    <form action="{{route('damage.update',$damage->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control"  value="{{$damage->name}}" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$damage->product_code}}" name="product_code"  placeholder="Product Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$damage->particular}}" name="particular" placeholder="Particular">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$damage->category}}" name="category" placeholder="Category">
                                        </div>
                                        <div class="form-group row">
                                            <div class="input-group-prepend col-1">
                                                <span class="input-group-text">	৳</span>
                                            </div>
                                            <input type="text" class="form-control col-10 p" value="{{$damage->product_price}}" name="product_price"  placeholder=" Price">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{$damage->quantity}}" name="quantity" placeholder="Quantity">
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
            </div>
        </div>
    </div>
@endsection