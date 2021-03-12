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
                <th>Status</th>
                <th>Opsi</th>
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
                <td>
                  <?php if($kat->StatusAktif) echo 'Aktif';
                  else echo 'Tidak Aktif';?>
                </td>
                <td>
                  <a href="edit-katalog/{{$kat->IDKatalog}}" target="_blank">
                    <span class="label label-info"><i class="fa fa-eye"></i> Lihat</span>
                  </a>
                  <a href="delete-katalog/{{$kat->IDKatalog}}" target="_blank">
                    <span class="label label-danger"><i class="fa fa-trash"></i> Hapus</span>
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