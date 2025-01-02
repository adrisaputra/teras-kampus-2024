<script src="{{ url('backend/assets/ckeditor/ckeditor.js')}}"></script>
<div class="modal fade" id="kt_modal_add_textbook" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_textbook_header">
                <h2 class="fw-bolder" id="head_title"></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <form id="myForm" action="{{ url('/'.Request::segment(1)) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_textbook_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_textbook_header" data-kt-scroll-wrappers="#kt_modal_add_textbook_scroll" data-kt-scroll-offset="800px">
                        
                        <input type="hidden" class="form-control" id="id_textbook"/>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Kategori') }}</label>
                            <select class="form-control" name="category" id="category">
                                <option value="">- Pilih Kategori -</option>
                                <option value="Ilmu Pendidikan">Ilmu Pendidikan</option>
                                <option value="Ilmu Sosial">Ilmu Sosial</option>
                            </select>
                            <div id="category-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">{{ __('Judul') }}</label>
                            <input type="text" class="form-control" placeholder="Judul" name="title" id="title" />
                            <div id="title-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Penulis') }}</label>
                            <input type="text" class="form-control" placeholder="Penulis" name="author" id="author" />
                            <div id="author-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Tanggal Publikasi') }}</label>
                            <input type="text" class="form-control" placeholder="Tanggal Publikasi" name="publication_date" id="publication_date" />
                            <div id="kt_datepicker_1-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Deskripsi') }}</label>
                            <textarea name="desc" id="desc" class="form-control ckeditor"></textarea>
                            <div id="desc-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">{{ __('Harga Jual (Rp)') }}</label>
                            <input type="text" class="form-control" placeholder="Harga Jual" name="selling_price" id="selling_price" onkeyup="formatRupiah(this, '.')"/>
                            <div id="selling_price-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-bold fs-6 mb-2">{{ __('Stok Saat Ini') }}</label>
                            <input type="text" class="form-control" placeholder="Stok Saat Ini" name="stock" id="stock" onkeyup="formatRupiah(this, '.')"/>
                            <div id="stock-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Link Penjualan') }}</label>
                            <input type="text" class="form-control" placeholder="Link Penjualan" name="url" id="url" />
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('Cover') }}</label>
                            <input type="file" name="cover" id="cover" class="form-control">
                            <span class="text-red" id="show_cover"></span>
                            <div id="cover-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fw-bold fs-6 mb-2">{{ __('File') }}</label>
                            <input type="file" name="file" id="file" class="form-control">
                            <span class="text-red" id="show_file"></span>
                            <div id="file-error" class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                    </div>
                    <div class="text-center pt-15">
                        <button type="submit" class="btn btn-primary btn-flat btn-sm" id="action" title="Tambah Data"> Simpan</button>
                        <!-- <button type="reset" class="btn btn-danger btn-flat btn-sm" title="Reset Data"> Reset</button> -->
                        <button type="button" class="btn btn-warning btn-flat btn-sm" title="Kembali" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
