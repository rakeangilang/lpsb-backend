
@extends('templates.default')

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesanan
        <small>Jasa Analisis Sampel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$incoming_order}}</h3>
              <p>Pesanan Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="incoming-order" class="small-box-footer">
              Klik disini <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$ongoing_order}}</h3>
              <p>Pesanan dalam Proses</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="ongoing-order" class="small-box-footer">
              Klik disini <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$complete_order}}</h3>
              <p>Pesanan Selesai</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="order-complete" class="small-box-footer">
              Klik disini <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$canceled_order}}</h3>
              <p>Pesanan Dibatalkan</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="canceled-order" class="small-box-footer">
              Klik disini <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Total Pesanan</h3>
            </div>
            <div class="box-body">
              <canvas id="pieChart" name="mycanvas" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6">
          <!-- BAR CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Pelanggan</h3>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->

@endsection