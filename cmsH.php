<?php
#A -> 
require_once('conn.php'); 
session_start();

    $sql_str = "SELECT * FROM information WHERE vedio='8' ORDER BY id ASC";
    $row = $conn -> query($sql_str);

   $list = 0;
if(isset($_SESSION['username'])){
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
    table{
        margin:50px auto;
    }
    td{
        width:60px;
        text-align: center;
    }
    .list{
        background-color: #ddd;
    }
    .titleImg{
        position: fixed;
        top: 30px;
        left:40px;
    }
    </style>
</head>
<body>
<img src="./images/h.png" alt="" class="titleImg" />
<table class="user" border="1">
        <tr>
            <td> </td>
            <td>秒數</td>
            <td>%數</td>
            <td>T/F</td>
            <td>第一題</td>
            <td>第二題</td>
            <td>第三題</td>
            <td>第四題</td>
            <td>第五題</td>
            <td>第六題</td>
            <td>第七題</td>
            <td>第八題</td>
            <td>第九題</td>
        </tr>    
    <?php foreach($row as $item){ ?>
        <?php $list++; ?>
        <tr>
        <td class='list'><?php echo $list;?></td>    
        <td><?php echo $item['second']; ?></td>
        <td><?php echo round(intval($item['second'])/28,3)*100; ?>%</td>
        <td><?php if((intval($item['second'])/28) == 1){echo "T";}else{echo "F";} ?></td>
        <td><?php echo $item['q1']; ?></td>
        <td><?php echo $item['q2']; ?></td>
        <td><?php echo $item['q3']; ?></td>
        <td><?php echo $item['q4']; ?></td>
        <td><?php echo $item['q5']; ?></td>
        <td><?php echo $item['q6']; ?></td>
        <td><?php echo $item['q7']; ?></td>
        <td><?php echo $item['q8']; ?></td>
        <td><?php echo $item['q9']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>

<?php }else{ ?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=3.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    form{
        width:500px;
        margin:50px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    input {
        width:300px;
        margin:10px 0;
        height: 30px;
    }
    </style>
</head>
<body>
    <form action="checkmember.php" method="post">
        <h1>登入</h1>
        <input type="text" name="username" placeholder="帳號">
        <input type="password" name="password" placeholder="密碼">
        <input type="submit" value="登入">
    </form>
</body>
</html>

<?php } ?>