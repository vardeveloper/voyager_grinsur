@extends('layouts.app')

@section('content')

<div class="slider-section">

    @include('includes.navbar')

    <!-- head-Section -->
    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                    <h2>Micky Express</h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="/">Home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Micky Express</a>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="col-md-12 contact-info">
            <div class="inner-wrapper">
                {!! $page->body !!}
                <div class="info-wrapper"></div>
                <div class="featured-image">
                    <img src="{{ Voyager::image($page->image) }}" alt="blog" style="margin: 0 auto; display: block">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@endsection