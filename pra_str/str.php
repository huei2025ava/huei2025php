<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h2>字串取代</h2>
    <li>將"aaaa123"改成"*******"</li>
    <?php
    $str = "aaaa123";
    $masked = str_repeat('*', mb_strlen($str));

    echo "<hr>";
    echo "原字串".$str;
    echo "<br>";
    echo "取代後".$masked;
    ?>
    <h2>字串分割</h2>

    <li>將"this,is,a,book"依","切割後為陣列</li>
    <?php
    $str = "this,is,a,book";
    $newstr = explode(",", $str);
    echo "<pre>";
    print_r($newstr);
    echo "</pre>";
    ?> 

    <h2>字串組合</h2>

    <li>將上例陣列重新組合成"this is a book"</li>
    <?php
    $combine = join(" ", $newstr);
    echo"<hr>";
    echo $combine;
    ?>

    <h2>子字串取用</h2>

    <li>將"The reason why a great man is great is tht he resolves to be a great man”只取前十字成為” The reason…"</li>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $pre=mb_substr($str,0,10);

    echo $pre;
    echo "...";
    ?>

    <h2>尋找字串與HTML、css整合應用</h2>

    <li>給定一個句子，將指定的關鍵字放大</li>
    <li>“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
    <li>請將上句中的 “程式設計” 放大字型或變色.</li>

    <?php 
    $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
    $keyword="程式設計";
    $change="<span style='font-size: 26px;color: lightcoral';>{$keyword}</span>";

    $target=str_replace($keyword,$change,$str);
    echo $target;
    ?>
</body>
</html>