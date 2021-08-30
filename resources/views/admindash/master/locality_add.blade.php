@extends('admindash.layout.app')
@section('excss')
@include('admindash.layout.template.table_header')
<script src="https://apis.mapmyindia.com/advancedmaps/v1/<?php echo $data['latestmapapi']->access_token ?>/map_load?v=1.5"></script>
<script src="https://apis.mapmyindia.com/advancedmaps/api/<?php echo $data['latestmapapi']->access_token ?>/map_sdk_plugins"></script>
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
        <h1 class="h3 mb-0 text-gray-800">Locality</h1>
    </div>
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row ">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Locality</h6>
                </div>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-12">
                <div class="card-body">
                    <form action="{{route('all_admin_locality_store')}}"  name="propertyform"  role="form" method="post">@csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Name of the Locality</label>
                                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                                        placeholder="">
                                    <small id="helpId" class="form-text text-muted">Spaze It Park Gurgaon</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Addresh</label>
                                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">State</label>
                                    <select class="custom-select" name="state" required id="state">
                                        <option selected value="">Select one</option>
                                        @foreach ($data['all_state'] as $item)
                                            <option value="{{$item->id}}">{{$item->state_name}}</option>
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
                                        aria-describedby="helpId" placeholder="" required maxlength="6">
                                    <small id="helpId" class="form-text text-muted">Enter Pincode</small>
                                </div>
                            </div>
                            <div class="col-12" >
                                  <div id="map" class="col-12"></div><br>
                            </div>
                            <input name="lat"  type="hidden" id="lat" >
                            <input name="long" type="hidden"  id="long">
                            <div class="col-12">
                                <button type="submit" id="newspopButton" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('exjs')
<script type="text/javascript" >
    //=========================News Letter submission==================================
    $('#newspopButton').click(function (e) {
          var mailformat =
              /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
              let x = document.forms["propertyform"]["lat"].value;
              let y = document.forms["propertyform"]["long"].value;
          if (x == '' && y=='') {
              alert("Property Locaiton Is not Selected");
              return false;
          }
      });
  </script>
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
        search: true
      });
    
      /*Place Picker plugin initialization*/
      var options = {
        map: map,
        callback: callback_method,
        search: true,
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
