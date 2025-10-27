<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
</head>
<body>
    <?php
  $sentence = "l love Money happy in to";
    // strlen()只適用英文長度
    $lengh = strlen($sentence);
    $word = "n";
    $isWord = false;
    $i = 0;
    $count = 0;

    while ($i < $lengh) {
        if ($word == $sentence[$i]) {
            $isWord = true;
            echo "第" . ($i + 1) . "個位置，找到" . $sentence[$i] . "了<br>";
        }
        $i++;
        $count++;
    }

    if (!$isWord) {
        echo "找不到";
    }

    echo "迴圈次數".$count;

    echo "<hr>";

    // 適用英文和中文
    //  mb_substr;
    //  mb_strlen();

    $str = "需要我把這個概念變成一個練習題（引導式，不直接引導給答案";
    $search = "引導";
    $isRight = false;
    $j = 0;
    $long = mb_strlen($str) - mb_strlen($search) + 1;

    while ($isRight = false && $j <= $long) {
        $target = mb_substr($str, $j, mb_strlen($search));
        if ($search == $target) {
            $isRight = true;
            echo "第" . ($j + 1) . "個位置，找到" .$search . "了<br>";
        }
        $i++;
    }

    if (!$isRight) {
        echo "找不到";
    }

    ?>
</body>
</html>