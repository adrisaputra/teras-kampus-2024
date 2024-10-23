@extends('web.layout')
@section('content')

@php
$setting = \App\Helpers\Helpers::setting();
@endphp


		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap h-auto">

		<div class="slider-inner">
				<!--
				#################################
					- THEMEPUNCH BANNER -
				#################################
				-->
				<div id="rev_slider_k_fullwidth_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
					<!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
					<div id="rev_slider_k_fullwidth" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
						<ul>
							<!-- SLIDE  -->
							@foreach($slider as $v)
							<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('upload/slider/'.$v->image) }}" data-delay="7000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="{{ asset('upload/slider/'.$v->image) }}"  alt="kenburns6" >
								<!-- LAYERS -->
							</li>
							@endforeach				
						</ul>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row clearfix">

						<!-- Posts Area
						============================================= -->
						<div class="col-lg-8">

							<!-- Tab Menu
							============================================= -->
							<nav class="navbar navbar-expand-lg navbar-light p-0">
								<h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Berita Terbaru</h4>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
									<i class="icon-line-menu"></i>
								</button>

							</nav>

							<div class="line line-xs line-dark"></div>

							<!-- Tab Content
							============================================= -->
							<div class="tab-content" id="nav-tabContent">
								<!-- Tab Content 1
								============================================= -->
								<div class="tab-pane fade show active" id="nav-outdoor" role="tabpanel" aria-labelledby="nav-outdoor-tab">
									<div class="row col-mb-30 mb-0">
									@foreach($news as $i => $v)
										@if($i==0)
										<div class="col-lg-6">
											<!-- Post Article -->
											<div class="posts-md">
												<div class="entry">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="{{ asset('upload/news/'.$v->cover) }}" alt="Image 3"></a>
														<div class="entry-categories"><a href="demo-news-category.html" class="bg-travel">Berita</a></div>
													</div>
													<div class="entry-title nott">
														<h3 class="mb-2"><a href="demo-news-single.html">{{ $v->title }}</a></h3>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">{{ $v->user->name }}</a></li>
															<li><i class="icon-time"></i><a href="#">{{ date('d M Y', strtotime($v->created_at)) }}</a></li>
														</ul>
													</div>
													<div class="entry-content clearfix">
														<p>{!! Str::limit(strip_tags($v->text), 300, ' ...') !!}</p>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach
										<div class="col-lg-6">

											<div class="posts-sm row col-mb-30">
												@foreach($news as $i => $v)
												@if($i>0)
												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('upload/news/'.$v->cover) }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">{{ $v->title }}</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">{{ $v->user->name }}</a></li>
																	<li><i class="icon-time"></i><a href="#">{{ date('d M Y', strtotime($v->created_at)) }}</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												@endif
												@endforeach

											</div>

										</div>
									</div>
								</div>
							</div><!-- Tab End -->

						</div>

						<!-- Top Sidebar Area
						============================================= -->
						<div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
							<div class="sticky-sidebar">
								
								<div class="widget clearfix">
									<h4 class="mb-2 ls1 text-uppercase fw-bold">Buku Terbaru</h4>
									<div class="line line-xs line-home"></div>

									<div class="posts-sm row col-mb-30">
										
										@foreach($textbook as $i => $v)
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="{{ asset('upload/textbook/'.$v->cover) }}" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="demo-news-single.html">{{ $v->title }}</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">{{ $v->author }}</a></li>
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
						</div> <!-- Sidebar End -->
					</div>
				</div> <!-- Container End -->

			</div>
		</section><!-- #content end -->

		<section id="content">
			<div class="content-wrap pb-0 clearfix">
			<div class="section m-0 section-scroller" style="padding: 100px 0">
					<div class="container center">
						<div class="heading-block border-bottom-0 mx-auto" style="max-width: 820px">
							<h2 class="nott ls0 fw-normal">Katalog Buku</h2>
							<a href="demo-articles-books.html" class="button button-large nott px-5 ms-0 mt-4 clearfix">View All</a>
						</div>
					</div>
					<div class="swiper_wrapper customjs h-auto" style="padding: 50px 0 80px;">
						<div class="swiper-container swiper-parent swiper-scroller">
							<div class="swiper-wrapper h-auto">

								@foreach($catalog1 as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/textbook/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-catalog-1/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								@foreach($catalog2 as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/monograph/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-catalog-2/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								@foreach($catalog3 as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/reference/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-catalog-3/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								@foreach($catalog4 as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/novel/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-catalog-4/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

							</div>
							<!-- Add Scroll Bar -->
							<div class="swiper-scrollbar"></div>
							<div class="slider-arrow-left slider-arrow-left-1"><i class="icon-angle-left"></i></div>
							<div class="slider-arrow-right slider-arrow-right-1"><i class="icon-angle-right"></i></div>
						</div>

					</div>
				</div>

		
			</div>
		</section><!-- #content end -->

		<section id="content">
			<div class="pb-0 clearfix">
			<div class="section m-0 section-scroller" style="background-color: unset;padding: 100px 0">
					<div class="container center">
						<div class="heading-block border-bottom-0 mx-auto" style="max-width: 820px">
							<h2 class="nott ls0 fw-normal">Jurnal dan Prosiding</h2>
							<a href="demo-articles-books.html" class="button button-large nott px-5 ms-0 mt-4 clearfix">View All</a>
						</div>
					</div>
					<div class="swiper_wrapper customjs h-auto" style="padding: 50px 0 80px;">
						<div class="swiper-container swiper-parent swiper-scroller">
							<div class="swiper-wrapper h-auto">

							
								@foreach($journal as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/journal/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-journal-detail/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

								@foreach($proceeding as $v)
								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('upload/proceeding/'.$v->cover) }}" alt="Image">
											
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">{{ $v->title }}</a></h4>
													<p class="mb-3 d-none d-sm-block">{!! Str::limit(strip_tags($v->desc), 300, ' ...') !!}</p>
													<a href="{{ url('page-proceeding-detail/'.$v->id) }}" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix">Detail</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach

							</div>
							<!-- Add Scroll Bar -->
							<div class="swiper-scrollbar"></div>
							<div class="slider-arrow-left slider-arrow-left-1"><i class="icon-angle-left"></i></div>
							<div class="slider-arrow-right slider-arrow-right-1"><i class="icon-angle-right"></i></div>
						</div>

					</div>
				</div>

		
			</div>
		</section><!-- #content end -->

		<section id="content">
			
			<div class="section mb-0">
				<div class="container clearfix">
					<div class="heading-block center">
						<h3>Supported <span>by</span></h3>
					</div>
					<div class="pb-0 clearfix">
						<div id="oc-clients" class="section bg-transparent mt-0 owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
							@foreach($supported as $v)
								<div class="oc-item"><a href="#"><img src="{{ asset('upload/supported/' . $v->image) }}" alt="Clients"></a></div>
							@endforeach
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->



@endsection