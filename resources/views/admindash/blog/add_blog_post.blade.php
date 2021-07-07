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
        <h1 class="h3 mb-0 text-gray-800">Add Blog Post</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Add Blog Post</h6>
                </div>
        </div>
    </div>
    <div class="row m-0 p-0">
        <div class="col-12">
            <div class="card-body">
                <form action="{{route('all_blogs_store')}}" method="post" class="form" enctype="multipart/form-data">@csrf
                    <div class="form-group ">
                        <label for="">Post Title</label>
                        <input type="text" required class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="">
                        <small id="helpId" class="form-text text-muted">Enter Post Title</small>
                    </div>
                    <div class="form-group">
                        <label for="">Post</label>
                        <textarea class="form-control" name="body" id="body" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Featured Image</label>
                                <input type="file" required class="form-control-file" name="f_image" id="f_image" placeholder=""
                                    aria-describedby="fileHelpId">
                                <small id="fileHelpId" class="form-text text-muted">Select Featured Image</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Blog Category</label>
                                <select class="custom-select" name="category" id="category">
                                    <option selected value="">Select one</option>
                                    @foreach($blog_category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
@endsection
@section('exjs')
@endsection
