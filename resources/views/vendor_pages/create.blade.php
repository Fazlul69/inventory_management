
@extends('home')

@section('content')
<div class="container">

        <h4 class="f">Add New Vendor</h4>
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
                        <form action="{{route('vendor.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"  placeholder="Email" >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="mobile" placeholder="Mobile" >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="unpaid" placeholder="Due" >
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