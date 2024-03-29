
<!-- Brand Logo -->
<a href="http://127.0.0.1:8000/home/item" class="brand-link">
      <span class="brand-text font-weight-light"> Shah Amanat Light House</span>
    </a>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    
<!-- Sidebar -->
<div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <!-- all item -->
          <li class="nav-item has-treeview menu-open ">
            <a href="{{route('item_pages.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt "></i>
              <p class="active">
                All Item
              </p>
            </a>
          </li>
          <p>Inventory Part</p>
          <!--purchase  -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product In
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('purchase_pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Store</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('purchase.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New in Store</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- sales -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product Out
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sales_pages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Store Out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sales.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Out from Store</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- damage -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Damage Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('damage.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('damage.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Damage</p>
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
          <p>Pos Part</p>
          <!-- customer -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{route('cus.index')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <p>Others</p>
          <!-- Barcode -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Barcode
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('bar.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('bar.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Product</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>