@extends('web.layout')
@section('content')
@php
	$setting = \App\Helpers\Helpers::setting();
@endphp
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>{{ __($title) }}</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Beranda</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ __($title) }}</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content" style="background-image: url('{{ asset('upload/setting/rm222batch3-mind-03.jpg') }}');
			background-size: cover;
  			background-position: center;
  			background-repeat: no-repeat; 
  			padding: 20px;">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">

						<div class="postcontent col-lg-12" data-aos="fade-left" data-aos-delay=400>

							<div class="single-post mb-0">

								<!-- Single Post
								============================================= -->
								<div class="entry clearfix">

									<!-- Entry Content
									============================================= -->
									<div class="entry-content mt-0">

									<div class="row col-mb-50" data-aos="fade-up" data-aos-delay=100 style="background-color: white;border-radius: 10px;padding-top: 25px;padding-left: 25px;;padding-right: 25px;">
						<div class="col-sm-6 col-lg-6" >
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Alamat Kami<span class="subtitle">{{ $setting->address }}</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-6">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Telepon / Whatsapp<span class="subtitle">{{ $setting->phone }}</span></h3>
								</div>
							</div>
						</div>

					</div><!-- Contact Info End -->

									</div>
								</div><!-- .entry end -->

							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


@endsection