@extends('admindash.layout.app')
@section('excss')
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Ad</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Partner</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{route('adsmanager.store')}}" enctype="multipart/form-data" method="post">@csrf
                    <div class="row m-0 p-0">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                    aria-describedby="helpId" placeholder="Name">
                                <small id="helpId" class="form-text text-muted">Enter Ad Name</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <img id="imagecover_preview_container" src="https://via.placeholder.com/1200x150?text=makairooms.com"alt="preview image" style="max-height: 150px;" class="img-fluid">
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                              <label for="">Upload Design</label>
                              <input type="file" class="form-control"required name="ad_design" id="ad_design" aria-describedby="fileHelpId">
                              <small id="fileHelpId" class="form-text text-muted text-danger ">ONLY Image Formats are allowd GIF/JPED/PNG</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Start Date:</label>
                                <input type="date" class="form-control" name="start_date" id="start_date"
                                    aria-describedby="helpId" placeholder="example@example.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">End Date:</label>
                                <input type="date" class="form-control" name="end_date" id="end_date"
                                    aria-describedby="helpId" placeholder="example@example.com">
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
                        <div class="col-6">
                            <div class="form-group">
                              <label for="">Place</label>
                              <input type="text" class="form-control" name="place" id="place" aria-describedby="helpId" placeholder="">
                              <small id="helpId" class="form-text text-muted">ex:home</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">State</label>
                                <select class="custom-select" name="state" required id="state">
                                    <option selected value="">Select one</option>
                                    @foreach ($all_state as $item)
                                    <option value="{{$item->id}}">{{$item->state_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label" for="district">District</label>
                                <select class="browser-default custom-select" name="district" id="district"
                                    required></select>
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
    $('#ad_design').change(function () {

    let reader = new FileReader();

    reader.onload = (e) => {

    $('#imagecover_preview_container').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);

    });
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
