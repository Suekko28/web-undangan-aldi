@extends('layouts.app')

@section('navbar-admin')
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/draft2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style-admin.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/fonts/boxicons.draft') }}" />

    <!-- Core draft -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/draft/core.draft') }}"
        class="template-customizer-core-draft" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/vendor/draft/theme-default.draft') }}"
        class="template-customizer-theme-draft" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/draft/demo.draft') }}" />

    <!-- Vendors draft -->
    <link rel="stylesheet"
        href="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.draft') }}" />

    <!-- Page draft -->

    <!-- Helpers -->
    <script src="{{ asset('assets/admin/assets/vendor/js/helpers.js') }}"></script>

    <!-- Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!-- Config: Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file. -->
    <script src="{{ asset('assets/admin/assets/js/config.js') }}"></script>

    <main>

        <section class="content">
            <div class="container-fluid">
                @include('layouts.message')
                <!-- Small boxes (Stat box) -->
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5 mb-3">Pilih Template</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <select class="form-control" id="foto_laki" name="foto_laki">
                                    <option value="#">Pilih Template....</option>
                                    <option value="foto1">Alternative 1</option>
                                    <option value="foto1">Alternative 2</option>
                                    <option value="foto1">Alternative 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Mempelai</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="gambar">Foto Mempelai Laki <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="header">Nama Mempelai Laki <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="header" name="header"
                                    placeholder="Masukkan Header">
                            </div>

                            <div class="form-group mb-3">
                                <label for="gambar">Foto Mempelai Perempuan <span class="mandatory">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="header">Nama Mempelai Perempuan <span class="mandatory">*</span></label>
                                <input type="text" class="form-control" id="header" name="header"
                                    placeholder="Masukkan Header">
                            </div>
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"
                                placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Konten">Isi Artikel</label>
                            <textarea rows="20" class="form-control" id="isi_artikel" name="isi_artikel" placeholder="Masukkan Isi Materi"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <br>
                            <input type="radio" id="status_publish" name="status_publish" value="publish">
                            <label for="status_publish  ">Publish</label><br>
                            <input type="radio" id="draft" name="status_publish" value="draft">
                            <label for="draft">Draft</label><br>
                        </div> --}}

                        {{-- <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                            <a href="" class="btn btn-danger">Batal</a>
                        </div> --}}
                    </div>

                    <div class="card-body container bg-white mt-5">
                        <div class="mempelai text-center fw-bold fs-5">Our Love Story</div>
                        <div class="fs-6">
                            <div class="form-group mb-3">
                                <label for="tanggal_pertemuan">Tanggal Pertemuan <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tanggal_pertemuan" name="tanggal_pertemuan" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pertama_bertemu">Pertama Bertemu <span class="mandatory">*</span></label>
                                <textarea class="form-control" id="pertama_bertemu" name="pertama_bertemu" placeholder=""></textarea>
                            </div>     
                            <div class="form-group mb-3">
                                <label for="tanggal_pertemuan">Tanggal Pendekatan <span class="mandatory">*</span></label>
                                <input type="date" class="form-control" id="tanggal_pertemuan" name="tanggal_pertemuan" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pertama_bertemu">Pendekatan <span class="mandatory">*</span></label>
                                <textarea class="form-control" id="pertama_bertemu" name="pertama_bertemu" placeholder=""></textarea>
                            </div> 
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"
                                placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Konten">Isi Artikel</label>
                            <textarea rows="20" class="form-control" id="isi_artikel" name="isi_artikel" placeholder="Masukkan Isi Materi"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <br>
                            <input type="radio" id="status_publish" name="status_publish" value="publish">
                            <label for="status_publish  ">Publish</label><br>
                            <input type="radio" id="draft" name="status_publish" value="draft">
                            <label for="draft">Draft</label><br>
                        </div> --}}

                        {{-- <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary ml-3 ms-3">Simpan</button>
                            <a href="" class="btn btn-danger">Batal</a>
                        </div> --}}
                    </div>
                    <!-- /.card-body -->

                </form>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('isi_artikel');
        </script>

    </main>

    <script src="{{ asset('assets/admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
@endsection
