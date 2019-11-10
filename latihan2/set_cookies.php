<?php
$cookie_name = "user";
$cookie_value = "Praktikum PABW";
setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");
?>

<html>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie '".$cookie_name."' tidak diset!";
        }else{
            echo "Cookie '".$cookie_name."' sudah diset!<br>";
            echo "NIlainya adalah: ".$_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>