
@php
$setting = \App\Helpers\Helpers::setting();
@endphp
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ __($setting->application_name) }}</title>
		{{--<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />--}}
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="in" />
		<meta property="og:type" content="Website" />
		<meta property="og:title" content={{ __($setting->application_name) }} />
		<meta property="og:url" content="{{ url('') }}" />
		<meta property="og:site_name" content={{ __($setting->application_name) }} />
    	<link rel="icon" type="image/x-icon" href="{{ asset('upload/setting/'.$setting->small_icon) }}"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="{{ url('/dashboard') }}">
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg') }}-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="dashboard") active @endif" href="{{ url('/dashboard') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-dashboard-layout-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item @if(Request::segment(1)=='slider') here show @endif menu-accordion">
									<span class="menu-link">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-home-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Beranda</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='slider') active @endif " href="{{ url('slider') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Slider</span>
											</a>
										</div>
									</div>
								</div>
								
								<div data-kt-menu-trigger="click" class="menu-item @if(in_array(Request::segment(1), array('about_us','vision_and_mission','opening_speech','main_tasks','structure','service_information','motto'))) here show @endif menu-accordion">
									<span class="menu-link">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-menu-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Profil</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='about_us') active @endif" href="{{ url('about_us') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tentang Kami</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='vision_and_mission') active @endif " href="{{ url('vision_and_mission') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Visi dan Misi</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='opening_speech') active @endif " href="{{ url('opening_speech') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Kata Sambutan</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='main_tasks') active @endif " href="{{ url('main_tasks') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Tugas Pokok & Fungsi</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='structure') active @endif " href="{{ url('structure') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Struktur Organisasi</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='service_information') active @endif " href="{{ url('service_information') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Maklumat Pelayanan</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='motto') active @endif " href="{{ url('motto') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Moto Pelayanan Publik</span>
											</a>
										</div>
									</div>
								</div>

								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="news") active @endif" href="{{ url('/news') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-magazine-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Berita</span>
									</a>
								</div>

								<div data-kt-menu-trigger="click" class="menu-item @if(in_array(Request::segment(1),['journal','proceeding'])) here show @endif menu-accordion">
									<span class="menu-link">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-home-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Jurnal dan Prosiding</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='journal') active @endif " href="{{ url('journal') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Jurnal</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link @if(Request::segment(1)=='proceeding') active @endif " href="{{ url('proceeding') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Prosiding</span>
											</a>
										</div>
									</div>
								</div>
								
								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="album") active @endif" href="{{ url('/album') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-photo-gallery-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Album</span>
									</a>
								</div>

								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="information") active @endif" href="{{ url('/information') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-loudspeaker-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Informasi</span>
									</a>
								</div>

								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="link") active @endif" href="{{ url('/link') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-website-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Link Terkait</span>
									</a>
								</div>

								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="service_standard") active @endif" href="{{ url('/service_standard') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-service-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Pelayanan Publik</span>
									</a>
								</div>

								@if(Auth::user()->group_id == 1)
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Data Master</span>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="log") active @endif" href="{{ url('/log') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-timer-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Log Aktifitas</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link @if(Request::segment(1)=="user") active @endif" href="{{ url('/user') }}">
										<span class="menu-icon" style="margin-right: 15px">
											<img src="{{ asset('menu/icons8-customer-100.png') }}" width="30" height="30" >
										</span>
										<span class="menu-title">Pengguna</span>
									</a>
								</div>
								@endif
							</div>
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Aside menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
								<div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
									<i class="bi bi-list fs-1"></i>
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo13/dist/index.html" class="d-lg-none">
									<img alt="Logo" src="{{ asset('upload/setting/'.$setting->small_icon) }}" class="h-25px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<a href="{{ url('/') }}" target="blank"><img alt="Logo" src="{{ asset('upload/setting/'.$setting->large_icon) }}" class="h-60px logo" /></a>
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Topbar-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Toolbar wrapper-->
									<div class="topbar d-flex align-items-stretch flex-shrink-0">
										<!--begin::Notifications-->
										<div class="d-flex align-items-stretch">
										</div>
										<!--end::Notifications-->
										<!--begin::User-->
										<div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
											<!--begin::Menu wrapper-->
											<div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
												@if (Auth::user()->photo)
													<img src="{{ asset('upload/photo/' . Auth::user()->photo) }}" alt="metronic">
												@else
													<img src="{{ asset('profile-1-20210205190338.png') }}" alt="metronic">
												@endif
											</div>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content d-flex align-items-center px-3">
														<!--begin::Avatar-->
														<div class="symbol symbol-50px me-5">
															@if (Auth::user()->photo)
																<img alt="Logo" src="{{ asset('upload/photo/' . Auth::user()->photo) }}">
															@else
																<img alt="Logo" src="{{ asset('profile-1-20210205190338.png') }}">
															@endif
														</div>
														<!--end::Avatar-->
														<!--begin::Username-->
														<div class="d-flex flex-column">
															<div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}</div>
														</div>
														<!--end::Username-->
													</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="{{ url('edit_profil/'.Crypt::encrypt(Auth::user()->id)) }}" class="menu-link px-5">Profil Saya</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												@if(Auth::user()->group_id == 1)
												<div class="menu-item px-5 my-1">
													<a href="{{ url('/setting') }}" class="menu-link px-5">Pengaturan</a>
												</div>
												@endif
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="menu-link px-5">Keluar</a>
													<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::User -->
										<!--begin::Heaeder menu toggle-->
										<div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
											<div class="topbar-item" id="kt_header_menu_mobile_toggle">
												<i class="bi bi-text-left fs-1"></i>
											</div>
										</div>
										<!--end::Heaeder menu toggle-->
									</div>
									<!--end::Toolbar wrapper-->
								</div>
								<!--end::Topbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->

                    @yield('content')

                    <!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2024©</span>
								<a href="" target="_blank" class="text-gray-800 text-hover-primary">Dinas Komunikasi dan Informatika Kabupaten Bombana</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg') }}-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<script>var hostUrl = "{{ asset('backend/assets/') }}";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('backend/assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ asset('backend/assets/js/custom/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('backend/assets/js/custom/documentation/forms/flatpickr.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>