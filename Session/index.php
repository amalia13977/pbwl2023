<?php
session_start();

if(isset($_POST['name'])){
    $_SESSION['username'] = $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container" style="margin-top: 3%; border: solid grey 0.5px; border-radius: 20px; padding: 3%; text-align: center; width: 1000px;">
        <h1>Selamat Datang di Aplikasi Latihan PHP</h1>
        <?php if(isset($_SESSION['username'])){ ?>
            <h1>Halo <?php echo $_SESSION['username']; ?>!</h1>
            <hr>
            <h5 style="color: blue;"><b>Silahkan pilih menu berikut:</b></h5>
            <ul class="list-group" style="text-align: left;">
                <li class="list-group-item list-group-item-action">
                    <a href="tutorial.php" style="text-decoration: none;">List Tutorial PHP</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="temperatur.php" style="text-decoration: none;">Program Konversi Temperatur</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="logout.php" style="text-decoration: none;">Keluar</a>
                </li>
            </ul>
        <?php } else{ ?>
            <form action="" method="POST">
                <hr>
                <h5><b>Nama User</b></h5>
                <input type="text" name="name" id="name"><br><br>
                <button type="submit" class="btn btn-primary">Masuk</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>