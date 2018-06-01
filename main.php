<DOCTYPE html>
<html>
<head>

    <title>STOK BARANG</title>
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
        <h2>Aplikasi Stok Barang</h2>
        <hr>
        <a href="input.php" class="btn btn-primary"> Tambah Data</a>
        <br><br>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" >KODE</th>
        <th class="text-center">NAMA BARANG</th>
        <th class="text-center">STOK</th>
        <th class="text-center" colspan="2">PILIHAN</th>

      </tr>
</thead>
<tbody>
<?php
    include "koneksi.php";

    $konkesiObj = new Koneksi();
    $koneksi = $konkesiObj->getKoneksi();
        
        
    if($koneksi->connect_error) {
       echo "<tr><td>";
       echo "Gagal Koneksi : " . $koneksi->connect_error;
       echo "</td></tr>";
    } //else {
//        echo "<tr><td>";
//        echo "Sambungan basis data Berhasil";
//        echo "</td></tr>";
//    }
$query = "select * from stock_barang";
$data = $koneksi->query($query);
if($data->num_rows <=0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></td>";
} else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo '<td class="text-center">' . $row["kode"] . "</td>";
        echo '<td class="text-center">' . $row["nama_barang"] . "</td>";
        echo '<td class="text-center">' . $row["stok"] . "</td>";
        echo '<td class="text-center"><a href="form-edit.php?kode=' .
            $row["kode"]. '"><button type="button" class="btn btn-success">Edit</button></a>';
            echo '<td class="text-center"><a href="hapus.php?kode=' .
            $row["kode"]. '"><button type="button" class="btn btn-danger">Hapus</button></a></td>';
        echo "</tr>";
    }
}
    ?>     
    </tbody>
  </table>
  </div>
  </div>
</body>
</html>