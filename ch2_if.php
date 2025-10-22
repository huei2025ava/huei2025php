<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>if 選擇結構</title>
</head>

<body>

  <?php
  $score = 11;

  if ($score <= 59 && $score >= 0) {
    $level = "E";
  } else if ($score <= 69 && $score >= 60) {
    $level = "D";
  } else if ($score <= 79 && $score >= 70) {
    $level = "C";
  } else if ($score <= 89 && $score >= 80) {
    $level = "B";
  } else if ($score <= 100 && $score >= 90) {
    $level = "A";
  } else if ($score < 0 || $score > 100) {
    $level = "分數錯誤";
  }

  echo $level;

  echo "<hr>";
  // 簡化程式碼
  $score = 99;

  // 早出（early return）思維
  // 錯誤狀況一開始就處理掉 

  if ($score < 0 || $score > 100) {
    $level = "分數錯誤";
  } else if ($score <= 59) {
    $level = "E";
  } else if ($score <= 69) {
    $level = "D";
  } else if ($score <= 79) {
    $level = "C";
  } else if ($score <= 89) {
    $level = "B";
  } else {
    $level = "A";
  }

  echo $level;


  echo "<hr>";

  // 適合複雜或多模組化流程
  // 需要用 exit 或 return 來防止繼續執行

  $score = -77;

  if ($score < 0 || $score > 100) {
    echo "分數錯誤";
    exit();
  }
  if ($score <= 59) {
    echo "E";
    exit();
  }
  if ($score <= 69) {
    echo "D";
    exit();
  }
  if ($score <= 79) {
    echo "C";
    exit();
  }
  if ($score <= 89) {
    echo "B";
    exit();
  }
  echo "A";
  exit();


  ?>
</body>

</html>