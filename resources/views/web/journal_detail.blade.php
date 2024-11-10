@extends('web.layout')
@section('content')
@php
	$setting = \App\Helpers\Helpers::setting();
	$news = \App\Helpers\Helpers::news();
	$textbook = \App\Helpers\Helpers::textbook();
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

					<div class="row clearfix">
						<div class="col-lg-8">

							<div class="postcontent col-lg-12" data-animate="fadeInUp" data-delay="200">

								<div class="single-post mb-0">

									<!-- Single Post
									============================================= -->
									<div class="entry clearfix">

										<!-- Entry Content
										============================================= -->
										<div class="entry-content mt-0">

										<div id="shop" class="shop row grid-container gutter-50" data-layout="fitRows">

											<div class="product col-md-4 col-sm-6 col-12">
												<div class="grid-inner">
													<div class="product-image h-translate-y all-ts">
														<a href="demo-articles-single.html"><img src="{{ asset('upload/journal/'.$journal->cover) }}" alt="Image 1"></a>
													</div>
												</div>
											</div>
											
											<div class="product col-md-4 col-sm-6 col-12">

												<b>Judul : </b><br>
												{{ $journal->title }} <br><br>

												<b>Penulis : </b><br>
												{{ $journal->author }} <br><br>
												
												<b>ISSN : </b><br>
												{{ $journal->issn }} <br><br>
												
												<b>DOI : </b><br>
												{{ $journal->doi }} <br><br>
												
												<b>Tanggal Publikasi : </b><br>
												{{ date('d M Y', strtotime($journal->publication_date)) }} <br><br>
												
											</div>

											<div class="product col-md-12 col-sm-6 col-12">
											<b>Deskripsi : </b><br>
											{!! $journal->desc !!}
											</div>
										</div>

										</div>
									</div><!-- .entry end -->

								</div>

							</div>

						</div>
						
						<div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
							<div class="sticky-sidebar">
								
								<div class="widget clearfix">
									<h4 class="mb-2 ls1 text-uppercase fw-bold" data-animate="fadeInUp" data-delay="100">Berita Terbaru</h4>
									<div class="line line-xs line-sports" data-animate="fadeInUp" data-delay="300"></div>

									<div class="posts-sm row col-mb-30" data-animate="fadeInUp" data-delay="200">
										
										@foreach($news as $i => $v)
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="{{ url('page-news-detail?q='.$v->slug) }}"><img src="{{ asset('upload/news/'.$v->cover) }}" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="{{ url('page-news-detail?q='.$v->slug) }}">{{ $v->title }}</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>By</span> <a href="#">{{ $v->user->name }}</a></li>
															<li><i class="icon-time"></i><a href="#">{{ date('d M Y', strtotime($v->created_at)) }}</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										@endforeach

									</div>

								</div>
								
								<div class="widget clearfix">
									<h4 class="mb-2 ls1 text-uppercase fw-bold" data-animate="fadeInUp" data-delay="100">Buku Terbaru</h4>
									<div class="line line-xs line-food" data-animate="fadeInUp" data-delay="300"></div>

									<div class="posts-sm row col-mb-30" data-animate="fadeInUp" data-delay="200">
										
										@foreach($textbook as $i => $v)
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="{{ url('page-catalog-1/'.$v->id) }}"><img src="{{ asset('upload/textbook/'.$v->cover) }}" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="{{ url('page-catalog-1/'.$v->id) }}">{{ $v->title }}</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>By</span> <a href="#">{{ $v->author }}</a></li>
															<li><i class="icon-time"></i><a href="#">{{ date('d M Y', strtotime($v->publication_date)) }}</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										@endforeach

									</div>

								</div>
								
							</div>
						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->


@endsection