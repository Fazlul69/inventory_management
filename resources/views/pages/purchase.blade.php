<div class="middle">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Purchase</a>
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
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#purchaseeModal">
        Add New
      </button>

      <!-- Modal -->
      <div class="modal fade" id="purchaseeModal" tabindex="-1" role="dialog" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="purchaseModalLabel">Added New Purchase Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Product Code" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Particular" aria-label="Username" aria-describedby="basic-addon1">
                 </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Category" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">	৳</span>
                </div>
                <input type="text" class="form-control" placeholder="Purchase Price" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <form action="#">
                  <label for="cars">Choose a Vendor:</label>
                  <select name="cars" id="cars">
                    <option value="circle">Circle</option>
                    <option value="bsb">BSB</option>
                    <option value="omera">Omera</option>
                  </select>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Upload</button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- table start -->
  <div class="table-part">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Product Code</th>
          <th scope="col">Particular</th>
          <th scope="col">Category</th>
          <th scope="col">Purchase Price (TK)</th>
          <th scope="col">Vendor</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>LED Buld</td>
          <td>LB-01</td>
          <td>3 watt AC B-22</td>
          <td>led buld</td>
          <td>280</td>
          <td>Circle</td>
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
        <tr>
          <th scope="row">2</th>
          <td>T-Series (Bulb)</td>
          <td>LB-04</td>
          <td>T 15 watt AC (Economy) b-22</td>
          <td>T-series bulb</td>
          <td>320</td>
          <td>BSB</td>
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
      </tbody>
    </table>
  </div>