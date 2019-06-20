@extends('templates.default')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Detail Order
      <small>Jenis Analisis Sampel</small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">Dashboard</li>
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
                     <i class="fa fa-globe"></i> AdminLTE, Inc.
                     <small class="pull-right">Date: 2/10/2014</small>
                  </h2>
               </div>
               <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
               <div class="col-sm-4 invoice-col">
                  From
                  <address>
                     <strong>Admin, Inc.</strong><br>
                     795 Folsom Ave, Suite 600<br>
                     San Francisco, CA 94107<br>
                     Phone: (804) 123-5432<br>
                     Email: info@almasaeedstudio.com
                  </address>
               </div>
               <!-- /.col -->
               <div class="col-sm-4 invoice-col">
                  To
                  <address>
                     <strong>John Doe</strong><br>
                     795 Folsom Ave, Suite 600<br>
                     San Francisco, CA 94107<br>
                     Phone: (555) 539-1037<br>
                     Email: john.doe@example.com
                  </address>
               </div>
               <!-- /.col -->
               <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b><br>
                  <br>
                  <b>Order ID:</b> 4F3S8J<br>
                  <b>Payment Due:</b> 2/22/2014<br>
                  <b>Account:</b> 968-34567
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Table row -->
            <div class="row">
               <div class="col-xs-12 table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th>Qty</th>
                           <th>Product</th>
                           <th>Serial #</th>
                           <th>Description</th>
                           <th>Subtotal</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>Call of Duty</td>
                           <td>455-981-221</td>
                           <td>El snort testosterone trophy driving gloves handsome</td>
                           <td>$64.50</td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>Need for Speed IV</td>
                           <td>247-925-726</td>
                           <td>Wes Anderson umami biodiesel</td>
                           <td>$50.00</td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>Monsters DVD</td>
                           <td>735-845-642</td>
                           <td>Terry Richardson helvetica tousled street art master</td>
                           <td>$10.70</td>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>Grown Ups Blue Ray</td>
                           <td>422-568-642</td>
                           <td>Tousled lomo letterpress</td>
                           <td>$25.99</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
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
                  <p class="lead">Amount Due 2/22/2014</p>
                  <div class="table-responsive">
                     <table class="table">
                        <tr>
                           <th style="width:50%">Subtotal:</th>
                           <td>$250.30</td>
                        </tr>
                        <tr>
                           <th>Tax (9.3%)</th>
                           <td>$10.34</td>
                        </tr>
                        <tr>
                           <th>Shipping:</th>
                           <td>$5.80</td>
                        </tr>
                        <tr>
                           <th>Total:</th>
                           <td>$265.24</td>
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
                  <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment
                  </button>
                  <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                  <i class="fa fa-download"></i> Generate PDF
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
            <div class="box-header">
               <h3 class="box-title">Shipment Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

         <!-- /.box-body -->
         </div>
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
            <div class="box-header">
               <h3 class="box-title">Shipment Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
               <table class="table table-condensed">
                  <tr>
                     <th style="width: 10px">#</th>
                     <th>Task</th>
                     <th>Progress</th>
                     <th style="width: 40px">Label</th>
                  </tr>
                  <tr>
                     <td>1.</td>
                     <td>Update software</td>
                     <td>
                        <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                     </td>
                     <td><span class="badge bg-red">55%</span></td>
                  </tr>
                  <tr>
                     <td>2.</td>
                     <td>Clean database</td>
                     <td>
                        <div class="progress progress-xs">
                           <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                        </div>
                     </td>
                     <td><span class="badge bg-yellow">70%</span></td>
                  </tr>
                  <tr>
                     <td>3.</td>
                     <td>Cron job running</td>
                     <td>
                        <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                        </div>
                     </td>
                     <td><span class="badge bg-light-blue">30%</span></td>
                  </tr>
                  <tr>
                     <td>4.</td>
                     <td>Fix and squish bugs</td>
                     <td>
                        <div class="progress progress-xs progress-striped active">
                           <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                        </div>
                     </td>
                     <td><span class="badge bg-green">90%</span></td>
                  </tr>
               </table>
               <br>
               <div class="row no-print">
                  <div class="col-xs-12">
                     <button type="button" class="btn btn-success pull-right">
                     Telah Diterima
                     </button>
                     <button type="button" class="btn btn-danger pull-right" style="margin-right: 5px;">
                     Gagal Diterima
                     </button>
                  </div>
               </div>
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