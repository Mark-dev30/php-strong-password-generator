<?php
include __DIR__ . '/../functions.php';
session_start();


$_SESSION['value'] = $_GET['value'];
var_dump($_SESSION['value']);

if (!empty($_SESSION['value'])) {
    echo 'ciao';
} else {
    /* header('Location:./index.php'); */
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Password</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 password py-3">
                <h3><?php echo (isset($value) && $value !== '') ? generatePassword($value, $charact) : 'Nessun Parametro inserito' ?></h3>
            </div>
        </div>
    </div>
</body>

</html>