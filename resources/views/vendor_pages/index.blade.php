@extends('home')

@section('content')
<div class="container">
  <div class="middle">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Vendor</a>
      <form class="form-inline" action="{{route('vendor.search')}}" method="get">
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
  <!-- table start -->
  <div class="table-part" id='printTable'>
    <table class="table table-bordered">
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
                <a class="dropdown-item" href="{{route('edit',$v->id)}}">Edit</a>
                
                <form method="POST" id="delete-form-{{$v->id}}" 
                        action="{{route('vendor.delete',$v->id)}}" style="display: none;">
                        @csrf
                        {{method_field('delete')}}
                        
                      </form>
                    <button onclick="if(confirm('Are you sure, You want to delete this?')){
                      event.preventDefault();
                      document.getElementById('delete-form-{{$v->id}}').submit();
                    }else{
                      event.preventDefault();
                    }
                    "class="btn btn-danger dropdown-item" href="">Delete</button>
                <!-- <a class="dropdown-item" href="#">Delete</a> -->
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      
      </tbody>
    </table>
  </div>
</div>  
@endsection