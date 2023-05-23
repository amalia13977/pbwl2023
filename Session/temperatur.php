<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $suhu = $_POST['suhu'];
    $temp1 = $_POST['temp1'];
    $temp2 = $_POST['temp2'];
    $result = hitung($temp1, $temp2, $suhu);
}

function hitung($temp1, $temp2, $suhu){
    if($temp1 == 'celcius'){
        if($temp2 == 'celcius'){
            return $suhu;
        } else if($temp2 == 'fahrenheit'){
            return ($suhu * 5/9) + 32;
        } else if($temp2 == 'kelvin'){
            return $suhu + 273;
        }
    }
    else if($temp1 == 'fahrenheit'){
        if($temp2 == 'celcius'){
            return ($suhu - 32)*5/9; 
        } else if($temp2 == 'fahrenheit'){
            return $suhu;
        } else if($temp2 == 'kelvin'){
            return ($suhu - 32)*5/9 + 273;
        }
    }
    else if($temp1 == 'kelvin'){
        if($temp2 == 'celcius'){
            return $suhu - 273; 
        } else if($temp2 == 'fahrenheit'){
            return ($suhu-273)*5/9+32;
        } else if($temp2 == 'kelvin'){
            return $suhu;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Temperatur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 3%; border: solid grey 0.5px; border-radius: 20px; padding: 3%; text-align: center; width: 1000px;">
        <h1>Program Konversi Temperatur</h1>
        <hr>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Masukkan angka temperatur</label>
                <input type="number" class="form-control" name="suhu">
            </div>
            <table class="table">
                <tr>
                    <td>
                        <select name="temp1">
                            <option value="celcius"> derajat Celcius </option>
                            <option value="fahrenheit"> derajat Fahreheit </option>
                            <option value="kelvin"> Kelvin </option>
                        </select>
                    </td>
                    <td>ubah ke</td>
                    <td>
                        <select name="temp2">
                            <option value="celcius"> derajat Celcius </option>
                            <option value="fahrenheit"> derajat Fahreheit </option>
                            <option value="kelvin"> Kelvin </option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary" style="padding-left: 48%; padding-right: 48%;">Hitung</button>
            <br><br>
            <?php if(isset($_POST['suhu'])){ ?>
            <h1 style="color: blue;"><?=$result?></h1>
            <?php } ?>
        </form>
    </div>
    <br>
    <button class="btn btn-primary" style="margin-left: 18%">
        <a href="index.php" style="color: white; text-decoration: none;">Kembali</a>
    </button>
</body>
</html>