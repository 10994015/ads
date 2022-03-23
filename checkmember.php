<?php
require_once('conn.php'); 
session_start();
if(isset($_POST['username'])){
    $sql_str = "SELECT * FROM member
    WHERE username=:username AND password=:password";
    $stmt = $conn -> prepare($sql_str);
    //接收資料
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt -> bindParam(':username',$username);
    $stmt -> bindParam(':password',$password);
    //執行
    $stmt -> execute();
    $total = $stmt -> rowCount();
    if( $total >= 1 ){
        $row_RS = $stmt -> fetch(PDO::FETCH_ASSOC);
       
        $_SESSION['username']  = $row_RS['username'];   //將會員名稱記錄到SESSION系統變數
        $url = './cms.php';  //登入成功要前往的位址
     
      }else{
        //登入失敗..............登入失敗要前往的位址，並加上msg參數
        $url = './cms.php?error=1';
      }
      header('Location:'.$url); 
}

?>
