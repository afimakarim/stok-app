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
        <h2>Form Update Data Barang</h2>
        <hr>
        <br><br>
<?php
include "koneksi.php";

$konkesiObj = new Koneksi();
$koneksi = $konkesiObj->getKoneksi();
    
    
if($koneksi->connect_error) {
   echo "Gagal Koneksi : " . $koneksi->connect_error;
} 

$query = "select * from stock_barang where kode='" .
            $_GET["kode"] . "'";
$data = $koneksi->query($query);
$namaBarang = "";
$stok = "";

if($data->num_rows <=0){
    echo "Mas/Mba, kalo isi data sesuai prosedur yah !!";
} else {
    while($row = $data->fetch_assoc()) {
        $namaBarang = $row["nama_barang"];
        $stok = $row ["stok"];
    }
}
?>
<form action="update.php" method="post">
    <table>
        <div class="form-group">
            <label for="kode">KODE BARANG:</label>
            <br><br>
            <input type="text" class="form-control" name="kode" readonly="true"
                value=<?php echo $_GET["kode"]; ?> >
        </div>
        <div class="form-group">
            <label for="nama">NAMA BARANG:</label>
            <br><br>
            <input type="text" class="form-control" name="namaBarang"
                value=<?php echo $namaBarang; ?> >
        </div>
        <div class="form-group">
            <label for="stok">STOK BARANG:</label>
            <br><br>
            <input type="text" class="form-control" name="stok"
            value=<?php echo $stok; ?> >
        </div>
    </table>
    <input type="submit" class="btn btn-success" value="Simpan">
</form>
    </div>
    </div>
</body>
</html>