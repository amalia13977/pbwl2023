<?php 
    session_start();

    $tutorialList = array(
        'https://youtu.be/TaBWhb5SPfc' => "Programmer Zaman Now",
        'https://youtu.be/l1W2OwV5rgY' => "Web Programming UNPAS",
        'https://www.youtube.com/watch?v=OK_JCtrrv-c' => "FreeCodecamp",
        'https://phptherightway.com/' => "PHP The Right Way",
        'https://www.geeksforgeeks.org/php-tutorials/' => "Geeks for Geeks"
    );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top: 3%; text-align: center; width: 800px; border: solid 0.5px grey; padding: 3%; border-radius: 20px">
        <h1>List Tutorial PHP</h1>
        <hr>
        <ul class="list-group" style="text-align: left;">
            <?php foreach($tutorialList as $desc => $title) { ?>
                <li class="list-group-item list-group-item-action">
                    <a href="<?php echo $desc; ?>" style="text-decoration: none;"><?php echo $title; ?></a>
                </li>
            <?php } ?>
        </ul>
        <br>
        <button class="btn btn-primary">
            <a href="index.php" style="color: white; text-decoration: none;">Kembali</a>
        </button>
    </div>
</body>
</html>