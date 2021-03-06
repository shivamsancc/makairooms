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
                    <form action="{{route('all_blogs_store')}}" method="post" class="form"
                        enctype="multipart/form-data">@csrf
                        <div class="form-group ">
                            <label for="">Post Title <span class="text-danger">*</span></label>
                            <input type="text" required class="form-control" name="name" id="name"
                                aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Enter Post Title</small>
                        </div>
                        <div class="form-group">
                            <label for="">Post</label>
                            <textarea class="form-control" name="body" id="body" rows="3" required></textarea>

                        </div>
                        @if ($errors->has('body'))
                             <span class="text-danger">{{ $errors->first('body') }}</span>
                        @endif

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Featured Image</label>
                                    <input type="file" required class="form-control-file" name="f_image" id="f_image"
                                        placeholder="" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">Select Featured Image</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Blog Category <span class="text-danger">*</span></label>
                                    <select class="custom-select" required name="category" id="category">
                                        <option selected value="">Select one</option>
                                        @foreach($blog_category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tags : <span class="text-danger">*</span></label>
                            <br>
                            <input type="text" required data-role="tagsinput" name="tags" class="btn btn-primary">
                            <br>
                            @if ($errors->has('tags'))
                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                            @endif
                        </div>
                        <button onclick="myFunction()" type="submit" class="btn btn-primary">Submit</button>
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
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });

    function myFunction() {
        // alert('home');
        var x = document.getElementById("body").required;
        document.getElementById("demo").innerHTML = x;
    }

</script>
@endsection
