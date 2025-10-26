<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For</title>
</head>

<body>
  <?php

  // 三元運算子
  $score = 100;

  $level = ($score >= 60) ? "及格" : "不及格";

  // if($score>=60){
  //     $level='及格';
  // }else{
  //     $level='不及格';
  // }

  echo $level;

  echo "<hr>";
  echo "for";
  echo "<br>";

  for ($i = 1; $i < 30; $i = $i + 2) {
    echo  $i . ",";
  }

  echo "<br>";

  for ($i = 1; $i < 10; $i = $i + 1) {
    echo  $i * 10 . ",";
  }

  echo "<br>";

  $count = 0;
  for ($i = 3; $i < 100; $i++) {

    // $isPrime 設定是質數為 true
    $isPrime = true;

    // 開根號減少迴圈次數，+1 是因為，如果$i = 4，sqrt(4)=2
    // 2 不大於 $j = 2 ，條件不成立，不跑迴圈，維持 $isPrime = true;
    // 變成 $i = 4 是質數，結果不正確， +1 才可以檢查到 2 
    for ($j = 2; $j <  sqrt($i) + 1; $j++) {
      $count++;
      if ($i % $j == 0) {
        $isPrime = false;
        // echo "不是質數" . "<br>";    
        break;
      }
    }
    if ($isPrime) {
      echo $i . "<br>";
    }
  }
  echo "<br>";
  echo "一共執行" . $count . "次迴圈";

  ?>
</body>

</html>