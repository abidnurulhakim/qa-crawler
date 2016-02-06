<!DOCTYPE html>
<html>
  <head id="head">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Borneo Logistik | Halaman Pemesanan</title>
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
            <b>Pemesanan</b>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pemesanan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Pemesanan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="dataTables" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Jenis</th>
                        <th>Berat Total (KG)</th>
                        <th>Status</th>
                        <th>Biaya (Ribuan)</th>
                        <th>Lokasi pemesanan</th>
                        <th>Tanggal Pemesanan</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Adhi Perkasa</td>
                        <td>PT Dana Adhi</td>
                        <td>Regular</td>
                        <td>250</td>
                        <td><span class="label label-danger">Belum lunas</span></td>
                        <td>1.000</td>
                        <td>Jakarta</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                      <tr>
                        <td>PT Dana Adhi</td>
                        <td>PT Adhi Perkasa</td>
                        <td>Regular</td>
                        <td>350</td>
                        <td><span class="label label-success">Lunas</span></td>
                        <td>2.000</td>
                        <td>Surabaya</td>
                        <td>28/12/2015</td>
                        <td><a href="" class="btn btn-warning btn-sm btn-cell">Detil</a><a href="" class="btn btn-danger btn-sm btn-cell">Hapus</a></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Pengirim</th>
                        <th>Penerima</th>
                        <th>Jenis</th>
                        <th>Berat Total (KG)</th>
                        <th>Status</th>
                        <th>Biaya (Ribuan)</th>
                        <th>Lokasi pemesanan</th>
                        <th>Tanggal Pemesanan</th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php require_once('main-footer.php');?>
      <?php require_once('control-sidebar.php');?>

    </div><!-- ./wrapper -->
    <script type="text/javascript"> $myPrefix = "";</script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
