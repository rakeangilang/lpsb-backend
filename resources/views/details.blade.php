@extends('templates.default')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Detail Order
      <small>Jenis Analisis Sampel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Pesanan</li>
      <li class="active">Detail Order</li>
   </ol>
</section>
<br>
<div class="col-md-12">
   <div class="box box-danger collapsed-box">
      <a href="#">
         <div class="button box-header with-border " data-widget="collapse">
            <h3 class="box-title">Validasi Order</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
               </button>
            </div>
            <!-- /.box-tools -->
         </div>
      </a>
      <!-- /.box-header -->
      <div class="box-body">
         <!-- Ini invoice nya gan -->
         <!-- Main content -->
         <section class="invoice">
            <!-- title row -->
            <div class="row">
               <div class="col-xs-12">
                  <h2 class="page-header">
                     <i class="fa fa-globe"></i> Trop BRC.
                     <small class="pull-right">Date: 24/06/2019</small>
                  </h2>
               </div>
               <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
               <div class="col-sm-4 invoice-col">
                  From
                  <address>
                  <strong>Zaki Geyan</strong><br>
                     Jl. Lkr. Perwira No. 26A<br>
                     Babakan, Dramaga, Bogor 16680<br>
                     Phone: (+62) 895-3663-59576<br>
                     Email: zaki_geyan@apps.ipb.ac.id
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
                  <b>Invoice #000001</b><br>
                  <br>
                  <b>Order ID:</b> 000001<br>
                  <b>Payment Due:</b> 24/06/2014<br>
                  <b>Account:</b> 555-1234
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
                        <tr>
                           <td>1</td>
                           <td>Dolor sit amet</td>
                           <td>Consectetur</td> 
                           <td>adipiscing elit</td>
                           <td>Sed do eiusmod</td>
                           <td>tempor incididunt</td>
                           <td>Rp100.000,00</td>
                        </tr>
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
                  <p class="lead">Amount Due 26/06/2019</p>
                  <div class="table-responsive">
                     <table class="table">
                        <tr>
                           <th style="width:50%">Subtotal:</th>
                           <td>Rp100.000,00</td>
                        </tr>
                        <tr>
                           <th>Pajak (10%):</th>
                           <td>Rp10.000,00</td>
                        </tr>
                        <tr>
                           <th>Pengiriman:</th>
                           <td>Rp25.000,00</td>
                        </tr>
                        <tr>
                           <th>Total:</th>
                           <td>Rp135.000,00</td>
                        </tr>
                     </table>
                  </div>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- this row will not appear when printing -->
            <div class="row no-print">
               <div class="col-xs-12">
                  <a href="print-invoice" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Terima
                  </button>
                  <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                  <i class="fa fa-download"></i> Tolak
                  </button>
               </div>
            </div>
         </section>
         <!-- /.content -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</div>
<!-- /.col -->
<div class="col-md-12">
   <div class="box box-default collapsed-box">
      <a href="#">
         <div class="button box-header with-border " data-widget="collapse">
            <h3 class="box-title">Validasi Pembayaran</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
               </button>
            </div>
            <!-- /.box-tools -->
         </div>
      </a>
      <!-- /.box-header -->
      <div class="box-body">
         <section class="invoice">
            <div align="center">
               <img src="https://ecs7.tokopedia.net/img/cache/700/product-1/2016/5/19/1130817/1130817_12bb07c5-eb1b-4e0a-9836-ffba6a72a300.jpg">
               <br>
            </div>
            <div class="row no-print">
               <div class="col-xs-12">
                  <button type="button" class="btn btn-success pull-right">
                  Terima
                  </button>
                  <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                  Tolak
                  </button>
               </div>
            </div>
         </section>
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</div>
<!-- /.col -->
<div class="col-md-12">
   <div class="box box-default collapsed-box">
      <a href="#">
         <div class="button box-header with-border " data-widget="collapse">
            <h3 class="box-title">Validasi Pengiriman</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
               </button>
            </div>
            <!-- /.box-tools -->
         </div>
      </a>
      <!-- /.box-header -->
      <div class="box-body">
         <section class="invoice">
            <div class="row">
               <div class="col-xs-12 table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>History</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>25-06-2019</td>
                           <td>Manifested [SURABAYA]</td>
                        </tr>
                        <tr>
                           <td>25-06-2019</td>
                           <td>With Delivery Courier [BOGOR]</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>   
            <!-- /.box-header -->
         <!-- /.box-body -->
         </section>
         <!-- /.box -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</div>
<!-- /.col -->

<div class="col-md-12">
   <div class="box box-default collapsed-box">
      <a href="#">
         <div class="button box-header with-border " data-widget="collapse">
            <h3 class="box-title">Hasil Analisis</h3>
            <div class="box-tools pull-right">
               <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
               </button>
            </div>
            <!-- /.box-tools -->
         </div>
      </a>
      <!-- /.box-header -->
      <div class="box-body">
         <section class="invoice">
            <div align="center">
               <img src="http://3.bp.blogspot.com/-1AZWrPsTT6g/T8Csrlgzq4I/AAAAAAAAAMs/nLCjyKf6ypw/s1600/kandungan+ternak.png">
               <br>
            </div>
            <br>
            <br>
            <div class="col">
            <!-- Horizontal Form -->
            <div class="box box-default">
               <div class="box-header with-border">
               <h3 class="box-title">Sisa Sample </h3>
               <br>
               <small>Jika tidak bersisa tidak perlu di isi</small>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form class="form-horizontal">
               <div class="box-body">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-3 control-label">Jasa Pengirim</label>

                     <div class="col-sm-5">
                     <input type="email" class="form-control" id="inputEmail3" placeholder="JNE / POS Indonesia / TiKi">
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputEmail4" class="col-sm-3 control-label">No Resi</label>

                     <div class="col-sm-5">
                     <input type="email" class="form-control" id="inputEmail3" placeholder="12004004210XXXX">
                     </div>
                  </div>
               </div>
               <!-- /.box-body -->
               <div class="box-footer">   
                  <button type="submit" class="btn btn-success pull-right">Kirim</button>
               </div>
               <!-- /.box-footer -->
               </form>
            </div>
          <!-- /.box -->
         </section>
         <!-- /.box-body -->
      </div>
         <!-- /.box -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</div>
<!-- /.col -->

@endsection