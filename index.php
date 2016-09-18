<?php
require_once('libs/kontroler.php');
require_once('libs/model.php');
require_once('libs/widok.php');

$kontroler = new Kontroler();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo MVC</title>
    <style>
        body {
            font-family: sans-serif;
        }
        td, th {
            padding: 10px;
        }
        th {
            text-align: center;
        }
        td:not(:first-child) {
            min-width: 40px;
        }
        td {
            border-top: solid 1px #ccc;
        }
        table {
            margin-bottom: 20px; border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="index.php?usun" method="post">
        <div>
        <?php
            $kontroler->renderujWidok(); 
        ?>
        </div>
        <div><input type="submit" value="Usuń zaznaczony"></div>
    </form>
    <hr>
    <form action="index.php?dodaj" method="post">
        <div>
            Dodaj samochód: <input type="text" name="s_marka" placeholder="Marka...">
             <input type="text" name="s_seria" placeholder="Seria...">
             <input type="text" name="s_kolor" placeholder="Kolor...">
             <input type="submit" value="Dodaj">
        </div>
    </form>
</body>
</html>

