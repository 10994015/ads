<?php
require_once('conn.php'); 
ini_set ( 'date.timezone' , 'Asia/Taipei' );  
date_default_timezone_set('Asia/Taipei');
if(isset($_POST['code']) && $_POST['code'] !=""){
    try{
        $timeEnd = date("Y-m-d H:i:s");
        $code = $_POST['code'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $network = $_POST['network'];
        $sql_str = "INSERT INTO finishdata (code,gender,age,network,timeEnd) VALUES (:code,:gender,:age,:network,:timeEnd)";
        $stmt = $conn -> prepare($sql_str);
        $stmt -> bindParam(':code' ,$code);
        $stmt -> bindParam(':gender' ,$gender);
        $stmt -> bindParam(':age' ,$age);
        $stmt -> bindParam(':network' ,$network);
        $stmt -> bindParam(':timeEnd' ,$timeEnd);
        $stmt ->execute();

        header("Location:finish.php");
    }catch (PDOException $e ){
        die("Error!: ". $e->getMessage());
      }
}