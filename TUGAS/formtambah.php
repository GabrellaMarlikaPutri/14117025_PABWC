<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="body_1" style="background:pink; height:550px; margin: 0 0 20px">
    &nbsp<u><h3 align="center">TAMBAH DATA MAHASISWA</h3></u><br>
    <form class="form-horizontal" action="insert.php" method="post" encytpe="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-xs-2" for="nim">NIM</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="nama">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="alamat">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="id_jur">Program Studi</label>
            <div class="col-xs-9">
                <select name="id_jur" class="form-control" id="id_jur">
                    <option value="Pilih">Pilih Program Studi</option>
                    <option value="1001">Perencanaan Wilayah dan Kota</option>
                    <option value="1002">Teknik Sipil</option>
                    <option value="1003">Teknik Geomatika</option>
                    <option value="1004">Arsitektur</option>
                    <option value="1005">Teknik Lingkungan</option>
                    <option value="1006">Teknik Elektro</option>
                    <option value="1007">Teknik Geofisika</option>
                    <option value="1008">Teknik Informatika</option>
                    <option value="1009">Teknik Mesin</option>
                    <option value="1010">Teknik Industri</option>
                </select>  
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9">
                <input type="submit" name="submit" class="btn btn-primary" value="TAMBAH">
            </div>
        </div>
    </form>
    </div>

    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>