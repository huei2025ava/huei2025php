<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      border-collapse: collapse;
      text-align: center;
      width: 400px;
      background-color: lightgray;
    }

    td {
      width: 20px;
    }

    div {
      width: 400px;
      border: 1px solid black;
      padding: 5px;
    }
  </style>
</head>

<body>

<div>
    <?php
    $count = 0;

    echo "<table border = 1>";
    for ($i = 0; $i <= 9; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= 9; $j++) {

        $result = $i * $j;
        $count++;
        if ($i == 0 && $j == 0) {

          echo "<td></td>";
        } else if ($i == 0) {
          echo "<td>{$j}</td>";
        } else if ($j == 0) {
          echo "<td>{$i}</td>";
        } else {
          echo "<td style='background-color:white;'>" . $result . "</td>";
        }
        // echo "<td>{$i}/{$j}/{$result}</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "一共執行" . $count . "迴圈";
    ?>
  </div>

  <div>
    <?php

    // 右上消失版
    $count = 0;

    echo "<table border = 1>";
    for ($i = 0; $i <= 9; $i++) {
      echo "<tr>";
      for ($j = 0; $j <= 9; $j++) {

        $result = $i * $j;
        $count++;
        if ($i == 0 && $j == 0) {

          echo "<td></td>";
        } else if ($i == 0) {
          echo "<td>{$j}</td>";
        } else if ($j == 0) {
          echo "<td>{$i}</td>";
          // 看x ， y軸的概念，因為要消失的td位置，$j 都大於 $i
        } else if($i < $j){
          echo "<td></td>";
        } else {
          echo "<td style='background-color:white;'>" . $result . "</td>";
        }
        // echo "<td>{$i}/{$j}/{$result}</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "一共執行" . $count . "迴圈";
    ?>
  </div>
</body>

</html>