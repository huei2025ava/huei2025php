<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h2>給定兩個日期，計算中間間隔天數</h2>
    <?php
    $day1 = "2025-11-03";
    $day2 = "2025-11-08";

    // 顯示秒數，代表從「1970/01/01 00:00:00 UTC」到現在的秒數
    $start = strtotime($day1);
    $end = strtotime($day2);

    $days = floor(abs($end - $start) / 86400) - 1;

    echo $day1."與".$day2."之間有 ".$days."天";
    ?>

    <h2>計算距離自己下一次生日還有幾天</h2>
       <?php
    $birthday = "2000-05-02";
    $now = date("Y-m-d");

    $days = floor(abs($end - $start) / 86400) - 1;


    echo "生日".$birthday;
    echo "<br>";
    echo "現在日期 ".$now." 到下次生日還有".$days."天";
    ?>
</body>
</html>