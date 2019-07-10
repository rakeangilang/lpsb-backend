@extends('templates.default')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Katalog
    <small>Tambahkan Kategori</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Katalog</li>
    <li class="active">Tambah Kategori</li>
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
    <form class="form-horizontal">
      <div class="box-body">
        <!-- select -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Nama Kategori</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Alka">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Foto</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Alka">
          </div>
        </div>
        <!-- <div class="form-group">
          <label for="exampleInputFile" class="col-sm-3 control-label">Foto</label>
          <div class="col-sm-5">
            <input type="file" id="exampleInputFile">
            <p class="help-block">Max. 2 MB</p>
          </div>
        </div> -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer">   
        <button type="submit" class="btn btn-info pull-right">Tambah Kategori</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>

@endsection