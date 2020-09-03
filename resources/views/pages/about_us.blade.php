@extends('layouts.app')

@section('content')

<div class="slider-section">

    @include('includes.navbar')

    <!-- head-Section -->
    <div class="page-title-section">
        <div class="container">
            <div class="pull-left page-title">
                <a href="#">
                    <h2>Nosotros</h2>
                </a>
            </div>
            <div class="pull-right breadcrumb">
                <a href="/">Home</a><span class="fa fa-arrow-circle-right sep"></span><a href="#">Nosotros</a>
            </div>
        </div>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="col-md-12 contact-info">
            <div class="inner-wrapper">
                {!! $page->body !!}
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@endsection