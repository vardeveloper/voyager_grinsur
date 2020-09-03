@extends('layouts.app')

@section('content')

<div class="slider-section">
	
	@include('includes.navbar')

	<!-- Slider-Section -->
	<div class="main-flexslider">
		<ul class="slides">
			@foreach ($banners as $banner)
			<li class="slides"><img src="{{ Voyager::image($banner->thumbnail('cropped')) }}" alt=""></li>
			@endforeach
		</ul>
	</div>
</div>

<div class="content-section">
    <div class="container">


		<!-- Recent-Listings-Section -->
		<div class="recent-listings">
			<div class="container">
				<div class="title-box">
					<h3>Últimas propiedades</h3>
					<div class="bordered">
					</div>
				</div>
				<div class="row listings-items-wrapper">
					@foreach ($productos as $product)
					<div class="col-md-4 listing-single-item">
						<div class="item-inner">
							<div class="image-wrapper">
								<img src="{{ asset("storage/$product[small]") }}" alt="gallery">
								<!--a href="#" class='fa fa-home property-type-icon'></a-->
								<a class='featured'><i class='fa fa-tag'></i>{{ $product['condition'] }}</a>
							</div>
							<div class="desc-box">
								<h4><a href="{{ route('property_show', $product['slug']) }}">{{ $product['name'] }}</a></h4>
								<ul class="slide-item-features item-features">
									<li><span class="fa fa-location-arrow"></span>{{ $product['location'] }}</li>
									<li><span class="fa fa-arrows"></span>{{ $product['area'] }}m&sup2;</li>
									<li><span class="fa fa-home"></span>{{ $product['type'] }}</li>
								</ul>
								<div class="buttons-wrapper">
									<a class="yellow-btn">
										<i class="fa fa-dollar" aria-hidden="true"></i>{{ number_format($product['price'], 2) }}
									</a>
									<a href="{{ route('property_show', $product['slug']) }}" class="gray-btn">
										<span class="fa fa-file-text-o"></span>Ver detalle
									</a>
								</div>
								<div class="clearfix">
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- Agents-Section -->
		<div class="agents-section">
			<div class="container">
				<div class="title-box">
					<h3>Agentes</h3>
					<div class="bordered">
					</div>
				</div>
				<div class="owl-carousel agents-slider">
					<div class="single-agent">
						<div class="image-box">
							<img src="{{ asset('html/img/agents/miguel.jpg') }}" alt="agent">
							<!--ul class="social-icons">
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-pinterest"></a></li>
								<li><a href="#" class="fa fa-dribbble"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
							</ul-->
						</div>
						<div class="desc-box">
							<h4>Miguel Olortegui Costa</h4>
							<p class="person-number">
								<i class="fa fa-mobile"></i> 994 019 102
							</p>
							<p class="person-fax">
								<i class="fa fa-mobile"></i> 956 480 123
							</p>
							<p class="person-email">
								grupoinmobiliariodelsur@hotmail.com
							</p>
							<!--a href="#" class='gray-btn'>view full profile</a-->
						</div>
					</div>
					<div class="single-agent">
						<div class="image-box">
							<img src="{{ asset('html/img/agents/brenda_2.jpg') }}" alt="agent">
							<!--ul class="social-icons">
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-pinterest"></a></li>
								<li><a href="#" class="fa fa-dribbble"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
							</ul-->
						</div>
						<div class="desc-box">
							<h4>Brenda Olortegui Quevedo </h4>
							<p class="person-number">
								<i class="fa fa-mobile"></i> 922 333 357
							</p>
							<p class="person-email">
								grupoinmobsur_brenda@hotmail.com
							</p>
							<!--a href="#" class='gray-btn'>view full profile</a-->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Services-Section -->
		<div class="services-section">
			<div class="container">
				<div class="title-box">
					<h3>Nuestros Servicios</h3>
					<div class="bordered">
					</div>
				</div>
				<div class="services-wrapper">
					<div class="col-md-3 single-service">
						<div class="bordered top-bordered"></div>
						<h4>Asesoría</h4>
						<!--p>fully customizable</p-->
						<div class="fa fa-briefcase icon-service"></div>
						<div class="bordered"></div>
						<!--a href="#" class='readmore'>+ read more</a-->
					</div>
					<div class="col-md-3 single-service">
						<div class="bordered top-bordered"></div>
						<h4>Compra</h4>
						<!--p>clean & well comented code</p-->
						<div class="fa fa-money icon-service"></div>
						<div class="bordered"></div>
						<!--a href="#" class='readmore'>+ read more</a-->
					</div>
					<div class="col-md-3 single-service">
						<div class="bordered top-bordered"></div>
						<h4>Venta</h4>
						<!--p>optimized for search engines</p-->
						<div class="fa fa-handshake-o icon-service"></div>
						<div class="bordered"></div>
						<!--a href="#" class='readmore'>+ read more</a-->
					</div>
					<div class="col-md-3 single-service">
						<div class="bordered top-bordered"></div>
						<h4>Alquiler</h4>
						<!--p>front-end services</p-->
						<div class="fa fa-key icon-service"></div>
						<div class="bordered"></div>
						<!--a href="#" class='readmore'>+ read more</a-->
					</div>
				</div>
			</div>
		</div>


	</div>
</div>

@endsection