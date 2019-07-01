@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        On-going Order
        <small>Melakukan Analisis Sampel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
        <li class="active">On-going Order</li>
      </ol>
    </section>

    <br>

    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No Pesanan</th>
                <th>Nama Pemesan</th>
                <th>Jenis Analisis</th>
                <th>Tanggal Pengajuan Diterima</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>Z</td>
            </tr>
            <tr>
                <td>Trident</td>
                <td>Internet
                Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>Z</td>
            </tr>
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection