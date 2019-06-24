@extends('templates.default')

@section('content')
<section class="content-header">
      <h1>
        Edit Admin
        <small>Kelola Admin</small>
      </h1>
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
                                    
                        <label for="inputEmail3" class="col-sm-3 control-label">Jenis Analisis</label>

                        <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Alka">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-5">
                    <select class="form-control">
                        <option>Aktif </option>
                        <option>Tidak Aktif</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4" class="col-sm-3 control-label">Harga IPB</label>

                        <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="1000">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4" class="col-sm-3 control-label">Harga Non IPB</label>

                        <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="2000">
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