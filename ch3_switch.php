<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
</head>

<body>
  <?php

  $level = "A";

  switch ($level) {
    case "A":
      echo "表現優良，請繼續保持";
      break;
    case "B":
      echo "值得肯定，還有進步空間";
      break;
    case "C":
      echo "需要更多的練習";
      break;
    case "D":
      echo "需要加強基本功";
      break;
    default:
      echo "是否無心學業?";
  }

  echo "<hr>";

  $fruit = "mango";

  switch ($fruit) {
    case 'banana':
    case 'mango':
    case 'pineapple':
      echo "熱帶水果";
      break;

    default:
      echo "其他水果";
  }
  ?>
</body>

</html>