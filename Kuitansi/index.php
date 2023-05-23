<?php
require "menu.php";
$jeneng= $_POST['namaPemesan'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Menu</title>
</head>
<body>
    <div class="container">
        <h1>Pilihan Menu</h1>
        <label for="">Nama Pemesan: </label>
        <input type="text" method="post" name="namaPemesan">
        <form action="kuitansi.php" method="post">
            <table class="table">
                <tr>
                    <th colspan="3">Makanan</th>
                </tr>
                <tr>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>Qty</th>
                </tr>
                <?php foreach($makanan as $key => $val): ?>
                    <tr>
                        <td><?=strtoupper($key)?></td>
                        <td><?=$val?></td>
                        <td><input type="text" name="<?=$key?>"></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <th colspan="3">Minuman</th>
                </tr>
                <tr>
                    <th>Minuman</th>
                    <th>Harga</th>
                    <th>Qty</th>
                </tr>
                <?php foreach($minuman as $key => $val): ?>
                    <tr>
                        <td><?=strtoupper(str_replace('_', ' ', $key))?></td>
                        <td><?=$val?></td>
                        <td><input type="text" name="<?=$key?>"></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3">
                        <input type="submit" value="Hitung Total">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<!-- https://kaqfa.notion.site/PHP-Array-Form-ba042467bf17487db9e1dece8f0549b9 -->