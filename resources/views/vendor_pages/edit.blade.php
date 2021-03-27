
@extends('home')

@section('content')
<div class="container">
        <h4 class="f">Edit Vendor</h4>
        <div class="row">
            <div class="col-6">
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
                        <form action="{{route('update',$vendor->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" value="{{$vendor->name}}" placeholder="Name" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"  value="{{$vendor->email}}" placeholder="Email" >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="mobile"  value="{{$vendor->mobie}}" placeholder="Mobile" >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="unpaid"  value="{{$vendor->unpaid}}" placeholder="Due" >
                            </div>
                            <div class="form-group">
								<button class="btn btn-success" type="submit">Update</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
    @endsection