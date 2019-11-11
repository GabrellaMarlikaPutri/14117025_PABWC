<?php
setcookie("user", "", time() - 3600);
?>

<html>
<body>
    <?php
        echo "Cookie 'user' terhapus.";
    ?>
</body>
</html>