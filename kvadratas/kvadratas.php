<?php

$first = [
    [2, 9, 4],
    [7, 5, 3],
    [6, 1, 8]
];

//$second = [
//    [12, 17, 16],
//    [12, 15, 11],
//    [14, 13, 18]
//];

$lines = [];
for ($i = 0; $i < count($first); $i++){
    $lines[$i] =  array_sum($first[$i]);
}

$rows = [];
for ($i = 0; $i < count($first[0]); $i++){
    $rows[$i] = 0;
        for ($j = 0; $j < count($first); $j++) {
            $rows[$i] += $first[$j][$i];
        }
}

$diagonalFirst = 0;
$diagonalSecond = 0;

for ($i = 0; $i < count($first); $i++){
    $diagonalFirst += $first[$i][$i];
    $diagonalSecond += $first[$i][count($first) - $i - 1];
}


$sum = $lines[0];               // Suma priskiriama pirmos eilutes sumai


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="kvadratas.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navigacija</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="kvadratas.php">Kvadratas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../skelbimai/skelbimai.php">Skelbimai</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header">
        <h1>Magiškasis kvadratas</h1>
        <div class="brd">
            <form action="" method="post" class="form">

            </form>
            <div class="result">
                <h3 id="text">Rezultatas:</h3>
                <span id="span"><?php
                        if (array_sum($lines) == count($lines) * $sum && array_sum($rows) == count($rows) * $sum && $diagonalFirst == $sum && $diagonalSecond == $sum) {
                            echo "Kvadratas yra magiškasis";
                        } else {
                            echo "Kvadratas yra nemagiškas";
                        }
                        ?>
                </span>
            </div>
        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
