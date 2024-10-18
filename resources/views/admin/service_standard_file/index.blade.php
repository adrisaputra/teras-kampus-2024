@extends('admin.layout')
@section('content')

<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-name d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Data {{ __($title)}}</h1>
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo13/dist/index.html" class="text-muted text-hover-primary">Beranda</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-dark">Data {{ __($title) }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-name">
                    </div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-service_standard_file-table-toolbar="base">
                            <a href="{{ url('/'.Request::segment(1)) }}" class="btn btn-warning btn-icon btn-sm me-2 mb-2" name="Refresh Halaman"><i class="fa fa-undo"></i></a>
                            <a class="btn btn-primary btn-sm me-2 mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_add_service_standard_file" onClick="clearForm()"><i class="fa fa-plus"></i>Tambah Standar Pelayanan Publik</a>
                        </div>
                    </div>
                </div>

                @include('admin.service_standard_file.create')
									
                
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <table class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300 gy-2 gs-6" id="service_standard_file-table">
                        <thead style="background-color: #3f51b5;">
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th style="width: 2%;color: white;border-bottom: white;" >Number</th>
                                <th style="width: 2%;color: white;border-bottom: white;" >No</th>
                                <th style="color: white;border-bottom: white;">File</th>
                                <th style="width: 10%;color: white;border-bottom: white;">Aksi</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    var table;

    $(document).ready(function () {
        table = $('#service_standard_file-table').DataTable({
            processing: true,
            serverSide: true,
			ajax: {
				url: "{{ route('service_standard_file.list', ['service_standard' => Crypt::encrypt($service_standard->id)]) }}",
				type: 'GET',
				dataType: 'json',
			},
            columns: [
				{data: 'id', name: 'id', visible: false},
				{data: 'number', name: 'number'}, // Kolom nomor urut
				{data: 'file', name: 'file'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
			order: [
				[0, 'desc'] // Mengatur pengurutan kolom pertama (id) secara descending
			],
            paging: true,
			drawCallback: function () {
                var api = this.api();
                var startIndex = api.context[0]._iDisplayStart; // Indeks baris pertama di halaman
                api.column(1, {page: 'current'}).nodes().each(function (cell, i) {
                    cell.innerHTML = startIndex + i + 1; // Menghitung nomor urut berdasarkan indeks baris dan nomor halaman
                });
            }
        });

        $('#myForm').submit(function (e) {
            e.preventDefault(); // Hindari pengiriman form secara default

            var action = document.getElementById('action').innerText;
            var id_service_standard_file = $('#id_service_standard_file').val();

            // Buat objek FormData untuk mengirim data form, termasuk file
            var formData = new FormData();
            formData.append('id', id_service_standard_file);
            formData.append('_token', "{{ csrf_token() }}");

            var fileInput = document.getElementById('file');
            if (fileInput.files.length > 0) {
                formData.append('file', fileInput.files[0]);
            }

            // Kirim permintaan validasi ke controller via Ajax
            var url = "{{ url('/service_standard_file/validate') }}";
            $.ajax({
                url: url + "/" + action,
                type: "POST",
                data: formData,
                contentType: false, // Tidak mengatur contentType secara otomatis
                processData: false, // Tidak memproses data secara otomatis
                success: function (response) {
                    $('.fv-plugins-message-container').html(''); // Hapus pesan kesalahan
                    $('.is-invalid').removeClass('is-invalid'); // Hapus kelas is-invalid dari bidang-bidang yang divalidasi

                    if (action === "Simpan") {
                        send();
                    } else {
                        update(id_service_standard_file);
                    }
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON.errors;

                    // Bersihkan semua pesan kesalahan sebelum menampilkan yang baru
                    $('.fv-plugins-message-container').html('');

                    // Tampilkan pesan kesalahan untuk setiap bidang jika ada
                    if (errors) {
                        $.each(errors, function (key, value) {
                            $('#' + key + '-error').html(value[0]);
                        });
                    }
                }
            });
        });


    });

    function clearForm(){
        document.getElementById("head_name").textContent = "Tambah Standar Pelayanan Publik";
        $('#myForm')[0].reset();
        document.getElementById("show_image").textContent = "";
        document.getElementById("action").textContent = "Simpan";
    }

    // Fungsi untuk menampilkan notifikasi toast dengan ikon centang
    function showSuccessToast(message) {
        toastr.success(message, '', {
            iconClass: 'toast-success', // Kelas untuk ikon centang
        });
    }
    
    // Create Data
    function send() {
        var formData = new FormData($('#myForm')[0]); // Buat objek FormData dari formulir

        // Kirim data formulir ke server menggunakan AJAX
        $.ajax({
            url: "{{ url('service_standard_file/store') }}",
            type: "POST",
            data: formData,
            contentType: false, // Biarkan jQuery menentukan contentType secara otomatis
            processData: false, // Biarkan jQuery menangani proses data secara otomatis
            success: function (response) {
                showSuccessToast(response.message); // Tampilkan notifikasi toast
                $('#myForm')[0].reset(); // Reset form setelah berhasil menambahkan data
                $('#kt_modal_add_service_standard_file').modal('hide');
                table.ajax.reload(null, false);
            },
            error: function (xhr) {
                // Tangani kesalahan jika pengiriman formulir gagal
                console.error("Error pengiriman formulir:", xhr);
            }
        });
    }
        
    // Get Data
    function getData(id){
        document.getElementById("head_name").textContent = "Ubah Standar Pelayanan Publik";
        document.getElementById("action").textContent = "Update";
        // Kirim data formulir ke server menggunakan AJAX

        var url = "{{ url('/service_standard_file/edit') }}";
        $.ajax({
            url: url + "/" + id,
            type: "GET",
            success: function (response) {
                document.getElementById("id_service_standard_file").value = response.data.id;
                document.getElementById("service_standard_id").value = response.data.service_standard_id;
                
                if(response.data.category == 'file'){
                    var fileLink = '<br><a href="{{ asset("upload/service_standard_file/") }}/' + response.data.file + '" class="btn mb-2 mr-1 btn-sm btn-info snackbar-bg-info" target="_blank">Lihat File Sebelumnya</a>';
                } else {
                    var fileLink = '<br><a href="{{ asset("upload/service_standard_file/") }}/' + response.data.file + '" class="btn mb-2 mr-1 btn-sm btn-info snackbar-bg-info" target="_blank">Lihat Foto Sebelumnya</a>';
                }
                document.getElementById("show_file").innerHTML = fileLink;
            },
            error: function (xhr) {
                // Tangani kesalahan jika pengiriman formulir gagal
                console.error("Error pengiriman formulir:", xhr);
            }
        });
    }

    // Update Data
    function update(id) {
        var formData = new FormData($('#myForm')[0]); // Buat objek FormData dari formulir
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', "PUT");
        
        // Kirim data formulir ke server menggunakan AJAX

        var url = "{{ url('/service_standard_file/edit') }}";
        $.ajax({
            url: url + "/" + id,
            type: "POST",
            data: formData,
            contentType: false, // Biarkan jQuery menentukan contentType secara otomatis
            processData: false, // Biarkan jQuery menangani proses data secara otomatis
            success: function (response) {
                showSuccessToast(response.message); // Tampilkan notifikasi toast untuk keberhasilan
                $('#myForm')[0].reset(); // Reset form setelah berhasil memperbarui data
                $('#kt_modal_add_service_standard_file').modal('hide'); // Tutup modal setelah berhasil memperbarui data
                table.ajax.reload(null, false); // Muat ulang DataTables setelah update
            },
            error: function (xhr) {
                // Tangani kesalahan jika pengiriman formulir gagal
                console.error("Error pengiriman formulir:", xhr);
            }
        });
    }
    
    // Delete Data
    function deleteData(id) {
        new Swal({
            name: 'Apakah Kamu Yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function (result) {
            if (result.isConfirmed) {
                new Swal(
                    'Deleted!',
                    'Data Berhasil Dihapus.',
                    'success'
                ).then(function () {
                    var url = "{{ url('/service_standard_file/delete') }}";
                    $.ajax({
                        url: url + "/" + id,
                        success: function (response) {
                            showSuccessToast(response.message);
                            $('#myForm')[0].reset();
                            table.ajax.reload(null, false);
                        },
                        error: function (xhr) {
                            console.error("Error pengiriman formulir:", xhr);
                        }
                    });
                });
            }
        });
    }



</script>

       
@endsection