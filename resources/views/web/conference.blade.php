@extends('web.layout')
@section('content')
@php
	$setting = \App\Helpers\Helpers::setting();
	$news = \App\Helpers\Helpers::news();
	$textbook = \App\Helpers\Helpers::textbook();
@endphp

<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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

							<div class="postcontent col-lg-12"  data-animate="fadeInUp" data-delay="200">

								<div class="single-post mb-0">

									<div class="entry clearfix">
										<div class="table-responsive">
											<table class="table table-bordered table-hover mb-12" id="conference-table">
												<thead>
													<tr>
														<th style="width: 10%" >Number</th>
														<th style="width: 10%" >No</th>
														<th>Nama Acara</th>
														<th>Tanggal Mulai - Selesai</th>
													</tr>
												</thead>
											</table>
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


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
<script>
	$(function () {
		$('#conference-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('page_conferences.list') }}",
            columns: [
				{data: 'id', name: 'id', visible: false},
				{data: 'number', name: 'number'}, // Kolom nomor urut
				{data: 'title', name: 'title'},
				{data: 'start_date', name: 'start_date'}
            ],
		});
	});
</script>
@endsection