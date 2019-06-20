@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Katalog
        <small>Klik Katalog untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Incoming Order</li>
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
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Trident</td>
                <td>Internet</td>
            </tr>
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection