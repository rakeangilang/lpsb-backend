<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Trop BRC. | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
              <i class="fa fa-globe"></i> Trop BRC.
              <small class="pull-right">Date: {{$tanggal}}</small>
          </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
          <strong>{{$pelanggan->Nama}}</strong><br>
              {{$pelanggan->Alamat}}<br>
              Phone: {{$pelanggan->NoHP}}<br>
              Email: {{$pelanggan->Email}}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
          <strong>Trop BRC.</strong><br>
              Kampus IPB Taman Kencana<br>
              Jl. Taman Kencana No. 3, Bogor 16128<br>
              Phone: +62 251 8373561<br>
              Email: tropbrc@apps.ipb.ac.id<br>
              Website: biofarmaka.ipb.ac.id  
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #{{$id}}</b><br>
          <br>
          <b>Order ID:</b> {{$id}}<br>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <br>
    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
              <thead>
                <tr>
                    <th>Qty</th>
                    <th>Jenis Analisis</th>
                    <th>Metode</th>
                    <th>Jenis Sampel</th>
                    <th>Bentuk Sampel</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                </tr>
              </thead>
              <tbody>
              @foreach($sampel as $sam)
                <tr>
                    <td>{{$sam->Jumlah}}</td>
                    <td>{{$sam->JenisAnalisis}}</td>
                    <td>{{$sam->Metode}}</td> 
                    <td>{{$sam->JenisSampel}}</td>
                    <td>{{$sam->BentukSampel}}</td>
                    <td>{{$sam->Kemasan}}</td>
                    <td>{{$sam->HargaSampel}}</td>
                </tr>
              @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <br>
    <div class="row">
        <!-- accepted payments column -->
        <!-- <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="../../dist/img/credit/visa.png" alt="Visa">
          <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="../../dist/img/credit/american-express.png" alt="American Express">
          <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
          
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
          </div> -->
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due : {{$deadline}}</p>
          <div class="table-responsive">
              <table class="table">
                <tr>
                    <th>Total:</th>
                    <td>Rp<?php echo number_format($pesanan->TotalHarga, 2, ",", "."); ?></td>
                </tr>
              </table>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6" align="right">
          <p class="lead">Disetujui oleh</p>
          
          <div class="table-responsive">
          
          <table class="table">
          <tr>
          <img src="{{asset($ttd)}}" style="width:150px;height:150px;">
          </tr>
          <p>{{$nama}}</p>
          </table>
        </div>
    </div>
    <!-- /.row -->
    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{url('/print-invoice/'.$id)}}"  class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>
  </section>
</div>
<!-- ./wrapper -->
</body>
</html>
