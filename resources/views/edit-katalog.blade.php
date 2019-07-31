@extends('templates.default')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Katalog
    <small>Edit Katalog</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
    <li class="active">Katalog</li>
    <li class="active">Edit Katalog</li>
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
    <form class="form-horizontal" method="POST" action="{{ url('/edit-katalog/' . $katalog->IDKatalog)}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body">
        <!-- select -->
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Jenis Analisis</label>
          <div class="col-sm-5">
            <input type="text" name="jenis_analisis" class="form-control" id="inputEmail3" value="{{$katalog->JenisAnalisis}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Harga IPB (IDR)</label>
          <div class="col-sm-5">
            <input type="number" name="harga_ipb" class="form-control" id="inputEmail3" value="{{$katalog->HargaIPB}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Harga non-IPB (IDR)</label>
          <div class="col-sm-5">
            <input type="number" name="harga_nonipb" class="form-control" id="inputEmail3" value="{{$katalog->HargaNONIPB}}">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Metode</label>
          <div class="col-sm-5">
            <input type="text" name="metode" class="form-control" id="inputEmail3" value="{{$katalog->Metode}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail4" class="col-sm-3 control-label">Keterangan</label>
          <div class="col-sm-5">
            <input type="text" name="keterangan" class="form-control" id="inputEmail3" value="{{$katalog->Keterangan}}">
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
      </div>
      <!-- /.box-body -->
      <div class="box-footer">   
        <button type="submit" class="btn btn-info pull-right">Simpan Katalog</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</section>

@endsection