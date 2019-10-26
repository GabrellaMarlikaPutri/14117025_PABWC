<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menghitung Faktorial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="col-lg-8 col-md-8 col-sm-12 ">
    <u><h2>Menghitung Faktorial</h2></u><br>
    <form class="form-horizontal" method="get">
        <div class="form-group">
            <label class="control-label col-xs-2" for="in_nilai">Nilai</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" name="nilai" placeholder="Masukkan Nilai Yang Ingin Difaktorkan">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9">
                <input type="submit" name="hitung" class="btn btn-primary" value="Hitung">
            </div>
        </div>
    </form>
    </div>
    </div>
    <?php
        error_reporting(0);
        if(isset($_GET['hitung'])){
            $angka = $_GET['nilai'];
            function faktorial($angka){
                if($angka<=1){
                    $hitung = 1;
                    return $hitung;
                }elseif ($angka>1){
                    for($i=1; $i<=$angka; $i++){
                        $hitung=$angka * faktorial($angka-1);
                    }
                    return $hitung;
                }
            }
        echo "NIlai: ".$angka."<br>";
        echo "Faktorial dari ".$angka." adalah ".faktorial($angka)."<br>";  
        }
    ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
