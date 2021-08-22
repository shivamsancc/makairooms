@extends('frontend.listing.layout.app')
@section('title','book now')
@section('excss')
{!! NoCaptcha::renderJs() !!}
@endsection
@section('content')
<div class="container-fluid row pt-30">
    <div class="col-4"></div>
    <div class="col-4">
        <form action="{{ url('payment') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" required name="name" id="name" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="mobile_no">Mobile</label>
                <input type="number" class="form-control" required name="mobile_no" id="mobile_no" aria-describedby="helpId"
                    placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" required name="email" id="email" aria-describedby="helpId"
                    placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" required name="address" id="address" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="">Amount</label>
              <input type="text" class="form-control" name="amount" id="amount" value="120" readonly>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success ">Pay to PatTM</button>
            </div>
        </form>
    </div>
    <div class="col-4"></div>
</div>
@endsection
@section('extrajs')
@endsection
