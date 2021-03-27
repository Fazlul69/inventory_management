<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Barcode</title>
    <style>
      p {margin-top: 0;margin-bottom: 0rem;font-size: 10px;}   
      .category {margin-bottom: 10px;}
      .container.barcode-section {padding-top: 00px;}
      a,a:hover {text-decoration: none;color: #000;}
      .w-5 {height:auto;width: 15px;}
      .text-sm.text-gray-700.leading-5 {margin-bottom: 1rem;}
      .pagination margin-left: 20px;margin-bottom: 20px;}
    </style>
  </head>
  <body>
    <div class="container barcode-section">
    <div class="middle">
                    <nav class="navbar navbar-light bg-light justify-content-between">
                      <a class="navbar-brand">All Barcode and Details</a>
                      <form class="form-inline" action="{{route('bar.search')}}" method="get">
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
      <div class="row" id='printTable'>
      @foreach($barcodes as $b)
        <div class="col-4">
          <figure class="figure">
            <figcaption class="category">
              <p>{{$b->category}}</p>
              <p>{{$b->product_name}}</p>
              <p>{{$b->product_code}}</p>
            </figcaption>
            <img src="{{asset('uploads/doctor/'. $b->image)}}" class="figure-img img-fluid rounded" alt="...">
          </figure>
        </div>
        @endforeach 
      </div>
    </div>
    <div class="pagination">
    <span>{{$barcodes->links()}}</span>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/print.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $('.doprint').click(function(){
    var printme = document.getElementById('printTable');
    var wme = window.open("","","width=900, height=700");
    wme.document.write(printme.outerHTML);
    wme.focus();
    wme.print();
    wme.close();
})
    </script>
  </body>
</html>