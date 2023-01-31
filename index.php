<?php
$charact = ['1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '@', '#', '?', '!', '*', '+', '&', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
$value = $_GET['value'];

function generatePassword($value, $charact)
{
    $value = intval($_GET['value']);
    $password = '';
    for ($i = 0; $i <= $value; $i++) {
        $randNumber = rand(0, count($charact));
        $password .= $charact[$randNumber];
    }
    return $password;
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3><?php echo (isset($value) && $value !== '') ? generatePassword($value, $charact) : 'Nessun Parametro inserito' ?></h3>
            </div>
        </div>
        <div class="row">
            <form action="index.php" class="d-flex" method="$_GET">
                <div class="col-6">
                    <h4>Lunghezza Password:</h4>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
                <div class="col-6">
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Inserisci la lunghezza della password" name="value">
                    <datalist id="datalistOptions">
                        <option value="8">
                        <option value="10">
                        <option value="12">
                        <option value="15">
                        <option value="20">
                    </datalist>
                </div>
            </form>
        </div>
    </div>
</body>

</html>