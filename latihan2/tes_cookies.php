<?php setcookie("test_cookie", "test", time() + 3600, '/'); ?>
<html>
<body>
    <?php if(count($_COOKIE) > 0){
        echo "Cookies enabled.";
    }else{
        echo "Cookies disabled.";
    } ?>
<!-- Hasilnya Cookies disabled karena cookie belum diaktifkan atau digunakan.
     Karena setelah menambahkankan domain dan menambahkan httponly menjadi 0 outputnya menjadi cookies enabled
     Dan mengapa saat kita menggunaka icognito browser cookiesnya disabled karena dengan menggunakan fitur icognito apa yang kita lakukan tidak akan tercatat termasuk cookiesnya-->
</body>
</html>