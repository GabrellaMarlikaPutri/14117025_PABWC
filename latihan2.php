<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengitung Harga Bet Nama</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="col-lg-8 col-md-8 col-sm-12 ">
    <u><h2>Menghitung Harga Bet Nama</h2></u><br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-xs-3">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Warna yang Diinginkan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="warna" placeholder="Masukkan Warna Font dalam B.Inggris">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
    </div>
    </div>
    <?php
        error_reporting(0);
        if(isset($_GET['submit'])){
            function betNama($nama, $warna="red"){
                $harga;
                $jumlah = strlen($nama);
                if($jumlah <= 10){
                    $harga = $jumlah*300;
                }else if($jumlah < 20){
                    $harga = $jumlah*500;
                }else{
                    $harga = $jumlah*700;
                }
                echo 'Nama yang Dipesan = <font color="'.$warna.'">'.$nama.'</font><br>Total harga = '.$harga.'<br>';
            }
            $nama = $_GET['nama'];
            $warna = $_GET['warna'];
            if(empty($warna)){
                betNama($nama);
            }else{
                betNama($nama, $warna);
            }
        }
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>