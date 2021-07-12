@extends('admindash.layout.app')
@section('excss')
<link rel='stylesheet' href='https://www.jqueryscript.net/demo/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js'>
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
                    <form action="{{route('blogupdate',['id' => $post->id])}}" method="post" class="form"
                        enctype="multipart/form-data">@csrf
                        <div class="form-group ">
                            <label for="">Post Title <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" value="{{$post->name}}" name="name" id="name"
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Enter Post Title</small>
                        </div>
                        <div class="form-group">
                            <label for="">Post</label>
                            <textarea class="form-control" required name="body" id="body" rows="3">{{$post->body}}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Blog Category <span class="text-danger">*</span></label>
                                    <select class="custom-select" required name="category" id="category">
                                        <option selected value="">Select one</option>
                                        @foreach($blog_category as $item)
                                        <option value="{{ $item->id }}" {{ ( $post->category == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script> 
<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
<script src = "https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

</script>
@endsection
