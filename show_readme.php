<?php
// 讀取 Markdown 解析器
require_once 'D:/php_libs/parsedown-master/Parsedown.php';
// ⚠ IntelliSense 會紅線，但執行時沒問題
$Parsedown = new Parsedown();

// 要顯示的檔案
$file = isset($_GET['file']) ? $_GET['file'] : 'README.md';

// 檢查檔案是否存在
if (!file_exists($file)) {
  die("找不到檔案：$file");
}

// 讀取 Markdown 內容
$markdown = file_get_contents($file);

// 轉成 HTML
$html = $Parsedown->text($markdown);
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <title>📘 <?= htmlspecialchars($file) ?></title>
  <style>
    body {
      font-family: "Microsoft JhengHei", sans-serif;
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #fafafa;
      color: #333;
      line-height: 1.8;
    }

    h1,
    h2,
    h3 {
      color: #2b5d84;
    }

    pre {
      background: #f5f5f5;
      padding: 10px;
      border-radius: 8px;
      overflow-x: auto;
    }

    code {
      background: #eee;
      padding: 2px 5px;
      border-radius: 4px;
    }

    a {
      color: #007acc;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?= $html ?>
</body>

</html>