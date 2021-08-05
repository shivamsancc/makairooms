@extends('admindash.layout.app')
@section('excss')
@include('admindash.layout.template.table_header')
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Partners</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">All Partners</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                    <a href="{{route('addpartners')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square"></i> Add Partner</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>State</th>
                            <th>Disctrict</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>State</th>
                            <th>Disctrict</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($all_partners as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->mail}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->stateName}}</td>
                            <td>{{$item->distName}}</td>
                            <td class="text-center"><a href="{{route('editpartner',['id' => $item->id])}}"
                                    class="btn btn-outline-primary"><i class="fas fa-pen-alt"></i></a>&nbsp;
                            <a href="{{route('deletepartner',['id' => $item->id])}}" class="btn btn-outline-danger"><i class="fas fa-recycle"></i></a></td>
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
@include('admindash.layout.template.table_footer')
@endsection
