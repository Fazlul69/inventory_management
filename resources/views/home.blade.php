@extends('layouts.app')
@section('content')
<div class="container-fluit">
     <div class="row">
        <div class="col-2">
            <div class="left-contain">
                <div class="row">
                    <div class="list-group col-12" id="list-tab" role="tablist">
                        <h5 class="cName">Company Name</h5>
                        <ul class="my-nav">
                            <li class="category"> 
                                <details class="dropdown ">
                                    <summary class="on_off">
                                        <span class="categoryname">Purchases</span>     
                                    </summary>
                                    <ul class="subcategory faq-row-handle" style="opacity: 1; height: auto;">
                                        <li  href="#purchase_all" class="our-clients__categories--category js--company-toggle"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                                        <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                                        </svg>All</li>
                                        <li  href="#vendor" class="our-clients__categories--category js--company-toggle">Vendors</li>
                                    </ul>  
                                </details> 
                            </li>
                            <li class="category">
                                <details class="dropdown">
                                    <summary class="on_off">
                                        <span class="categoryname">   Sales     </span>     
                                    </summary>  
                                    <ul class="subcategory" style="opacity: 1; height: auto;">
                                        <li href="#sales_all" class="our-clients__categories--category js--company-toggle"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                                                <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                                            </svg>All</li>
                                        <li href="#customer" class="our-clients__categories--category js--company-toggle">Customers</li>
                                    </ul>
                                </details>
                            </li>
                            <li class="category">
                                <details class="dropdown">
                                    <summary class="on_off">
                                    <span class="categoryname subcategory js--company-toggle" href="#items">Items  </span>    
                                    </summary>  
                                </details>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-10">
        <div class="right-contain">
                    <div class="top-view">
                      <nav class="navbar navbar-light bg-light justify-content-between">
                       
                        <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                              <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                              <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                            </svg> Barcode</a>
                            <a class="dropdown-item" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                              <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                            </svg> Logout</a>
                          </div>
                        </div>
                      </nav>
                      <hr>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                      <!--Purchase-->
                      <div class="company-brands js--company-item backdesign" id="purchase_all">
                         @include('pages.purchase')
                      </div>
                      <!-- Purchase End -->
                      <!--vendor-->
                      <div class="company-brands js--company-item js--company-item--hidden backdesign" id="vendor">
                         @include('pages.vendor')
                      </div>
                      <!-- vendor end -->
                      <!--Sales-->
                      <div class="company-brands js--company-item js--company-item--hidden backdesign" id="sales_all">
                        @include('pages.sales')
                      </div>
                      <!-- Sales End -->
                      <!-- Customer -->
                      <div class="company-brands js--company-item js--company-item--hidden backdesign" id="customer">
                        @include('pages.customer')
                      </div>
                      <!-- Customer -->
                      <!--Items-->
                      <div class="company-brands js--company-item js--company-item--hidden backdesign" id="items">
                        @include('pages.item')
                      </div>
                      <!-- Item end -->
                    </div>
                </div>
        </div>
     </div>
</div>

@endsection