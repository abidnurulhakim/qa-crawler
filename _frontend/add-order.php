<!DOCTYPE html>
<html>
  <head id="head">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Borneo Logistik | Halaman Tambah Pemesanan</title>
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
            <b>Tambah Pemesanan</b>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Pemesanan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <form>
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Dari</h3>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                  <div class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputNamaDari" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAlamatDari" class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea row="4" class="form-control" id="inputAlamat" placeholder="Alamat"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputProvinsiDari" class="col-sm-3 control-label">Provinsi</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>DKI JAKARTA</option>
                            <option>BANTEN</option>
                            <option>JAWA TENGAH</option>
                            <option>JAWA BARAT</option>
                            <option>JAWA TIMUR</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputJenisDari" class="col-sm-3 control-label">Jenis Pengiriman</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>Reguler</option>
                            <option>Express</option>
                          </select>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box -->
              </div>
              <div class="col-xs-12 col-md-6">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Kepada</h3>
                  </div><!-- /.box-header -->
                  <!-- form start -->
                  <div class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="inputNamaDari" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAlamatDari" class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                          <textarea row="4" class="form-control" id="inputAlamat" placeholder="Alamat"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputProvinsiDari" class="col-sm-3 control-label">Provinsi</label>
                        <div class="col-sm-9">
                          <select class="form-control">
                            <option>DKI JAKARTA</option>
                            <option>BANTEN</option>
                            <option>JAWA TENGAH</option>
                            <option>JAWA BARAT</option>
                            <option>JAWA TIMUR</option>
                          </select>
                        </div>
                      </div>
                    </div><!-- /.box-body -->
                  </div>
                </div><!-- /.box -->
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Entry Barang</h3>
                  </div><!-- /.box-header -->
                  <div id="add-entry" class="box-body">
                    <div class="form-horizontal">
                      <div class="form-group">
                        <label for="inputJenisBarang" class="col-sm-1 control-label">Jenis:</label>
                        <div class="col-sm-11">
                          <select class="input-entry form-control" id="inputJenisBarang">
                            <option value="500">1</option>
                            <option value="200">2</option>
                            <option value="275">3</option>
                            <option value="100">4</option>
                            <option value="200">5</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputNamaBarang" class="col-sm-1 control-label">Nama:</label>
                        <div class="col-sm-11">
                          <input type="text" class="input-entry form-control" id="inputNamaBarang" placeholder="Nama Barang">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="inputBeratBarang" class="col-sm-2 control-label">Jumlah:</label>
                          <div class="col-sm-10">
                            <input type="number" class="input-entry form-control" id="inputJumlahBarang" placeholder="Jumlah">
                          </div>
                        </div>
                        <div class="col-xs-6">
                          <label for="inputBeratBarang" class="col-sm-2 control-label">Berat:</label>
                          <div class="col-sm-10">
                            <input type="number" class="input-entry form-control" id="inputBeratBarang" placeholder="Berat">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 text-center">
                        <div id="btn-add-stuff" class="btn btn-flat btn-success">Tambah</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">List Barang</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                      <div class="col-xs-12 table-responsive">
                        <table class="table table-striped list-entry">
                          <thead>
                            <tr>
                              <th>Barang</th>
                              <th>Jumlah Barang</th>
                              <th>Berat Barang (KG)</th>
                              <th>Biaya satuan</th>
                              <th>Total</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                            <tr style="border-top:solid; font-weight:bold">
                              <td colspan="4">Grand Total</td>
                              <td class="grand-total">Rp. 0</td>
                              <td></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div><!-- /.col -->
                    <div class="col-xs-12">
                      <div class="col-xs-6">
                        <button type="submit" class="btn btn-flat btn-danger pull-right">Reset</button>
                      </div>
                      <div class="col-xs-6">
                        <button type="submit" class="btn btn-flat btn-success pull-left">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- /.content -->
        </form>
      </div><!-- /.content-wrapper -->
      <?php require_once('main-footer.php');?>
      <?php require_once('control-sidebar.php');?>

    </div><!-- ./wrapper -->
    <script type="text/javascript"> $myPrefix = "";</script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
