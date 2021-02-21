@extends('home')

@section('content')
<div class="middle">

    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Vendor</a>
      <select name="pagi" id="paginat">
        <option value="10">10</option>
        <option value="25">25</option>
        <option value="50">50</option>
        <option value="100">100</option>
      </select>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <!-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#vendorModal">
        Add New Vendor
      </a> -->

     
    </nav>
  </div>
  <!-- table start -->
  <div class="table-part">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile No</th>
          <th scope="col">Due (TK)</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($vendors as $v)
        <tr>
          <td>{{$v->id}}</td>
          <td>{{$v->name}}</td>
          <td>{{$v->email}}</td>
          <td>{{$v->mobile}}</td>
          <td>{{$v->unpaid}}</td>
          <td>
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
          </td>
        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
  @endsection