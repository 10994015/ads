<?php
require_once('conn.php'); 
if(isset($_POST['code']) && $_POST['code'] !=""){
    try{
        $code = $_POST['code'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $network = $_POST['network'];
        $sql_str = "INSERT INTO finishdata (code,gender,age,network) VALUES (:code,:gender,:age,:network)";
        $stmt = $conn -> prepare($sql_str);
        $stmt -> bindParam(':code' ,$code);
        $stmt -> bindParam(':gender' ,$gender);
        $stmt -> bindParam(':age' ,$age);
        $stmt -> bindParam(':network' ,$network);
        $stmt ->execute();

        header("Location:finish.php");
    }catch (PDOException $e ){
        die("Error!: ". $e->getMessage());
      }
}