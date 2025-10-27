<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangle</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <?php
    // 直角三角形
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    // 倒直角三角形
    for ($i = 0; $i < 5; $i++) {
        for ($j = 5; $j > $i; $j--) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    // 正三角型
    for ($i = 0; $i < 5 ; $i++) {
        for ($z = 0; $z < 4 - $i; $z++) {
            echo "&nbsp;";
        }
        for ($j = 0; $j < 2 * $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    // 矩形
    for ($i = 0; $i < 7 ; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 || $i == 6 || $j == 0 || $j == 6) {
                echo "*";
            } else {
                echo "&nbsp;";
            }

        }
        echo "<br>";
    }

    echo "<hr>";

    // 菱形
    $x = 20;
    $y = 0;

    if ($x % 2 == 0) {
        $x = $x + 1;
    }

    for ($i = 0; $i < $x ; $i++) {
        if ($i > floor($x / 2)) {
            //  一旦 $i > 4 ，$i 跑到 5，之後 $y 的值還在 4，還沒跑到5，就先執行 $y = $y - 1;
            // 所以 $y = 4 - 1 = 3，$i 跑到 6 符合條件 $i > floor($x / 2)，
            // 所以繼續執行 $y = 3 - 1 = 2，遞減下去
            $y = $y - 1;
        } else {
            $y = $i;
        }
        for ($z = 0; $z < floor($x / 2) - $y; $z++) {
            echo "&nbsp;";
        }
        for ($j = 0; $j < 2 * $y + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";

    // 矩形 對角線
    $x = 9;

    for ($i = 0; $i < $x ; $i++) {
        for ($j = 0; $j < $x; $j++) {
            if ($i == 0 || $i == ($x - 1) || $j == 0 || $j == ($x - 1) || $i == $j || ($i + $j) == ($x - 1)) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }

    echo "<hr>";

    // 菱形 對角線 
    $x = 20;
    $y = 0;

    if ($x % 2 == 0) {
        $x = $x + 1;
    }

    for ($i = 0; $i < $x ; $i++) {
        if ($i > floor($x / 2)) {
            $y = $y - 1;
        } else {
            $y = $i;
        }
        for ($z = 0; $z < floor($x / 2) - $y; $z++) {
            echo "&nbsp;";
        }
        for ($j = 0; $j < 2 * $y + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    ?>
</body>
</html>