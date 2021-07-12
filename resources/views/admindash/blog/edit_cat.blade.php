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
            <div class="col-12 border">
                <form action="{{route('all_blogs_cat_update',['id' => $cat_data->id])}}" class="form" method="post">@csrf
                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control" value="{{$cat_data->name}}" name="name" id="name" aria-describedby="helpId"
                            placeholder="">
                        <small id="helpId" class="form-text text-muted">Enter Name</small>
                    </div>
                    <div class="form-group">
                        <label for="">Parent Category</label>
                        <select class="custom-select" name="parent_id" id="parent_id">
                            <option selected value="">Select one</option>
                            @foreach($blog_category as $item)
                                <option value="{{ $item->id }}" {{ ( $cat_data->parent_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button><br>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@section('exjs')
@endsection
