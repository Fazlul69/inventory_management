@extends('home')

@section('content')

<div id="customer">
    <div class="container">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">+ Add Customer</button>
        <div class="card">
            <div class="card-header">
                Customer
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th>Mobile No.</th>
                        <th>Company Name</th>
                        <th>Balance</th>
                        <th>Credit Limit</th>
                        <th>Address</th>
                        <th>Comments</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $cusInfo)
                        <tr>
                            <td>{{$cusInfo->id}}</td>
                            <td>{{$cusInfo->name}}</td>
                            <td>{{$cusInfo->email}}</td>
                            <td>{{$cusInfo->mobile}}</td>
                            <td>{{$cusInfo->company_name}}</td>
                            <td>{{$cusInfo->balance}}</td>
                            <td>{{$cusInfo->credit_limit}}</td>
                            <td>{{$cusInfo->address}}</td>
                            <td>{{$cusInfo->comments}}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- add customer modal start-->
    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabal">Add New Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('cus.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputName">Name</label>
                                    <input type="text" class="form-control" id="cusInputName" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="cusInputEmail1" name="email" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputMobile">Mobile No.</label>
                                    <input type="text" class="form-control" id="cusInputMobile" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputCompany">Company Name</label>
                                    <input type="text" class="form-control" id="cusInputCompany" name="company_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputBalance">Balance</label>
                                    <input type="text" class="form-control" id="cusInputBalance" name="balance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputCredit">Credit Limit</label>
                                    <input type="text" class="form-control" id="cusInputCredit" name="credit_limit">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputAddress">Address</label>
                                    <input type="text" class="form-control" id="cusInputAddress" name="address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputComments">Comments</label>
                                    <input type="text" class="form-control" id="cusInputComments" name="comments">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="cusInputDue">Due</label>
                            <input type="text" class="form-control" id="cusInputDue" name="unpaid" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- add customer modal end-->

<!-- edit start -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabal">Add New Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('cus.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputName">Name</label>
                                    <input type="text" class="form-control" id="cusInputName" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="cusInputEmail1" name="email" aria-describedby="emailHelp" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputMobile">Mobile No.</label>
                                    <input type="text" class="form-control" id="cusInputMobile" name="mobile" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputCompany">Company Name</label>
                                    <input type="text" class="form-control" id="cusInputCompany" name="company_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputBalance">Balance</label>
                                    <input type="text" class="form-control" id="cusInputBalance" name="balance" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputCredit">Credit Limit</label>
                                    <input type="text" class="form-control" id="cusInputCredit" name="credit_limit">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputAddress">Address</label>
                                    <input type="text" class="form-control" id="cusInputAddress" name="address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cusInputComments">Comments</label>
                                    <input type="text" class="form-control" id="cusInputComments" name="comments">
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="cusInputDue">Due</label>
                            <input type="text" class="form-control" id="cusInputDue" name="unpaid" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- edit end -->

@endsection