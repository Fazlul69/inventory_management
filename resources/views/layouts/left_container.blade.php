
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          <!-- <li class="nav-item has-treeview menu-open">
            <a href="{{route('dashboard.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li> -->
          <!-- all item -->
          <li class="nav-item has-treeview menu-open active ">
            <a href="{{route('item_pages.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt "></i>
              <p class="active">
                All Item
              </p>
            </a>
          </li>
          <!--purchase  -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('purchase_pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('purchase.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Purchase</p>
                </a>
              </li>
            </ul>
          </li>
         <!-- vendor -->
         <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Vendor
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vendor_pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Vendor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('vendor.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Vendor</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- sales -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sales_pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Sale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sales.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Sale</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>