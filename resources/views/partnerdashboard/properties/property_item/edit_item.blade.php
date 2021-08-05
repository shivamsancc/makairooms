@extends('partnerdashboard.layout.app')
@section('excss')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Propety Item</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Propety Item</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{route('updatepropertyitem',['id' => $property_data['0']->id])}}" enctype="multipart/form-data" class="form" role="form" method="post">@csrf
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Select Partner <span class="text-danger">*</span></label>
                                <select class="form-control" required name="partner_id" id="partner_id">
                                    <option selected value="">Select one</option>
                                    @foreach ($all_partners as $item)
                                        <option value="{{$item->id}}" {{ ( $property_data['0']->state == $item->partner_id) ? 'selected' : '' }}>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Select Property<span class="text-danger">*</span></label>
                                <select class="browser-default custom-select" name="ptoperty_id" id="ptoperty_id"
                                    required></select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Property Type<span class="text-danger">*</span></label>
                                <select class="custom-select" required name="property_type" id="property_type">
                                    <option selected value=" ">Select one</option>
                                    <option value="PG" {{ ( $property_data['0']->property_type == 'PG') ? 'selected' : '' }}>PG</option>
                              <option value="ROOMS" {{ ( $property_data['0']->property_type == 'ROOMS') ? 'selected' : '' }}>Room</option>
                              <option value="FLAT" {{ ( $property_data['0']->property_type == 'FLAT') ? 'selected' : '' }}>Flat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Item name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" required name="item_name" value="{{ $property_data['0']->item_name}}" id="item_name"
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Enter Product Name</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Item For<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" required name="item_for" value="{{ $property_data['0']->item_for}}" id="item_for"
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Enter the Number of Person to allow in
                                    Property item</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" value="1" name="status"
                                        id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Price<span class="text-danger">*</span></label>
                                <input type="number" required class="form-control" value="{{ $property_data['0']->item_price}}" name="item_price" id="item_price"
                                    aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted">Enter Property Price</small>
                            </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <label for="">Images</label>
                                <input type="file" class="form-control-file" name="images[]" multiple="multiple" id="imges" placeholder="****"
                                    aria-describedby="fileHelpId">
                                <small id="fileHelpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Select Features</label>
                                <select class="custom-select" id="item_feature" name="item_feature[]" multiple="multiple">
                                    @foreach ($all_features as $item)
                                      <option value="{{$item->id}}" value="{{ $property_data['0']->item_feature}}"><i class="{{$item->f_icon}} fa-2x text-primary">{{$item->f_name}}</i></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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
    $('#partner_id').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type: "GET",
                url: "{{ route('ajaxpropertyapi') }}?state_id=" + stateID,
                beforeSend: function () {
                    $('#loader').removeClass('hidden')
                },
                success: function (res) {
                    if (res) {
                        $("#ptoperty_id").empty();
                        $("#ptoperty_id").append(
                            '<option value="" selected="selected">Select </option>');
                        $.each(res, function (key, value) {
                            $("#ptoperty_id").append('<option value="' + key + '">' +
                                value +
                                '</option>');
                        });

                    } else {
                        $("#ptoperty_id").empty();
                    }
                },
                complete: function () {
                    $('#loader').addClass('hidden')
                },
            });
        } else {
            $("#ptoperty_id").empty();
        }

    });

</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function () {
        $('#item_feature').select2();
    });

</script>
@endsection
