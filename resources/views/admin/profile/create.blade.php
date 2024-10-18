<script src="//cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
<!--begin::Form-->
<form id="myForm" action="{{ url('/'.Request::segment(1)) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
    {{ csrf_field() }}
    <!--begin::Card body-->
    <input type="hidden" class="form-control" id="id_profile" value="{{ $profile->id }}"/>
    <div class="card-body border-top p-9">
        <!--end::Input group-->
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label fw-bold fs-6">Judul</label>
            <div class="col-lg-8 fv-row">
                <input type="text" name="title" id="title" class="form-control" placeholder="Judul" value="{{ $profile->title }}" disabled/>
            </div>
        </div>
        @if(Request::segment(1)!="structure" && Request::segment(1)!="motto")
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Deskripsi</label>
            <div class="col-lg-8 fv-row">
                <textarea name="text" id="text" class="form-control ckeditor">{{ $profile->text }}</textarea>
                <div id="phone-error" class="fv-plugins-message-container invalid-feedback"></div>
            </div>
        </div>
        @endif
        @if(in_array(Request::segment(1), array('about_us','opening_speech','structure','motto')))
        <div class="row mb-6">
            <label class="col-lg-4 col-form-label required fw-bold fs-6">Gambar</label>
            <div class="col-lg-8 fv-row">
                <input type="file" name="image" id="image" class="form-control" placeholder="Background Login"/>
                <div id="image-error" class="fv-plugins-message-container invalid-feedback"></div>
                <span style="font-size:11px"><i>Ukuran File Tidak Boleh Lebih Dari 500 Kb (jpg,jpeg,png)</i></span><br>
                @if($profile->image)
                    <img src="{{ asset('upload/profile/'.$profile->image) }}" width="40%">
                @endif
            </div>
        </div>
        @endif
    </div>
    <!--end::Card body-->
    <!--begin::Actions-->
    <div class="card-footer d-flex justify-content-end py-6 px-9">
        <button type="reset" class="btn btn-danger btn-flat btn-sm">Reset</button>
        <button type="submit" class="btn btn-primary btn-flat btn-sm" id="action" title="Tambah Data"> Simpan</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->

<script>
    CKEDITOR.replace( 'text' );
</script>