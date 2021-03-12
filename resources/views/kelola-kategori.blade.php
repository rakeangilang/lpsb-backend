@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
        <small>Klik Kategori untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Kategori</li>
        <li class="active">Kelola Kategori</li>
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
                <th>Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
            @foreach($kategori as $kat)
            <tr>
                <td>{{$i=$i+1}}</td>
                <td>{{$kat->Kategori}}</td>
                <td>
                  <a href="delete-kategori/{{$kat->IDKategori}}" target="_blank">
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