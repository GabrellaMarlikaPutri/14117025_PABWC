<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menukar Angka</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="col-lg-8 col-md-8 col-sm-12 ">
    <u><h2>Menukar Angka</h2></u><br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-xs-2" for="in_nilai">Nilai Pertama</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" name="nilai1" placeholder="Masukkan Nilai Pertama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="in_nilai">Nilai Kedua</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" name="nilai2" placeholder="Masukkan Nilai Kedua">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9">
                <input type="submit" name="tukar" class="btn btn-primary" value="Tukar">
            </div>
        </div>
    </form>
    </div>
    </div>
    <?php
        error_reporting(0);
        if(isset($_GET['tukar'])){
            $angka1 = $_GET['nilai1'];
            $angka2 = $_GET['nilai2'];
            function tukar(&$angka1, &$angka2){
                $temp;
                $temp = $angka1;
                $angka1 = $angka2;
                $angka2 = $temp;
            }
            echo "Sebelum Ditukar: (".$angka1.",".$angka2.")<br>";
            tukar($angka1,$angka2);
            echo "Setelah ditukar: (".$angka1.",".$angka2.")<br>";  
        }
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

