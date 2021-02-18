<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Purchase Add</title>
  </head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row" style="margin-top:100px">
                    <div class="col-8">
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="product_code"  placeholder="Product Code" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="particular" placeholder="Particular" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="category" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">	৳</span>
                                </div>
                                <input type="text" class="form-control" name="product_price"  placeholder="Purchase Price" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <label for="vendor">Choose a Vendor:</label>

                                @foreach($vendors as $v)
                                <select name="vendor" >
                                    <option value={{$v->id}}>{{$v->name}}</option>
                                </select>
                                @endforeach
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>