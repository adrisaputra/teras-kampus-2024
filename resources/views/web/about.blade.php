@extends('web.layout')
@section('content')
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

									{!! $about_us->text !!}

									</div>
								</div><!-- .entry end -->

							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


@endsection