@extends('layouts.app')

@section('content')

<div class="slider-section">

    @include('includes.navbar')

    <!-- head-Section -->
    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                    <h2>Contacto</h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="/">Home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Contacto</a>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="col-md-12 map-wrapper">
            <div class="inner-wrapper">
                <div id="map"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 contact-info">
            <div class="inner-wrapper">
                {!! $page->body !!}
                <div class="info-wrapper">
                    <span><i class="fa fa-mobile"></i>994 019 102</span>
                    <span><i class="fa fa-mobile"></i>956 480 123</span>
                    <span><i class="fa fa-envelope"></i>grupoinmobiliariodelsur@hotmail.com</span>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 contact-form-wrapper">
            <div class="inner-wrapper">
                <h4 class="box-title">Contáctenos</h4>
                <form class="contact-form" method="POST" id="formContact">
                    <div class="contact-form-left">
                        <span><i class='fa fa-user'></i></span>
                        <input type="text" name='name' placeholder='Nombre Completo' id='name' required="">
                        <span><i class='fa fa-envelope-o'></i></span>
                        <input type="text" name='email' placeholder='Correo Electrónico' id='email' required="">
                        <span><i class='fa fa-link'></i></span>
                        <input type="text" name='phone' placeholder='Teléfono' id='phone' required="">
                    </div>
                    <div class="contact-form-right">
                        <textarea id="message" name='message' placeholder='Mensaje' required=""></textarea>
                        <input type="submit" value='Enviar Mensaje' id='submit_btn'>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7z3qSfW7_1ArWHGs69jHLbLw-jOOGwuk"></script>
<script>
	$(document).ready(function() {
		//Google Map
		var map;
	    var marker;
	    var MyMarker;
		function initialize() {
		    var map_canvas = document.getElementById('map');
		    var myLatlng = new google.maps.LatLng(-12.0661184, -77.0428248);
		    var mapOptions = {
		        center: myLatlng,
		        zoom: 17,
		        scrollwheel: false,
		        styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    };
		    map = new google.maps.Map(map_canvas, mapOptions);
		    TestMarker();
		}
		// Function for adding a marker to the page.
		function addMarker(location) {
		    marker = new google.maps.Marker({
		        position: location,
		        icon: 'html/img/28_marker.png',
		        map: map
		    });
		}
		// Testing the addMarker function
		function TestMarker() {
		       MyMarker = new google.maps.LatLng(-12.0661184, -77.0428248);
		       addMarker(MyMarker);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	});
</script>
@endpush