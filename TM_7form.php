<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibel" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="body_1" style="background:pink; height:550px; margin: 0 0 20px">
    &nbsp<u><h2 align="center">FORMULIR BIODATA</h2></u><br>
    <form class="form-horizontal" action="TM_7hasil.php" method="post">
        <div class="form-group">
            <label class="control-label col-xs-2" for="nama">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Data Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="alamat">Alamat</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="jKel">Jenis Kelamin</label>
            <div class="col-xs-8">
                <div class="radio-inline">
                    <label><input type="radio" name="jKel" value="Perempuan">Perempuan</label>
                </div>
                <div class="radio-inline">
                <label><input type="radio" name="jKel" value="Laki-laki">Laki-laki</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="GolD">Golongan Darah</label>
            <div class="col-xs-9">
                <select name="golDarah" class="form-control">
                    <option value="">Pilih Golongan Darah</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                    <option value="AB">AB</option>
                </select>  
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="Hobby">Hobby</label>
            <div class="col-xs-9">
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Membaca">Membaca</label>    
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Menulis">Menulis</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Menari">Menari</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Menggambar">Menggambar</label>
                </div>
                <div class="checkbox-inline">
                    <label><input type="checkbox" name="hobby[]" value="Lainnya">Lainnya</label>
                </div>               
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-2" for="Keterangan">Keterangan</label>
            <div class="col-xs-9">
               <textarea name="keterangan" rows="5" class="form-control" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
        </div>
    </form>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>