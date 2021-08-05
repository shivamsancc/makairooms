@extends('admindash.layout.app')
@section('excss')
@include('admindash.layout.template.table_header')
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Locality</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Locality</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                        <a href="{{route('all_admin_locality_add')}}" class="btn btn-outline-primary"><i
                                class="fas fa-plus-square"></i> Add Locality</a></h6>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12">
                <div class="card-body">
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
                            @foreach ($locality as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td><a href="" class="btn btn-warning">
                                        {{$item->id}}</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('exjs')
@include('admindash.layout.template.table_footer')
@endsection
