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
        <h1 class="h3 mb-0 text-gray-800">Blog Category</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Blog Category</h6>

                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-4 border">
                <form action="{{route('all_blogs_cat_store')}}" class="form" method="post">@csrf
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="">
                        <small id="helpId" class="form-text text-muted">Enter Name</small>
                    </div>
                    <div class="form-group">
                        <label for="">Parent Category</label>
                        <select class="custom-select" name="parent_id" id="parent_id">
                            <option selected value="">Select one</option>
                            @foreach($blog_category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="col-8">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($blog_category as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td class="text-center"><a
                                            href="{{route('all_blogs_cat_delete',['id' => $item->id])}}"
                                            class="btn btn-outline-primary"><i class="fas fa-pen-alt"></i></a>&nbsp;
                                        <a href="{{route('all_blogs_cat_delete',['id' => $item->id])}}"
                                            class="btn btn-outline-danger"><i class="fas fa-recycle"></i></a></td>
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
