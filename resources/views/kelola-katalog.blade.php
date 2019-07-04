@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Katalog
        <small>Klik Katalog untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Katalog</li>
        <li class="active">Kelola Katalog</li>
      </ol>
    </section>

    <br>

    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Jenis Analisis</th>
                <th>Harga</th>
                <th>Metode</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Kategori 1</td>
                <td>Jenis 1</td>
                <td>1000</td>
                <td>Prototype</td>
                <td>Mantab gan</td>
            </tr>
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection