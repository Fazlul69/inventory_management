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
  @if($sales->isEmpty())
  {{'No Product Out From The Store'}}
  @else
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
          @foreach($sales as $s)
          <td>{{$s->firstWhere('s_product_code',$row->product_code)->s_quantity}}</td>
          <!-- @endforeach -->
          <?php
          $totalQ=$row->quantity;
          $totalS=$s->firstWhere('s_product_code',$row->product_code)->s_quantity;
          ?>
          <td>{{$totalQ - $totalS}}</td>
          <!-- <td>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                  <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Edit</a>
                <a class="dropdown-item" href="#">Delete</a>
              </div>
            </div>
          </td> -->
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  @endif
  <style>
    .table td {
    padding: 0.5rem !important;}
  </style>
  @endsection