@extends('admin.h&f.master')@section('judul_halaman', 'Tambah Prestasi')
@section('header')
<!-- Page plugins -->

<link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel = "stylesheet" /> <link
    rel="stylesheet"
    href="<?php echo asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link
        rel="stylesheet"
        href="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
        <link
            rel="stylesheet"
            href="<?php echo asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
            @endsection @section('konten')
            <!-- Header -->
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">Tambah Prestasi</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin') }}">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin/mahasiswa/prestasi') }}">
                                                Prestasi
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Prestasi</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                {{-- <a href="#" class="btn btn-sm btn-neutral">Tambah Prestasi</a> --}}
                                {{-- <a href="#" class="btn btn-sm btn-neutral">Kelola Prestasi</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card">
                            <form >

                                <!-- Card header -->
                                <div class="card-header">
                                    <h3 class="mb-0">Tambah Prestasi</h3>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Mahasiswa</label>
                                        <br>
                                            <small>
                                                <i>(Pisahkan dengan koma jika lebih dari satu.)</i>
                                            </small>
                                            <br>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    {{-- value="Bucharest, Cluj, Iasi, Timisoara, Piatra Neamt" --}}
                                                    data-toggle="tags"
                                                    name="nama_mahasiswa"/>
                                                <br>
                                                    {{--
                                        <label for="exampleInputEmail1">Judul Prestasi</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"></div> --}}
                                                    {{-- <div class="form-group">
                                            <label for="exampleInputEmail1">Konten Prestasi</label>
                                            <textarea name="konten" class="form-control my-editor"></textarea>
                                            {{-- <input type="text" class="form-control" id="exampleInputEmail1"> --
                                        </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Program Studi</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                                            <option>Informatika</option>
                                            <option>Sistem Informasi</option>
                                        </select>
                                        </div>
                                         <div class="form-group">
                                        <label for="keg">Nama Kegiatan</label>
                                        <input type="text" class="form-control" id="keg">
                                    </div>


                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleDatepicker">Waktu Kegiatan</label>
                                            <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
                                        </div>
                                        <div class="form-group">
                                            <label for="pres">Prestasi yang dicapai</label>
                                            <input type="text" class="form-control" id="pres">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="exampleFormControlSelect1">Individu/Tim</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                            <option>Individu</option>
                                            <option>Tim</option>
                                        </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3">

                                        <!-- Aksi -->
                                        <div class="card">
                                            <!-- Card header -->
                                            <div class="card-header">
                                                <h3 class="mb-0">Aksi</h3>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <?php
                                                if ($_POST) {
                                                    # code...
                                                    print_r($_POST);
                                                }
                                                ?>
                                                {{-- <button class="btn btn-warning" type="submit">Draft</button> --}}
                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Argon Scripts -->
                                    @endsection @section('script')
                                    <!-- Argon Scripts -->
                                    <!-- Optional JS -->
                                    <script
                                        src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

                                    <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
                                    <script
                                        src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

                                    <script
                                        src="<?php echo asset('assets/vendor/dropzone/dist/min/dropzone.min.js')?>"></script>
                                    <script
                                        src="../../assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
                                    <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>
                                    <script src="<?php echo asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>

                                    <script
                                        src="<?php echo asset('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')?>"></script>

                                    <script>
                                        var editor_config = {
                                            path_absolute: "{{ url('/') }}/",
                                            selector: "textarea.my-editor",
                                            plugins: [
                                                "advlist autolink lists link image charmap print preview hr anchor pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime media nonbreaking save table contextmenu directionality", "emoticons template paste textcolor colorpicker textpattern"
                                            ],
                                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter align" +
                                                    "right alignjustify | bullist numlist outdent indent | link image media",
                                            relative_urls: false,
                                            file_browser_callback: function (field_name, url, type, win) {
                                                var x = window.innerWidth || document.documentElement.clientWidth || document
                                                    .getElementsByTagName(
                                                        'body'
                                                    )[0]
                                                    .clientWidth;
                                                var y = window.innerHeight || document.documentElement.clientHeight || document
                                                    .getElementsByTagName(
                                                        'body'
                                                    )[0]
                                                    .clientHeight;

                                                var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' +
                                                        field_name;
                                                if (type == 'image') {
                                                    cmsURL = cmsURL + "&type=Images";
                                                } else {
                                                    cmsURL = cmsURL + "&type=Files";
                                                }

                                                tinyMCE
                                                    .activeEditor
                                                    .windowManager
                                                    .open({
                                                        file: cmsURL,
                                                        title: 'Filemanager',
                                                        width: x * 0.8,
                                                        height: y * 0.8,
                                                        resizable: "yes",
                                                        close_previous: "no"
                                                    });
                                            }
                                        };

                                        tinymce.init(editor_config);
                                    </script>
                                    @endsection
