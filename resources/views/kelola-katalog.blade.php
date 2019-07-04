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
                <th>Harga IPB</th>
                <th>Harga NON IPB</th>
                <th>Metode</th>
                <th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
            @foreach($katalog as $kat)
            <tr>
                <td>{{$i=$i+1}}</td>
                <td>{{$kat->IDKategori}}</td>
                <td>{{$kat->JenisAnalisis}}</td>
                <td>{{$kat->HargaIPB}}</td>
                <td>{{$kat->HargaNONIPB}}</td>
                <td>{{$kat->Metode}}</td>
                <td>{{$kat->Keterangan}}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection