@extends('home')

@section('content')
<div class="middle">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Items</a>
      <!-- <select name="pagi" id="paginat">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select> -->
      <form class="form-inline" action="{{route('item.search')}}" method="get">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <!-- <a href="{{route('item.create')}}" type="button" class="btn btn-primary">
        Add New
      </a> -->
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
          <th scope="col">Sale</th>
          <th scope="col">Stock</th>
          <!-- <th scope="col">Action</th> -->
        </tr>
      </thead>
      <tbody>
          
      
       @foreach($purchases as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->product_code}}</td>
          <td>{{$row->particular}}</td>
          <td>{{$row->category}}</td>
          <td>{{$row->quantity}}</td>  

              @php
                $qty = $sales->where('s_product_code',$row->product_code)->sum('s_quantity');
              @endphp
              <td>{{$qty}}</td>
              <td>{{$row->quantity - $qty}}</td>
           
        
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>
  <div class="pagination">
    <span>{{$purchases->links()}}</span>
  </div>
  <style>
    .table td {
    padding: 0.5rem !important;}
  </style>
  @endsection