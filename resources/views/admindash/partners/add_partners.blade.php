@extends('admindash.layout.app')
@section('excss')
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Partner</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Partner</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{route('addpartnerspost')}}" method="post">@csrf
                    <div class="row m-0 p-0">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                    aria-describedby="helpId" placeholder="Name">
                                    @error('name')
                                         <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                <small id="helpId" class="form-text text-muted">Enter Partner</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" required
                                    aria-describedby="helpId" placeholder="example@example.com">
                                    @error('email')
                                     <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <small id="helpId" class="form-text text-muted">Enter Partner's Email</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Phone No.</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    aria-describedby="helpId" placeholder="+91-1234567890">
                                <small id="helpId" class="form-text text-muted">Enter Partner's Phone Number</small>
                                @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" value="1" name="status"
                                        id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch
                                        element</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">State</label>
                                <select class="custom-select"  name="state" required id="state">
                                    <option selected value="">Select one</option>
                                    @foreach ($all_state as $item)
                                    <option value="{{$item->id}}">{{$item->state_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="form-control-label" for="district">District</label>
                                <select class="browser-default custom-select" name="district" id="district"
                                    required></select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Pincode</label>
                                <input type="text" class="form-control" name="pincode" id="pincode"
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Enter Pincode</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" required class="form-control" name="password" id="password"
                                    placeholder="******************">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Conform Password</label>
                                <input type="password" required class="form-control" name="password_conform"
                                    id="password_conform" placeholder="******************">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('exjs')
<script type="text/javascript">
    //======================================
    $('#state').on('change', function () {
        var stateID = $(this).val();
        // console.log(stateID);

        if (stateID) {
            $.ajax({
                type: "GET",
                url: "{{ route('ajaxdistrictapi') }}?state_id=" + stateID,
                success: function (res) {
                    if (res) {
                        $("#district").empty();
                        $("#district").append(
                            '<option value="" selected="selected">Select </option>');
                        $.each(res, function (key, value) {
                            $("#district").append('<option value="' + key + '">' +
                                value +
                                '</option>');
                        });

                    } else {
                        $("#district").empty();
                    }
                }
            });
        } else {
            $("#district").empty();
        }

    });

</script>
@endsection
