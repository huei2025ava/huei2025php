<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
        <style>;
        .container-table{
        margin: auto;
        }
        table{
        border-collapse:collapse;
        max-width:60%;
        min-width:500px;
        margin: 10px auto;
        }    
        table td,table th{
        border:1px solid #999;
        padding:5px 10px;
        text-align:center;
        }
        table th{
        background:skyblue;
        }
        /* flex-box的月曆 */
        .container {
            width: 700px;
            display: flex;
            flex-wrap: wrap;     
            margin: auto;         
        }
        .container div {
            background-color: antiquewhite;
            width: calc(650px / 7) ;
            height: 100px;
            text-align: center;
            line-height: 100px;
            border: 1px solid black;
            
        }
</style>
<h2>月曆製作提示</h2>;
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

    $today = strtotime("now");
    echo "今天是:".date("Y-m-d");
    echo "<br>";
    $targetDay = date("Y-m-d");
    $Ttime = strtotime($targetDay);
    $month = date("m", $Ttime);
    echo "月份:".$month;
    echo "<br>";
    $firstDayMonth = date("Y-m-1", $Ttime);
    echo "本月第一天:".$firstDayMonth;
    echo "<br>";
    $firstWeek = date("w", strtotime($firstDayMonth));
    echo "<br>";
    echo "這個月1號是星期:".$firstWeek;
    echo "<br>";
    $monthDays = date("t", $Ttime);
    echo "這個月有 ".$monthDays."天";
    echo "<br>";
    $monthWeeks = ceil(($monthDays + $firstWeek) / 7);
    echo "這個月有 ".$monthWeeks." 周";
    echo "<br>";
    $tableFirstDay = strtotime("-$firstWeek days", strtotime($firstDayMonth));
    echo "這個月曆第一格的日期為:". date("Y-m-d", $tableFirstDay);
    echo "<br>";


    //開始畫月曆

    echo "<h2 style='text-align:center'>".$month."月</h2>";
    echo "<div class='container-table'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>日</th>";
    echo "<th>一</th>";
    echo "<th>二</th>";
    echo "<th>三</th>";
    echo "<th>四</th>";
    echo "<th>五</th>";
    echo "<th>六</th>";
    echo "</tr>";


    for ($i = 0;$i < $monthWeeks * 7;$i++) {
        // 簡短版
        if ($i % 7 == 0) {
            echo "<tr>";
        }

        $currentDate = strtotime("+$i days", $tableFirstDay);
        $style = "";
        if (date("m", $currentDate) !== $month) {
            $style .= "color:lightgray;";
        }

        if ((date("w", $currentDate) == 6) || date("w", $currentDate) == 0) {
            $style .= "background-color: lightpink;";
        }

        echo "<td style='$style'>";
        echo date("d", $currentDate);
        echo "</td>";

        if ($i % 7 == 6) {
            echo "</tr>";
        }
    }
    echo "</table>";
    echo "</div>";

    // 用flex-box製作月曆(因為要做行事曆放代辦事項等多種功能，用table很難做，div比較好處理)
    echo "<div class='container'>";
    for ($i = 0; $i < $monthWeeks * 7; $i++) {
        echo"<div>";
        echo date("d", strtotime("+$i days", $tableFirstDay));
        echo "</div>";
    }
    echo "</div>";
    ?>
</body>
</html>