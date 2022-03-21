<?php

require_once('conn.php'); 
    $sql_str = "SELECT * FROM information ORDER BY id ASC";
    $row = $conn -> query($sql_str);
   
   
?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .user{
        border-bottom: 1px #333 solid;
    }
    </style>
</head>
<body>
    <?php foreach($row as $item){ ?>
        <div class="user">
            <p>秒數: <?php echo $item['second']; ?></p>
            <p>第一題分數: <?php echo $item['q1']; ?></p>
            <p>第二題分數: <?php echo $item['q2']; ?></p>
            <p>第三題分數: <?php echo $item['q3']; ?></p>
            <p>第四題分數: <?php echo $item['q4']; ?></p>
            <p>第五題分數: <?php echo $item['q5']; ?></p>
            <p>第六題分數: <?php echo $item['q6']; ?></p>
        </div>

    <?php } ?>
</body>
</html>