<?php
include "koneksi.php";

$nim = $_GET['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['id_jur'];


    $sql = "UPDATE mahasiswa SET nama='".$nm."', alamat='".$alamat."', id_jur='".$jurusan."' WHERE nim='".$nim."'";
    $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
    
    if($query){
        echo "Data berhasil ditambahkan";
        header("location: formtampil.php");
    }else{
        echo "Error: ".$sql."<br>".mysqli_error($koneksi);
        echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
    } 
?>