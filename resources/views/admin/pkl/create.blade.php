@extends('admin.h&f.master')@section('judul_halaman', 'Tambah PKL')
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
                                <h6 class="h2 text-white d-inline-block mb-0">Tambah Data PKL</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin') }}">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/dashboard/admin/mahasiswa/pkl') }}">
                                                PKL
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah PKL</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                                {{-- <a href="#" class="btn btn-sm btn-neutral">Tambah Tugas Akhir</a> --}}
                                {{-- <a href="#" class="btn btn-sm btn-neutral">Kelola Tugas Akhir</a> --}}
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
                            <form action="/pkl/send_create" method="post">
                            {{ csrf_field() }}
                                <!-- Card header -->
                                <div class="card-header">
                                    <h3 class="mb-0">Tambah Data PKL</h3>
                                </div>
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="form-group">
                                    <label for="nm">Nama Mahasiswa</label>
                                        <input type="text" name="nama"  class="form-control" id="nm">
                                    </div>

                                    <div class="form-group">
                                        <label for="npm" >NPM Mahasiswa</label>
                                        <input type="text" name="npm" class="form-control" id="npm">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1" name="jurusan">Program Studi</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jurusan">
                                            <option value="Informatika">Informatika</option>
                                            <option value="Sistem Informasi">Sistem Informasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Angkatan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="angkatan">
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ta">Judul PKL</label>
                                        <input type="text" name="judul" class="form-control" id="ta">
                                    </div>

                                    <div class="form-group">
                                        <label for="ds1">Instansi</label>
                                        <input type="text" name="instansi" class="form-control" id="ds1">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label" for="exampleFormControlSelect1">Dosen pembimbing</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="pembimbing">
                                            <option value="Sugiarto, S.Kom, M.Kom">Sugiarto, S.Kom, M.Kom</option>
                                            <option value="Wahyu S J Saputra, S.Kom, M.Kom">Wahyu S J Saputra, S.Kom, M.Kom</option>
                                            <option value="Yisti Vita Via, S.ST, M.Kom">Yisti Vita Via, S.ST, M.Kom</option>
                                            <option value="Fawwas Ali Akbar, S.Kom, M.Kom">Fawwas Ali Akbar, S.Kom, M.Kom</option>
                                            <option value="Dr. Basuki Rahmat, S.Si, MT">Dr. Basuki Rahmat, S.Si, MT</option>
                                            <option value="Achmad Junaidi, S.Kom, M.Kom">Achmad Junaidi, S.Kom, M.Kom</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="ds2">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="ds2">
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
                                    <button class="btn btn-primary" type="submit" value="simpan Data">Simpan</button>
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
                                        <script
                                            src="<?php echo asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>

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
