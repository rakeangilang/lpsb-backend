@extends('templates.default')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesanan Dibatalkan
        <small>Semua analisis sampel yang dibatalkan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pesanan</li>
        <li class="active">Pesanan Dibatalkan</li>
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
                <th>Alasan Dibatalkan</th>
                <th>Detail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->NoPesanan}}</td>
                <td>{{$order->Nama}}</td>
                <td>{{$order->IDStatus}}</td>
                <td>
                  <a href="detail/{{$order->NoPesanan}}" target="_blank">
                    <span class="label label-info"><i class="fa fa-eye"></i> Lihat</span>
                  </a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection