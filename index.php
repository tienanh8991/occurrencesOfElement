<?php

include "function/occurrence.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $num = $_REQUEST["number"];
    $numbers = [1, 2, 3, 5, 1, 2, 9, 8, 5, 6, 1, 3, 5, 9, 7, 4, 3, 5, 9, 7, 6, 2];
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="text" name="number">
    <button>check</button>
</form>
<div>
    <?php if (isset($num)) {
        echo "Số lần xuất hiện của phần tử " . $num . " là : " . occurrenceCheck($numbers, $num);
    }
    ?>
</div>
</body>
</html>
