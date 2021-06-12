@extends('admindash.layout.app')
@section('excss')
<link href="{{ asset('admin/') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Partners</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Partners</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post">@csrf
                    <div class="row m-0 p-0">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Enter Partner</small>
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Email:</label>
                              <input type="email" class="form-control" name="mail" id="mail" required aria-describedby="helpId" placeholder="">
                              <small id="helpId" class="form-text text-muted">Enter Partner's Email</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Phone No.</label>
                              <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Status</label>
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                              </div>
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group">
                             <label for="">Password</label>
                             <input type="password" class="form-control" name="" id="" placeholder="">
                           </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Conform Password</label>
                              <input type="password" class="form-control" name="" id="" placeholder="">
                            </div>
                         </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('exjs')
    <!-- Page level plugins -->
    <script src="{{asset('admin/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('admin/')}}/js/demo/datatables-demo.js"></script>
@endsection