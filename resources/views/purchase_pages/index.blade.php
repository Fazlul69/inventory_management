@extends('home')

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="middle">
                    <nav class="navbar navbar-light bg-light justify-content-between">
                      <a class="navbar-brand">Purchase</a>
                      <!-- <select name="pagi" id="paginat">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> -->
                      <form class="form-inline" action="{{route('purchase.search')}}" method="get">
                        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>


                    </nav>
                  </div>
                  <!-- table start -->
                  <div class="table-part">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Product Code</th>
                          <th scope="col">Particular</th>
                          <th scope="col">Category</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Purchase Price (TK)</th>
                          <th scope="col">Vendor</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($purchases as $purchase)
                        <tr>
                          <td>{{$purchase->id}}</td>
                          <td>{{$purchase->name}}</td>
                          <td>{{$purchase->product_code}}</td>
                          <td>{{$purchase->particular}}</td>
                          <td>{{$purchase->category}}</td>
                          <td>{{$purchase->quantity}}</td>
                          <td>{{$purchase->product_price}}</td>
                          <td>{{$purchase->vendor->name}}</td>
                         
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                </svg>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{route('purchase.edit',$purchase->id)}}">Edit</a>
                                
                                <form method="POST" id="delete-form-{{$purchase->id}}" 
                                  action="{{route('purchase.delete',$purchase->id)}}" style="display: none;">
                                  @csrf
                                  {{method_field('delete')}}
                                  
                                </form>
                                  <button onclick="if(confirm('Are you sure, You want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$purchase->id}}').submit();
                                  }else{
                                    event.preventDefault();
                                  }
                                  "class="btn btn-danger dropdown-item" href="">Delete</button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>  
            <div class="pagination">
              <span>{{$purchases->links()}}</span>
            </div>         
        </div>
   
  

  @endsection