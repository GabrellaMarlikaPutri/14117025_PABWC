<?php
include "koneksi.php";

$nim = $_GET['nim'];

$sql = "DELETE FROM mahasiswa WHERE nim='".$nim."'";
$query =  mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
    echo "Data berhasil dihapus";
    header("location: formtampil.php");
}else{
    echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>