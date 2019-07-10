@extends('templates.default')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Katalog
    <small>Tambahkan Katalog</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Katalog</li>
    <li class="active">Tambah Katalog</li>
  </ol>
</section>

<section>
  <br>
  <div class="col">
  <!-- Horizontal Form -->
  <div class="box box-default">
  <div class="box-header with-border">
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ url('/tambah-katalog')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <!-- select -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Kategori</label>
          <div class="col-sm-5">
            <select name="kategori" class="form-control">
              <?php $i=1; ?>
              @foreach($kats as $kat)
              <option value="{{$i}}">{{$kat->Kategori}}</option>
              <<?php $i=$i+1; ?>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Jenis Analisis</label>
          <div class="col-sm-5">
            <input type="text" name="jenis_analisis" class="form-control" id="inputEmail3" placeholder="Alka">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Harga IPB (IDR)</label>
          <div class="col-sm-5">
            <input type="number" name="harga_ipb" class="form-control" id="inputEmail3" placeholder="1000">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Harga non-IPB (IDR)</label>
          <div class="col-sm-5">
            <input type="number" name="harga_nonipb" class="form-control" id="inputEmail3" placeholder="2000">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Metode</label>
          <div class="col-sm-5">
            <input type="text" name="metode" class="form-control" id="inputEmail3" placeholder="Prototyping">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Keterangan</label>
          <div class="col-sm-5">
            <input type="text" name="keterangan" class="form-control" id="inputEmail3" placeholder="Barang Bagus">
          </div>
        </div>
        <div class="form-group">
          <label for="status" class="col-sm-3 control-label">Status</label>
          <div class="col-sm-5">
            <select name="status" class="form-control" id="status">
              <option value="1">Aktif</option>
              <option value="0">Tidak Aktif</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile" class="col-sm-3 control-label">Foto</label>
          <div class="col-sm-5">
            <input type="file" name="foto">
            <p class="help-block">Max. 2 MB</p>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">   
        <button type="submit" class="btn btn-info pull-right">Tambah Katalog</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>

@endsection