@extends('layouts.app')

@section('content')

<div class="slider-section">

    @include('includes.navbar')

    <!-- head-Section -->
    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                    <h2>Inmuebles</h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="/">Home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Inmuebles</a>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">

        <div class="row listings-items-wrapper">
            @foreach ($properties as $property)
            <div class="col-md-4 listing-single-item">
                <div class="item-inner">
                    <div class="image-wrapper">
                        <img src="{{ asset("storage/$property->image") }}" alt="gallery">
                        <!--a href="#" class='fa fa-home property-type-icon'></a-->
                        <a class='featured'><i class='fa fa-tag'></i>{{ $property->condition }}</a>
                    </div>
                    <div class="desc-box">
                        <h4><a href="{{ route('property_show', $property->slug) }}">{{ $property->name }}</a></h4>
                        <ul class="slide-item-features item-features">
                            <li><span class="fa fa-location-arrow"></span>{{ $property->location }}</li>
                            <li><span class="fa fa-arrows"></span>{{ $property->area }}m&sup2;</li>
                            <li><span class="fa fa-home"></span>{{ $property->type }}</li>
                        </ul>
                        <div class="buttons-wrapper">
                            <a class="yellow-btn">
                                <i class="fa fa-dollar" aria-hidden="true"></i>{{ number_format($property->price, 2) }}
                            </a>
                            <a href="{{ route('property_show', $property->slug) }}" class="gray-btn">
                                <span class="fa fa-file-text-o"></span>Ver detalle
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{ $properties->links() }}

    </div>
</div>

@endsection