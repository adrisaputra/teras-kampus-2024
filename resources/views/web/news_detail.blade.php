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

							
							<div class="row col-mb-50 mb-0 infinity-wrapper" data-animate="fadeInUp" data-delay="200">

								<div class="col-md-12">
									<!-- Post Article -->
									<div class="posts-md">
										<div class="entry">
											<div class="entry-image">
												<a href="#"><img src="{{ asset('upload/news/'.$news2->cover) }}" alt="Image 3"></a>
												<div class="entry-categories"><a href="{{ url('page-news-detail?q='.$news2->slug) }}" target="_blank" class="bg-fashion">Berita</a></div>
											</div>
											<div class="entry-title title-sm nott">
												<h3 class="mb-2"><a href="#">{{ $news2->title }}</a></h3>
											</div>
											<div class="entry-meta">
												<ul>
													<li><span>By</span> <a href="#">{{ $news2->user->name }}</a></li>
													<li><i class="icon-time"></i><a href="#">{{ date('d M Y', strtotime($news2->created_at)) }}</a></li>
													<li><i class="icon-eye"></i><a href="#">{{ $news2->count_view }} Views</a></li>
												</ul>
											</div>
											<div class="entry-content">
											{!! $news2->text !!}
											</div>
										</div>
									</div>
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