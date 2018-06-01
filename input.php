<DOCTYPE html>
<html>
<head>

    <title>APLIKASI STOK BARANG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">    
    <div class="container">
    <br>
        <h2>Form Masukkan Data Barang</h2>
        <hr>
        <br><br>
<form action="simpan-baru.php" method="post">
    <table>
        <div class="form-group">
            <label for="kode">KODE BARANG :</label>
            <br><br>
            <input type="text" class="form-control"  name="kode">
        </div>
        <div class="form-group">
            <label for="namaBarang">NAMA BARANG :</label>
            <br><br>
            <input type="text" class="form-control"  name="namaBarang">
        </div>
        <div class="form-group">
            <label for="stok">STOK BARANG :</label>
            <br><br>
            <input type="text" class="form-control"  name="stok">
        </div>
    </table>
    <input type="submit" class="btn btn-success" value="Simpan">
</form>
</div>
  </div>
</body>
</html>