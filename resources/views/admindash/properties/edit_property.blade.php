@extends('admindash.layout.app')
@section('excss')
<style>
    input[type="images"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<?php echo $latestmapapi['0']->access_token ?>/map_load?v=1.5"></script>
<script src="https://apis.mapmyindia.com/advancedmaps/api/<?php echo $latestmapapi['0']->access_token ?>/map_sdk_plugins"></script>
<style>
  #map {
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
  }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update property</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update property</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{route('updateproperty',['id' => $property_data['0']->id])}}" method="post" enctype="multipart/form-data" role="form">@csrf
                    <div class="row m-0 p-0">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Name of the Poperty</label>
                                <input type="text" class="form-control" name="name" id="name" required
                                    aria-describedby="helpId" placeholder="Name" value="{{$property_data['0']->name}}">
                                    <input type="hidden" class="form-control" name="partner_id" id="partner_id" 
                                    aria-describedby="helpId" placeholder="Name" value="{{$property_data['0']->partner_id}}">
                                    <input type="hidden" class="form-control" name="ptoperty_id" id="ptoperty_id" 
                                    aria-describedby="helpId" placeholder="Name" value="{{$property_data['0']->ptoperty_id}}">

                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <small id="helpId" class="form-text text-muted">Name of the Poperty</small>
                            </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                            <label for="">Property Type</label>
                            <select class="custom-select" name="property_type" id="property_type">
                              <option selected value="">Select one</option>
                              <option value="PG" {{ ( $property_data['0']->property_type == 'PG') ? 'selected' : '' }}>PG</option>
                              <option value="ROOMS" {{ ( $property_data['0']->property_type == 'ROOMS') ? 'selected' : '' }}>Room</option>
                              <option value="FLAT" {{ ( $property_data['0']->property_type == 'FLAT') ? 'selected' : '' }}>Flat</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                              <div class="form-group">
                                <label for="gender">Item For (Gender) <span class="text-danger">*</span></label>
                                <select class="form-control" required name="gender" id="gender">
                                  <option value="" selected>Select One</option>
                                  <option value="male" {{ ( $property_data['0']->gender == 'male') ? 'selected' : '' }} >Male</option>
                                  <option value="female" {{ ( $property_data['0']->gender == 'female') ? 'selected' : '' }} >Female</option>
                                  <option value="unisex" {{ ( $property_data['0']->gender == 'unisex') ? 'selected' : '' }} >Unisex</option>
                                  <option value="married" {{ ( $property_data['0']->gender == 'married') ? 'selected' : '' }} >Married</option>
                                </select>
                                <small id="helpId" class="form-text text-muted">Slect the Gender you want to allow</small>
                              </div>
                          </div>
                      </div>
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" value="{{$property_data['0']->status}}" name="status" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Toggle this switch</label>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-12">
                            <div class="form-group">
                              <label for=""></label>
                               <input class="form-control" required  type="file" id="images" name="images[]" multiple />
                              <small id="fileHelpId" class="form-text text-muted">Select Photos</small>
                            </div>
                        </div> --}}
                        <div class="col-12">
                            <div class="form-group">
                              <label for="">YouTube Video Link</label>
                              <input type="text" class="form-control" value="{{$property_data['0']->youtube_link}}" name="youtube_link" id="youtube_link" aria-describedby="helpId" placeholder="youtube_link">
                              <small id="helpId" class="form-text text-muted">Past YouTube Video Link</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                              <label for="">360 Video Link</label>
                              <input type="text"
                                class="form-control" name="degree_link" id="degree_link"value="{{$property_data['0']->degree_link}}" aria-describedby="helpId" placeholder="360 Degreee Link">
                              <small id="helpId" class="form-text text-muted">Past 360 Video Link</small>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="">About the Property</label>
                            <textarea class="form-control" name="about_property" id="about_property" rows="3">{{$property_data['0']->about_property}}</textarea>
                          </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3">{{$property_data['0']->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label for="">First Price</label>
                            <input type="number"
                              class="form-control" name="price_range1" id="price_range1" value="{{$property_data['0']->price_range1}}" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Enter First Price</small>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label for="">Last Price</label>
                            <input type="number"
                              class="form-control" name="price_range2" id="price_range2" value="{{$property_data['0']->price_range2}}" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Enter Last Price</small>
                          </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">State</label>
                                <select class="custom-select" name="state" required id="state">
                                    <option selected value="">Select one</option>
                                    @foreach ($all_state as $item)
                                    <option value="{{$item->id}}" {{ ( $property_data['0']->state == $item->id) ? 'selected' : '' }}>{{$item->state_name}}</option>
                                    @endforeach
                                </select>
                                <small id="helpId" class="form-text text-muted">Select State</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="form-control-label" for="district">District</label>
                                <select class="browser-default custom-select" name="district" id="district"
                                    required></select>
                                <small id="helpId" class="form-text text-muted">Select District</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">Pincode</label>
                                <input type="text" class="form-control" name="pincode" id="pincode"
                                    aria-describedby="helpId" placeholder=""  value="{{$property_data['0']->pincode}}" required maxlength="6">
                                <small id="helpId" class="form-text text-muted">Enter Pincode</small>
                            </div>
                        </div>
                       <div class="col-12">
                        {{-- <span id="map"></div> --}}
                          <div id="map" class="col-12"></div>
                          {{-- 
                        <div class="form-group">
                            <label for="">Location</label>
                        </div> --}}
                       </div>
                    </div>
                    <input name="lat"  value="{{$property_data['0']->lat}}" type="hidden" id="lat" >
                    <input name="long" value="{{$property_data['0']->long}}" type="hidden"  id="long" >
                    <div class="col-12">
                        <button type="submt" class="btn btn-primary">Submit</button>
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
                beforeSend: function () {
                    $('#loader').removeClass('hidden')
                },
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
                },
                complete: function () {
                    $('#loader').addClass('hidden')
                },
            });
        } else {
            $("#district").empty();
        }

    });
//=========================================================
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#images").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#images");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
{{--=======================================MAP MY INDIA ===============================--}}
<script>
  /*Map Initialization*/
  var map = new MapmyIndia.Map('map', {
    center: [28.8787, 77.08888],
    zoom: 15,
    search: false
  });

  /*Place Picker plugin initialization*/
  var options = {
    map: map,
    callback: callback_method,
    search: false,
    closeBtn:true,
    topText:'Property Location',



    /*
     location:{lat:28.8787,lng:77.08888},//to open that location on map on initailization
     closeBtn:true,
     closeBtn_callback:closeBtn_callback,
     search:true,
     topText:'Location Search',
     pinImage:'pin.png', //custom pin image
     pinHeight:40
     */
  };
  var picker = new MapmyIndia.placePicker(options);

  function callback_method(data) {
    // console.log(data);
    // alert(JSON.stringify(data));
    alert('location Picked');
    document.getElementById("lat").value = data.lat;
    document.getElementById("long").value = data.lng;

  }
  /*methods
   * 
   picker.remove();
   picker.getLocation();
   picker.setLocation({lat:28.8787,lng:77.787877});
   * 
   */

  //============================map submit ajax===============
  // $('#institutemap').on('submit', function (event) {
  //   event.preventDefault();

  //   lat = $('#lat').val();
  //   long = $('#long').val();
  //   $.ajax({
  //     url: "{{ route('home') }}",
  //     type: "POST",
  //     data: {
  //       "_token": "{{ csrf_token() }}",
  //       lat: lat,long:long,
  //     },
  //     success: function (response) {
  //       console.log(response);
  //       alert('Institue Map saved Properly');
  //       // window.location.reload();
  //     },
  //   });
  // });
</script>
@endsection
