@extends('layouts.app')

@section('content')
<style>
#map-canvas {
  width: 100%;
  height: 400px;
}
</style>
<script>
function myFunction() {
  var x = document.getElementById("table");
    x.style.display = "table";
}
//https://www.codeply.com/go/ZrKScrDvuE/bootstrap-load-google-map-inside-modal
//https://www.codeply.com/go/fJjRC7nujr/bootstrap-4-google-map-in-modal
//https://mdbootstrap.com/docs/b4/jquery/javascript/google-maps/
var element = $(this);
var map;
function initialize(myCenter) {
  var marker = new google.maps.Marker({
    position: myCenter
  });

  var mapProp = {
    center: myCenter,
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById("map-canvas"), mapProp);
  marker.setMap(map);
};

$('#myMapModal').on('show.bs.modal', function(e) {
  var element = $(e.relatedTarget);
  var data = element.data("lat").split(',');
  var latlng = new google.maps.LatLng(data[0], data[1]);
  initialize(latlng);
  $("#lat").html(latlng.lat() + ", " +latlng.lng());
  google.maps.event.trigger(map, 'resize');
});
</script>

        <!-- Portfolio Section-->
        <section class="masthead page-section portfolio" id="portfolio" >
            <div class="container">

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               {{session()->get('message')}}
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Klienci</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <button type="button" class="btn btn-primary" onclick="myFunction()">Pokaż tabele</button>
                <a href="#" data-lat="-15,25" data-toggle="modal" data-target="#myMapModal" class="btn btn-primary">Map 1</a>
                <table class="table table-striped table-dark" id="table" STYLE="display:none">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nazwa Klienta</th>
      <th scope="col">Adres</th>
      <th scope="col">NIP</th>
      <th scope="col" colspan="2" class="text-center">Akcje</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->nip}}</td>
      <td><a href="{{route('customers.edit',['klienci'=>$customer->id])}}" class="btn btn-light">Edytuj</td>
      <td><a href="{{route('customers.destroy',['klienci'=>$customer->id])}}" class="btn btn-danger">Usuń</td>
    </tr>
    @endforeach
  </tbody>
</table>

            </div>
            <div class="modal fade" id="myMapModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100">Google Map <span id="lat" class="float-right"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div id="map-canvas" class="">
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAuTFPlEcDfHzqTWBaSzfaGPWIJpyOUTk&callback=myMap"></script>
        </section>
@endsection   