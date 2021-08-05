@extends('partnerdashboard.layout.app')
@section('excss')
<link href="{{ asset('admin/') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Property Items</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">All Property Items</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                    <a href="{{route('partnercreatepropertyitem')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square"></i> Add Property item</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Propery Name</th>
                            {{-- <th>Partner Name</th> --}}
                            <th>Disctrict</th>
                            <th>Price( INR )</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Propery Name</th>
                            {{-- <th>Partner Name</th> --}}
                            <th>Disctrict</th>
                            <th>Price(INR)</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($all_properties_item as $item)
                        <tr>
                            <td>{{$item->item_name}}</td>
                            <td>{{$item->property_type}}</td>
                            <td>{{$item->property}}</td>
                            {{-- <td>{{$item->stateName}}</td> --}}
                            {{-- <td>{{$item->manger}}</td> --}}
                            <td>{{$item->item_price}}</td>
                            <td class="text-center">
                                <a href="{{route('eidtpropertyitem',['id' => $item->id])}}" class="btn btn-outline-primary"><i class="fas fa-pen-alt"></i></a>&nbsp;
                            <a href="{{route('deletepropertyitem',['id' => $item->id])}}"class="btn btn-outline-danger"><i class="fas fa-recycle"></i></a></td>
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
