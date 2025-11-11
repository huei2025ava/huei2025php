<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>GET / POST 練習</title>
  <style>
    body {
      font-family: "微軟正黑體";
      background-color: #a6dbb7ff;
      margin: 0;
      padding: 0;
    }
    h2 {
      text-align: center;
      margin-top: 40px;
      color: #333;
    }
    .container {
      width: 90%;
      max-width: 600px;
      background: white;
      margin: 30px auto;
      padding: 20px 30px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    label {
      font-weight: bold;
    }
    input[type="text"], input[type="password"] {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: #44634fff;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #44634fff;
    }
    /*  萬年曆樣式 */
    .calendar {
      width: 100%;
      border-collapse: collapse;
      text-align: center;
    }
    .calendar th {
      background-color: #44634fff;
      color: white;
      padding: 8px;
    }
    .calendar td {
      padding: 10px;
      border: 1px solid #ddd;
    }
    .today {
      background-color: #ffeeba;
      font-weight: bold;
    }
    .weekend {
      color: red;
    }
    .nav {
      display: flex;
      justify-content: space-between;
      margin: 10px 0;
    }
    .nav a {
      color: #2e3a38ff;
      text-decoration: none;
      font-weight: bold;
    }
    .nav a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- 登入功能 -->
  <h2>POST：登入檢查</h2>
  <div class="container">
    <form action="practice.php" method="post">
      <label for="account">帳號：</label>
      <input type="text" id="account" name="account" required>

      <label for="password">密碼：</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="登入">
    </form>
  </div>

  <!-- 萬年曆功能 -->
  <h2>GET：萬年曆</h2>
  <div class="container">
    <div class="nav">
      <a href="?month=<?php echo date('m', strtotime('-1 month')); ?>&year=<?php echo date('Y', strtotime('-1 month')); ?>">← 上個月</a>
      <span>
        <?php echo date("Y 年 m 月"); ?>
      </span>
      <a href="?month=<?php echo date('m', strtotime('+1 month')); ?>&year=<?php echo date('Y', strtotime('+1 month')); ?>">下個月 →</a>
    </div>

    <table class="calendar">
      <tr>
        <th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th>
      </tr>

      <?php
  
      ?>
    </table>
  </div>

</body>
</html>
