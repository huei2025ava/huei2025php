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

    <p>將"The reason why a great man is great is tht he resolves to be a great man”只取前十字成為” The reason…"</p>
    <?php
    $str="The reason why a great man is great is that he resolves to be a great man";
    $pre=mb_substr($str,0,10);

    echo $pre;
    echo "...";
    ?>
</body>
</html>