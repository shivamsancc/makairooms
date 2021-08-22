@extends('admindash.layout.app')
@section('excss')
@include('admindash.layout.template.table_header')
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Ads</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">All Ads</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                    <a href="{{route('adsmanager.create')}}" class="btn btn-outline-primary"><i class="fas fa-plus-square"></i> Add Partner</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Start Date &  End Date</th>
                            <th>Place</th>
                            <th>State</th>
                            <th>Disctrict</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Start Date &  End Date</th>
                            <th>Place</th>
                            <th>State</th>
                            <th>Disctrict</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($adds as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->start_date}}-{{$item->end_date}}</td>
                            <td>{{$item->place}}</td>
                            <td>{{$item->stateName}}</td>
                            <td>{{$item->distName}}</td>
                            <td class="text-center">
                                <a href="{{ route('adsmanager.destroy', $item->id) }}" data-method="delete" class="jquery-postback  btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
    $(document).on('click', 'a.jquery-postback', function(e) {
        e.preventDefault(); // does not go through with the link.
        var $this = $(this);
        $.post({
            type: $this.data('method'),
            url: $this.attr('href')
        }).done(function (data) {
            alert('success');
            location.reload()
            // console.log(data);
        });
    });
    </script>
@endsection
