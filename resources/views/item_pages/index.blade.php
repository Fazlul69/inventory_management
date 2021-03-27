@extends('home')

@section('content')

<div class="container">
<div class="middle">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Items</a>
     
      
      <form class="form-inline" action="{{route('item.search')}}" method="get">
        <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <p class="doprint"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill " viewBox="0 0 16 16">
        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
        <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        </svg>Print
      </p>
    </nav>
</div>
  
  <div class="dash">
    <div class="row">
      <div class="col-6">
        <div class="border1">
          @php
            $total = $purchases->where('product_code')->sum('total');
          @endphp
          <p class="amount">Total Amount of Product In: {{$total}}</p>
        </div>
      </div>
      <div class="col-6">
        <div class="border2">
        @php
            $s_total = $sales->where('s_product_code')->sum('total');
          @endphp
          <p class="amount">Total Amount of Product Out: {{$s_total}}</p>
        </div>
      </div>
    </div>
  </div>
<!-- table start -->
  <div class="table-part" id='printTable'>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Product Code</th>
          <th scope="col">Particular</th>
          <th scope="col">Category</th>
          <th scope="col">Total Quantity</th>
          <th scope="col">Store Out</th>
          <th>Damage</th>
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
              @php
                $dmg=0;
                $dmg = $damages->where('product_code',$row->product_code)->sum('quantity');
              @endphp
              <td>{{$dmg}}</td>
              <td>{{$row->quantity - $qty-$dmg}}</td>
           
        
        </tr>
        @endforeach
      </tbody>  
    </table>
  </div>
  <div class="pagination">
    <span>{{$purchases->links()}}</span>
  </div>
</div>

  <style>
    .table td {
    padding: 0.5rem !important;}
  </style>
  @endsection