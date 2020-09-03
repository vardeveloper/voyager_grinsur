@extends('layouts.app')

@section('content')

<div class="slider-section">

    @include('includes.navbar')

    <!-- head-Section -->
    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                    <h2>Inmueble</h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="/">Home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Inmueble</a>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="row">

            <div class="col-md-8 page-content">
                <div class="inner-wrapper">
                    <div class="property-images-slider">
                        <div id="details-slider" class="flexslider">
                            <!--a class="fa fa-home property-type-icon"></a-->
                            <a class="yellow-btn"><i class="fa fa-dollar" aria-hidden="true"></i>{{ number_format($property->price, 2) }}</a>
                            <a class="status">{{ $property->condition }}</a>
                            <ul class="slides">
                                @foreach ($property->imagenes as $image)
                                <li>
                                    <div class="image-wrapper">
                                        <img src="{{ Voyager::image($image) }}" alt="">
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--div id="details-carousel" class="flexslider">
                            <ul class="slides">
                                <li><img src=""/></li>
                            </ul>
                        </div-->
                    </div>
                    <div class="property-desc">
                        <h2>{{ $property->name }}</h2>
                        <ul class="slide-item-features item-features">
                            <li><span class="fa fa-location-arrow"></span>{{ $property->location }}</li>
                            <li><span class="fa fa-arrows"></span>{{ $property->area }}m&sup2;</li>
                            <li><span class="fa fa-home"></span>{{ $property->type }}</li>
                        </ul>
                        {!! $property->description !!}
                        <!--div class="additional-features">
                            <h3>Additional Features</h3>
                            <ul class="features">
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Ceiling Fan</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Curtains/Drapes</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Oven/Range</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Chandelier(s)</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Freezer</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Refrigerator</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Convection Oven</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Refrigerator</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Light Fixtures</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Screens</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Air Conditioning</a></li>
                                <li class="single-feature"><a href="#"><i class="fa fa-check-circle"></i>Hotwater</a></li>
                            </ul>
                        </div-->
                        <div class="property-location">
                            {!! $property->video !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 blog-sidebar">

                <div class="sidebar-widget author-profile">
                    <!--h4 class="widget-title">Contacto</h4-->
                    <div class="image-box">
                        <img src="{{ asset('html/img/logo.png') }}" alt="">
                    </div>
                    <div class="desc-box">
                        <h4>Contacto</h4>
                        <p class="person-fax">
                            <i class="fa fa-mobile"></i> 994 019 102
                        </p>
                        <p class="person-number">
                            <i class="fa fa-mobile"></i> 956 480 123
                        </p>
                        <p class="person-email">
                            <i class="fa fa-envelope"></i> grupoinmobiliariodelsur@hotmail.com
                        </p>
                        <!--a href="#" class='gray-btn'>view full profile</a-->
                    </div>
                </div>

                <!--div class="sidebar-widget similar-listings-widget">
                    <h4 class="widget-title">similar listings</h4>
                    <ul class="similar-listings">
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <img src="img/blog/25_blog-thumb_1.png" alt="thumbnail">
                            </div>
                            <h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - $7,000</a></h5>
                        </li>
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <img src="img/blog/26_blog-thumb_2.png" alt="thumbnail">
                            </div>
                            <h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - $7,000</a></h5>
                        </li>
                        <li class="tab-content-item">
                            <div class="pull-left thumb">
                                <img src="img/blog/27_blog-thumb_3.png" alt="thumbnail">
                            </div>
                            <h5><a href="#">Envato’s Most Wanted: Courses & Learning Themes - $7,000</a></h5>
                        </li>
                    </ul>
                </div-->

                <!--div class="sidebar-widget text-widget">
                    <h4 class="widget-title">Text Widget</h4>
                    <p class='first-paragraph'>
                        This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                        sollicitudin, lorem quis bibendum
                    </p>
                    <p>
                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                    </p>
                </div-->

            </div>

        </div>
    </div>
</div>

@endsection