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
                                <div class="col-12">
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
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Category</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="category" placeholder="Category">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Product Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="product_name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="code" class="col-sm-3 col-form-label">Product Code</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="product_code"  placeholder="Product Code">
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row">
                                        <label for="price" class="col-sm-3 col-form-label">Price</label>
                                            <div class="input-group-prepend col-1">
                                                <span class="input-group-text">	৳</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control col-10" name="price" id="price" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
											<label for="image" class="col-sm-3 col-form-label">Image</label>
											<input type="file" name="image" id="fileToUpload">
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