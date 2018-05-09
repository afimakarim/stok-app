<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4993016_afi";//root
    private $password = "kaligangsa";//""
    private $db = "id4993016_stock_barang";

    function getKoneksi(){
        return new mysqli($this->server, $this->username,$this->password, $this->db);
    }
}
?>