@extends('admin.layout')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <div class="col-xxl-12">
                    <div class="card card-xxl-stretch" style="background-color: #fff0;">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bolder text-white">Selamat Datang "{{ Auth::user()->name }}"</h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 100px"></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col bg-primary px-6 py-8 rounded-2 me-7 ">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                    <img src="{{ asset('menu/icons8-magazine-100.png') }}" width="50" height="50" >
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="text-default fw-bold fs-6" style="color:white">Jumlah Berita</a>
                                            </div>
                                            <div class="col-md-4">
                                                <p style="font-size:50px;color:white;text-align: right;">{{ App\Helpers\Helpers::format_number($news) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col bg-success px-6 py-8 rounded-2">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                    <img src="{{ asset('menu/icons8-customer-100.png') }}" width="50" height="50" >
                                                </span>
                                                <!--end::Svg Icon-->
                                                <a href="#" class="fw-bold fs-6 mt-2" style="color:white">Jumlah User</a>
                                            </div>
                                            <div class="col-md-4">
                                                <p style="font-size:50px;color:white;text-align: right;">{{ App\Helpers\Helpers::format_number($user) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
                    
@endsection