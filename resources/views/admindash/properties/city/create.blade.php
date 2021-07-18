@extends('admindash.layout.app')
@section('title','Add City')
@section('excss')
@endsection
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add City</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Add City</h6>

                </div>
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary float-right">
                        <a href="{{route('add_admin_city')}}" class="btn btn-outline-primary"><i
                                class="fas fa-plus-square"></i> Add City</a></h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('store_admin_city')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label for="">City Name</label>
                    <input type="text" class="form-control" name="city_name" required id="city_name"
                        aria-describedby="helpId" placeholder="Jaipur">
                    <small id="helpId" class="form-text text-muted">Enter City Name</small>
                </div>
                <div class="form-group">
                    <label for="">About the City</label>
                    <textarea class="form-control" name="city_about" id="city_about" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input type="file" class="form-control-file" name="city_img" id="city_img" required placeholder=""
                        aria-describedby="fileHelpId">
                    <small id="fileHelpId" class="form-text text-muted">Help text</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('exjs')
@endsection
