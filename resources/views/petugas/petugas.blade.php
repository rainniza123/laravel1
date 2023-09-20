@extends('template.master')

@section('content')

<div class="content-wrapper">
<div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Petugas</h3>
              </div>

              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
              <div class="card-body">
              <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Petugas</h3>
              </div>
              <!-- /.card-header -->
<!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" placeholder="Enter Nama">
                    @error('nama')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputJabatan1">Jabatan</label>
                    <input type="text"class="form-control @error('jabatan') is-invalid @enderror " name="jabatan" placeholder="Enter Jabatan">
                    @error('jabatan')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNoTelepon1">No Telepon</label>
                    <input type="number" class="form-control @error('telp') is-invalid @enderror "name="telp" placeholder="Enter No Telepon">
                    @error('telp')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Enter Alamat">
                    @error('alamat')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <a href="{{ route('petugas.index') }}" class="btn btn-warning">Kembali</a>
                </div>
              </form>
            </div>
</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- adminlte App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js')}}"></script>
@endsection