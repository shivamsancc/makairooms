@extends('admindash.layout.app')
@section('title','All City')
@section('excss')
<link href="{{ asset('admin/') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All City</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">All City</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                    <a href="{{route('add_admin_city')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square"></i> Add City</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>City Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>City Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($all_city as $item)
                        <tr>
                            <td>{{$item->city_name}}</td>
                            <td>{{ ($item->status == 1) ? "Active" : ""}}</td>
                            <td class="text-center"><a href="{{route('edit_admin_city',['id' => $item->id])}}" class="btn btn-outline-primary"><i class="fas fa-pen-alt"></i></a>
                            &nbsp;<a href="{{route('delete_admin_city',['id' => $item->id])}}"class="btn btn-outline-danger"><i class="fas fa-recycle"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
