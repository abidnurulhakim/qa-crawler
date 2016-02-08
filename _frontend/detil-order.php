<!DOCTYPE html>
<html>
  <head id="head">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Borneo Logistik | Detil Pemesanan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/AdminLTE.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
    <script src="assets/plugins/modernizr/modernizr.min.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <?php require_once('header.php');?>
      <?php require_once('main-sidebar.php');?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <b>Detil Pemesanan </b>
            <small>CAGK7419TB</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Detil Pemesanan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Borneo Logistik, PT.
                <small class="pull-right">Tanggal: 2/12/2015</small>
              </h2>
            </div><!-- /.col -->
            <div class="col-xs-12">
              <button class="btn btn-flat btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-trash-o"></i> Hapus</button>
              <button class="btn btn-flat btn-warning pull-right" style="margin-right: 5px;"><i class="fa fa-edit"></i> Edit</button>
            </div>
          </div>
          <br>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              Dari
              <address>
                <strong>PT Adhi Perkasa</strong><br>
                Jl. Wijaya I No. 47<br>
                Jakarta Selatan, DKI Jakarta, Indonesia<br>
                Phone: (021) 735-5432<br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              Kepada
              <address>
                <strong>PT Dana Adhi</strong><br>
                Jl. Utomo 3 No. 72<br>
                Surabaya, Jawa Timur, Indonesia<br>
                Phone: (037) 539-1037<br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Order ID:</b> CAGK7419TB<br>
              <b>Status Pembayaran:</b> <span class="label label-success">Lunas</span><br>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Berat Barang (KG)</th>
                    <th>Biaya</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Panci</td>
                    <td>300</td>
                    <td>200</td>
                    <td>500.000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Penggorengan</td>
                    <td>100</td>
                    <td>50</td>
                    <td>100.000</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Gula</td>
                    <td>200</td>
                    <td>200</td>
                    <td>500.000</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Lemari</td>
                    <td>2</td>
                    <td>50</td>
                    <td>200.000</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Tempat Tidur</td>
                    <td>1</td>
                    <td>30</td>
                    <td>150.000</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
            </div><!-- /.col -->
            <div class="col-xs-6">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>Rp. 1.350.000</td>
                  </tr>
                  <tr>
                    <th>Pajak (10%)</th>
                    <td>Rp. 135.000</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td><b>Rp. 1.485.000</b></td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <?php require_once('main-footer.php');?>
      <?php require_once('control-sidebar.php');?>

    </div><!-- ./wrapper -->
    <script type="text/javascript"> $myPrefix = "";</script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
