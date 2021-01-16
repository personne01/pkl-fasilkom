@extends('admin.h&f.master')
@section('judul_halaman', 'Dashboard admin')
@section('header')
    <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo asset('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo asset('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo asset('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>">
@endsection
@section('konten')
<!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Datatables</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Datatables</li>
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6 col-5 text-right">
                <a href="#" class="btn btn-sm btn-neutral">New</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid bg-primary mt--6">
        <!-- Table -->
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Datatable</h3>
                <p class="text-sm mb-0">
                  This is an exmaple of datatable using the well known datatables.net plugin. This is a minimal setup in order to get started fast.
                </p>
              </div>
              <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                  <thead class="thead-light">
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <tr>
                    @foreach($mahasiswa as $mhs )
                    @if(auth()->user()->roles == $mhs->roles &&  $mhs->roles == 'adminsi' && $mhs->roles == 'admintf')
                    <!-- Not Showing -->
                    @endif
                    @if(auth()->user()->roles !== $mhs->roles && $mhs->roles !== 'adminsi' && $mhs->roles !== 'admintf')
                    <td>{{$mhs->id}}</td>
                      <td>{{$mhs->username}}</td>
                      <td>{{$mhs->email}}</td>
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
                    @endif
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        
    <!-- Argon Scripts -->
@endsection
@section('script')
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
