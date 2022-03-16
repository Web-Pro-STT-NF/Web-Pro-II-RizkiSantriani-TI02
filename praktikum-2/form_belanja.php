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
  <h2><center>Belanja Online<center></h2>
  <div class="container-card">
    <div class="row">
      <div class="col-12 bg-light pt-2">
</div>
</div>
<table class="table table-sm " style="width:20%; float: right;">
  <thead>
    <tr>
        <th class="table-primary">Daftar Harga</th>
    </tr>
  </thead>
    <tr>
        <td>TV : 4.200.000</td>
    </tr>
    <tr>
        <td>KULKAS : 3.100.000</td>
    </tr>
    <tr>
        <td>MESIN CUCI : 3.800.000</td>        
    </tr>
        <td class="table-primary"><b>Harga Dapat Berubah Setiap Saat</td>
    </tr>   
</table>
<br>
<br>
    <div>
<form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label"> Costumer</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_1" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_2" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_3" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_3" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-4">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
    <button name="kirim" type="kirim" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>

<div>
    <?php
        $_nama   = isset($_POST['nama']) ? $_POST['nama'] : '';
        $_produk = isset($_POST['produk']) ? $_POST['produk'] : '';
        $_jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
        $_produk = $_produk;


        echo 'Nama : '. $_nama;
        echo '<br>Produk Pilihan : '. $_produk;
        echo '<br>Jumlah : '. $_jumlah;

      if ($_produk == 'tv') {
        echo "<br>total harga : Rp. ".$_jumlah * 4200000;
      } elseif($_produk == 'kulkas') {
        echo "<br>total harga : Rp. ".$_jumlah * 3100000;
      } elseif($_produk == 'mesin_cuci') {
        echo "<br>total harga : Rp. ".$_jumlah * 3800000;
      }else {
        "silahkan pilih ";
      } 

    ?>
    
</div>

    </div>
</body>
</html>