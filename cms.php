<?php
#A->1
#B->3
#c->6
#d->7
#e->4
#f->5
#g->8
#h->2
require_once('conn.php'); 
session_start();

    $sql_str = "SELECT * FROM finishdata";
    $row = $conn -> query($sql_str);
    $total_user = $row -> rowCount();

    $sql_A = "SELECT * FROM information WHERE vedio='1'";
    $rowA = $conn -> query($sql_A);
    $total_A = $rowA -> rowCount();

    $sql_B = "SELECT * FROM information WHERE vedio='2'";
    $rowB = $conn -> query($sql_B);
    $total_B = $rowB -> rowCount();

    $sql_C = "SELECT * FROM information WHERE vedio='3'";
    $rowC = $conn -> query($sql_C);
    $total_C = $rowC -> rowCount();

    $sql_D = "SELECT * FROM information WHERE vedio='4'";
    $rowD = $conn -> query($sql_D);
    $total_D = $rowD -> rowCount();

    $sql_E = "SELECT * FROM information WHERE vedio='5'";
    $rowE = $conn -> query($sql_E);
    $total_E = $rowE -> rowCount();

    $sql_F = "SELECT * FROM information WHERE vedio='6'";
    $rowF = $conn -> query($sql_F);
    $total_F = $rowF -> rowCount();

    $sql_G = "SELECT * FROM information WHERE vedio='7'";
    $rowG = $conn -> query($sql_G);
    $total_G = $rowG -> rowCount();

    $sql_H = "SELECT * FROM information WHERE vedio='8'";
    $rowH = $conn -> query($sql_H);
    $total_H = $rowH -> rowCount();


   
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
    
    .box{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .box > div{
        display: flex;
        align-items: center;
    }
    .box  >div>a{
        width:200px;
    }
    img{
        width:100%;
    }
    </style>
</head>
<body>
  <div class="box">
    <div><a href="./cmsuser.php"><img src="./images/0.png" alt=""></a>有<?php echo $total_user; ?>筆</div>
    <div><a href="./cmsA.php"><img src="./images/a.png" alt=""></a>有<?php echo $total_A; ?>筆</div>
    <div><a href="./cmsB.php"><img src="./images/b.png" alt=""></a>有<?php echo $total_B; ?>筆</div>
    <div><a href="./cmsC.php"><img src="./images/c.png" alt=""></a>有<?php echo $total_C; ?>筆</div>
    <div><a href="./cmsD.php"><img src="./images/d.png" alt=""></a>有<?php echo $total_D; ?>筆</div>
    <div><a href="./cmsE.php"><img src="./images/e.png" alt=""></a>有<?php echo $total_E; ?>筆</div>
    <div><a href="./cmsF.php"><img src="./images/f.png" alt=""></a>有<?php echo $total_F; ?>筆</div>
    <div><a href="./cmsG.php"><img src="./images/g.png" alt=""></a>有<?php echo $total_G; ?>筆</div>
    <div><a href="./cmsH.php"><img src="./images/h.png" alt=""></a>有<?php echo $total_H; ?>筆</div>
  </div>
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