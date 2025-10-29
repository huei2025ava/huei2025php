<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid lightslategrey;
        }
    </style>
</head>

<body>

    <?php
    // 學生成績表
    $student = [
        "judy" => ["國文" => 95, "英文" => 64, "數學" => 70, "地理" => 90, "歷史" => 84],
        "amo" => ["國文" => 88, "英文" => 78, "數學" => 54, "地理" => 81, "歷史" => 71],
        "john" => ["國文" => 45, "英文" => 60, "數學" => 68, "地理" => 70, "歷史" => 62],
        "peter" => ["國文" => 59, "英文" => 32, "數學" => 77, "地理" => 54, "歷史" => 42],
        "hebe" => ["國文" => 71, "英文" => 62, "數學" => 80, "地理" => 62, "歷史" => 64]
    ];

    // 取出第一個學生的科目名稱（用來做表頭）
    $subjects = array_keys($student["judy"]);
    ?>

    <table>
        <tr>
            <?php
            echo "<td></td>";
            foreach ($subjects as $sub) {
                echo "<td>" . $sub . "</td>";
            }
            ?>
        </tr>

        <?php
        foreach ($student as $name => $sub) {
            echo "<tr>";
            echo "<td>" . $name . "</td>";
            foreach ($sub as $key => $score) {
                echo "<td>" . $score . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <?php
    echo "<hr>";

    // 陣列99乘法表的資料

    $ninetimes = [];
    for ($i = 1; $i <= 9; $i++) {

        for ($j = 1; $j <= 9; $j++) {
            $ninetimes[] =  $i . "x" . $j . "=" . ($i * $j);
        }
    }

    echo "<pre>";
    print_r($ninetimes);
    echo "</pre>";

    // 用陣列的資料顯示表格
    //這組程式雖然呈現表格沒有出錯，但實際輸出只有第一列的<tr></tr>，其他列<tr>則是瀏覽器自動補上<tr>
    /* <table>
    <tr>1x1=1 ... 1x9=9</tr>
    2x1=2 ... 2x9=18</tr> ❌
    3x1=3 ... 3x9=27</tr> ❌
    </table> */
    echo "<table>";
    echo "<tr>";
    foreach ($ninetimes as $index => $value) {

        if (($index + 1) % 9 == 0 && $index > 0) {
            echo "<td>" . $value . "</td></tr>";
        } else {
            echo "<td>" . $value . "</td>";
        };
    }
    echo "</table>";

    echo "<hr>";
    //改良版99陣列表
    echo "<table>";
    foreach ($ninetimes as $index => $value) {
        if ($index % 9 == 0) {
            echo "<tr>";
        }
        echo "<td>" . $value . "</td>";
        if ($index % 9 == 8) {
            echo "</tr>";
        }
    }
    echo "</table>";


    // 陣列閏年
    $year = [];
    for ($year2 = 2025; $year2 < 2525; $year2++) {
        if (($year2 % 4 == 0 && $year2 % 100 != 0) || $year2 % 400 == 0) {
            $year[] = $year2;
        }
    }

    echo "<pre>";
    print_r($year);
    echo "</pre>";

    $year9 = [];
    for ($year2 = 2025; $year2 < 2525; $year2++) {
        if (($year2 % 4 == 0 && $year2 % 100 != 0) || $year2 % 400 == 0) {
            $year9[$year2] = true;
        }
    }

    echo $year9[2028];
    echo "<hr>";
    echo in_array(2352, $year);

    // 威力彩隨機號碼，無重複，用陣列
    echo "<hr>";
    echo rand(1, 38)

    ?>
</body>

</html>