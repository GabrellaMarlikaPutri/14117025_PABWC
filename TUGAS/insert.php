<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['id_jur'];

$sql = "INSERT INTO mahasiswa VALUES('".$nim."','".$nama."','".$alamat."','".$jurusan."')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
    echo "Data berhasil ditambahkan";
    header("location: formtampil.php");
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
    echo "<br><a href='formtambah.php'>Kembali Ke Form</a>";
}

mysqli_close($koneksi);
?>
