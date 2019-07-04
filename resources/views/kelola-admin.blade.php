@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Klik Admin untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pengguna</li>
        <li class="active">Kelola Admin</li>
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
                <th>Jabatan</th>
                <th>Alamat Email</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
            @foreach($admins as $admin)
            <tr>
                <td>{{$i=$i+1}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->jabatan}}</td>
                <td>{{$admin->email}}</td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection