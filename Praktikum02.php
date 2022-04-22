<?php
include_once 'atas.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Belanja Online</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Belanja Online</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid row">
        <div class="col-8">
            <form action="form_belanja.php" method="POST" class="p-3">
                <div class="form-group row">
                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                    <div class="col-8">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Pilih Produk</label> 
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-warning">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <div class="container-fluid bg-warning text-white p-2 border border-warning">
                Daftar Harga
            </div>
            <div class="container-fluid p-2 border border-warning">
                TV : 4.200.000
            </div>
            <div class="container-fluid p-2 border border-warning">
                Kulkas: 3.100.000
            </div>
            <div class="container-fluid p-2 border border-warning">
                Mesin Cuci : 3.800.000
            </div>
            <div class="container-fluid bg-warning text-white p-2 border border-warning">
                Harga dapat berubah setiap saat
            </div>
        </div>
    </div>
    <div>
        <hr>
        <?php
            $nama_customer = $_POST['customer'];
            $produk = $_POST['produk'];
            if($produk == "tv") {
                $harga_produk = 4200000;
            } elseif ($produk == "kulkas") {
                $harga_produk = 3100000;
            } elseif ($produk == "mesin_cuci") {
                $harga_produk = 3800000;
            } else {
                $harga_produk = 0;
            }
            $jumlah = $_POST['jumlah'];
            $total_biaya = $harga_produk*$jumlah;
            echo 'Nama Customer : '.$nama_customer;
            echo '<br>Produk Pilihan : '.$produk;
            echo '<br>Jumlah : '.$jumlah;
            echo '<br>Total Harga : Rp '.number_format($total_biaya);
        ?>
    </div>
</body>
</html>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once'bawah.php';
?>