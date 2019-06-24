@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Klik Admin untuk Mengelola</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
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
                <th>No</th>
                <th>Peran Admin</th>
                <th>Nama Lengkap</th>
                <th>Alamat Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Super Admin</td>
                <td>Fikri Al Wahid</td>
                <td>fikroyafter21@example.com</td>
            </tr>
            </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection