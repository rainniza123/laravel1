@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/rak/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Nama Rak</label>
                    <input type="text" class="form-control" name="nama_rak" placeholder="Input Nama Rak">
                    <label for="exampleInputEmail1">Lokasi Rak</label>
                    <input type="text" class="form-control" name="nama_rak" placeholder="Input Nama Rak ">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
            </div>
@endsection