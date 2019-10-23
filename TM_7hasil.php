<?php
error_reporting(0);
function tampil(){
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jKel'];
        $golongan_darah = $_POST['golDarah'];
        $hobby = $_POST['hobby'];
        $selected_hobby = "";
        foreach ($hobby as $minat){
            $selected_hobby .= $minat . ", ";
        }
        $selected_hobby = substr($selected_hobby,0,-2);
        $keterangan = $_POST['keterangan'];

        echo "<h2>Data yang Tersimpan</h2>";
        echo "<ul>";
        echo "<li>Nama : ".$nama."</li>";
        echo "<li>Alamat : ".$alamat."</li>";
        echo "<li>Jenis Kelamin : ".$jenis_kelamin."</li>";
        echo "<li>Golongan Darah : ".$golongan_darah."</li>";
        echo "<li>Hobby : ".$selected_hobby."</li>";
        echo "<li>Keterangan : ".$keterangan."</li>";
        echo "</ul>";
    }
}
tampil();
?>