<?php
session_start();
if(!isset($_SESSION['user']) || (trim($_SESSION['user']) == '')){
    header('location:index.php');
}

include_once('user.php');
$user = new user();

$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
$row = $user->details($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Login Authentication OOP PABW</title>
</head>
<body>
    <div>
        <h1>PHP Login Authentication OOP PABW</h1>
        <div>
            <div>
                <h2>Selamat Datang di Dashboard</h2>
                <h4>User Info: </h4>
                <p>Name: <?php echo $row['fname']; ?></p>
                <p>Username: <?php echo $row['username'];?></p>
                <p>Password: <?php echo $row['password'];?></p>
                <a href="logout.php"><span></span> Logout</a>
            </div>
        </div>
    </div>
</body>
</html>