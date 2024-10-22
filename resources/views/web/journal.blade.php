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

									<div id="shop" class="shop row grid-container gutter-50" data-layout="fitRows">

									@foreach($journal as $v)
										<div class="product col-md-4 col-sm-6 col-12">
											<div class="grid-inner">
												<div class="product-image h-translate-y all-ts">
														<a href="demo-articles-single.html"><img src="{{ asset('upload/journal/'.$v->cover) }}" alt="Image 1"></a>
												</div>
												<div class="product-desc py-0">
													<div class="product-title"><h3><a href="demo-articles-single.html" class="text-dark">{{ $v->title }}</a></h3></div>
												</div>
											</div>
										</div>
										@endforeach
									</div>

									</div>
								</div><!-- .entry end -->

							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


@endsection