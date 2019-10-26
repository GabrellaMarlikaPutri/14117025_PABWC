<?php
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HASIL INPUT FORM</title>
</head>
<body style="background:pink; height:550px; margin: 0 0 20px">
<u><h2 align="center">HASIL INPUT FORM</h2></u><br>
    <table class="table" align="center" border="1" cellpadding="5">
    <thead>
        <tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>GOLONGAN DARAH</th>
            <th>HOBBY</th>
            <th>KETERANGAN</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $nama; ?></td>
            <td><?= $alamat; ?></td>
            <td><?= $jenis_kelamin; ?></td>
            <td><?= $golongan_darah; ?></td>
            <td><?= $selected_hobby; ?></td>
            <td><?= $keterangan; ?></td>
        </tr>
    </tbody>
    </table>
</body>
</html>