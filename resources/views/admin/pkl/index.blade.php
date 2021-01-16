@extends('admin.h&f.master') @section('judul_halaman', 'PKL')
@section('header')
<!-- Page plugins -->
<link
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
                    <h6 class="h2 text-white d-inline-block mb-0">Data PKL</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard/admin') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">PKL</li>
                        </ol>
                    </nav>
                </div>
                @if(auth()->user()->roles == 'admin' || auth()->user()->roles == 'adminsi' || auth()->user()->roles == 'admintf')
                <!-- menghilangkan tambah pkl -->
                @endif
                @if(auth()->user()->roles == 'mahasiswatf' || auth()->user()->roles == 'mahasiswasi')
                <div class="col-lg-6 col-5 text-right">
                    <a
                        href="{{ url('/dashboard/admin/mahasiswa/pkl/create') }}"
                        class="btn btn-sm btn-neutral">Tambah Data PKL</a>
                </div>
                @endif
                
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Data PKL</h3>
                    <p class="text-sm mb-0">
                        Berikut ini adalah data PKL mahasiswa yang ada di Fakultas Ilmu Komputer,
                        UPN "Veteran" Jawa Timur.
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table table-responsive" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama Mahasiswa</th>
                                <th>NPM Mahasiswa</th>
                                <th>Jabatan</th>
                                <th>Angkatan</th>
                                <th>Judul</th>
                                <th>Instansi</th>
                                <th>Jurusan</th>
                                <th>Pembimbing</th>
                                <th>Keterangan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        
                        
                        <tbody>
                            <tr>
                            @foreach($pkl as $e )
                                <td>{{$e->id_pkl}}</td>
                                <td>{{$e->nama}}</td>
                                <td>{{$e->npm}}</td>
                                <td>{{$e->jabatan}}</td>
                                <td>{{$e->angkatan}}</td>
                                <td>{{$e->judul}}</td>
                                <td>{{$e->instansi}}</td>
                                <td>{{$e->jurusan}}</td>
                                <td>{{$e->pembimbing}}</td>
                                <td>{{$e->keterangan}}</td>
                                <td> 
                                    <form action="" onsubmit="return confirm('Hapus data 1 ?')" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button
                                            class="red btn waves-effect waves-light btn-danger"
                                            type="submit"
                                            name="action"
                                            value="PUBLISH">Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    @endsection @section('script')
    <!-- Argon Scripts -->
    <!-- Optional JS -->
    <script src="<?php echo asset('assets/vendor/datatables.net/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
  <script src="<?php echo asset('assets/vendor/datatables.net-select/js/dataTables.select.min.js')?>"></script>
  <script src="<?php echo asset('assets/js/demo.min.js')?>"></script>

    @endsection
