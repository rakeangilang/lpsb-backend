@extends('templates.default')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Tambahkan Admin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pengguna</li>
        <li class="active">Tambah Admin</li>
      </ol>
    </section>

    <section>
    <br>
    <div class="col">
            <!-- Horizontal Form -->
            <div class="box box-default">
               <div class="box-header with-border">
               <!-- /.box-header -->
               <!-- form start -->
               <form class="form-horizontal">
               <div class="box-body">
                    <!-- select -->
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Peran Admin</label>
                    <div class="col-sm-5">
                    <select class="form-control">
                        <option value="" selected disabled hidden >Pilih salah satu</option>
                        <option>Super Admin</option>
                        <option>Sub Admin</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                                    
                        <label for="name" class="col-sm-3 control-label">Nama Lengkap</label>

                        <div class="col-sm-5">
                        <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Alamat Email</label>

                        <div class="col-sm-5">
                        <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-5">
                        <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>

                        <div class="col-sm-5">
                        <input type="password" class="form-control" id="confirm_password">
                        </div>
                    </div>
               </div>
               <!-- /.box-body -->
               <div class="box-footer">   
                  <button type="submit" class="btn btn-info pull-right">Tambah Admin</button>
               </div>
               <!-- /.box-footer -->
               </form>
            </div>
    </section>
@endsection