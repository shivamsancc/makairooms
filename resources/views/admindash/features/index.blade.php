@extends('admindash.layout.app')
@section('excss')
<link href="{{ asset('admin/') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Property Features</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Property Features</h6>

                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-4 border">
                <form action="{{route('all_features_add')}}" class="form" method="post">@csrf
                    <div class="form-group">
                        <label for=""> Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="f_name" id="f_name" aria-describedby="helpId"
                            placeholder=" Wifi">
                        @error('f_name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <small id="helpId" class="form-text text-muted">Enter Name</small>
                    </div>
                    <div class="form-group">
                        <label for="">About</label>
                        <textarea class="form-control" name="f_text" id="f_text" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Icon <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="f_icon" id="f_icon" aria-describedby="helpId"
                            placeholder=" fa fa-fan">
                        @error('f_icon')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <small id="helpId" class="form-text text-muted">Enter Icon Code for Refrence <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free" target="_blank"> Click Here</a></small>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button><br>
                </form>
            </div>
            <div class="col-8">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($all_feature as $item)
                                <tr>
                                    <td>{{$item->f_name}}</td>
                                    <td><i class="{{$item->f_icon}} fa-2x text-primary"> </i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
@endsection
