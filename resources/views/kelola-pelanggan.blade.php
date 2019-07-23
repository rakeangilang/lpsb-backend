@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
        <small>Klik Pelanggan untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pengguna</li>
        <li class="active">Kelola Pelanggan</li>
      </ol>
    </section>

    <br>

    <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style='width: 10px;'>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Perusahaan</th>
                <th>No HP</th>
                <th>No NPWP</th>
                <th>No Identitas</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
            @foreach($users as $user)
            <tr>
                <td>{{$i=$i+1}}</td>
                <td>{{$user->Nama}}</td>
                <td>{{$user->Email}}</td>
                <td>{{$user->Perusahaan}}</td>
                <td>{{$user->NoHP}}</td>
                <td>{{$user->NoNPWP}}</td>
                <td>{{$user->NoIdentitas}}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection