@extends('layouts.home')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                @yield('content')
                </div>
            </div>           
        </div>
    </section>
  
@endsection