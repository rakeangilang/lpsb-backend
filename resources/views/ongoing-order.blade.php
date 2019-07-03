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
                <th>Harga</th>
                <th>Tanggal Pengajuan Diterima</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->NoPesanan}}</td>
                <td>{{$order->Nama}}</td>
                <td style="text-align: right;">Rp. {{$order->TotalHarga}}</td>
                <td>{{$order->DiterimaTgl}}</td>
                <td>{{$order->IDStatus}}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection