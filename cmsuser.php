<?php
#A -> 
require_once('conn.php'); 
session_start();

    $sql_str = "SELECT * FROM finishdata ORDER BY id ASC";
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
        width:120px;
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
<img src="./images/0.png" alt="" class="titleImg" />
<table class="user" border="1">
        <tr>
            <td> </td>
            <td>性別</td>
            <td>年齡</td>
            <td>網路</td>
            <td>時間</td>
            <td>-</td>
        </tr>    
    <?php foreach($row as $item){ ?>
        <?php $list++; ?>
        <tr>
        <td class='list'><?php echo $list;?></td>    
        <td><?php echo $item['gender']; ?></td>
        <td><?php echo $item['age']; ?></td>
        <td><?php echo $item['network']; ?></td>
        <td><?php echo $item['timeEnd']; ?></td>
        <td><a href="userdata.php?code=<?php echo $item['code'];?>">查看</a></td>
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