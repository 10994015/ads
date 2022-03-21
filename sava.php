<?php 
require_once('conn.php');

if(isset($_POST['second']) && $_POST['second'] != ""){
    try{
        $sql_str = "INSERT INTO information (second) VALUES (:second)";
        $stmt = $conn -> prepare($sql_str);

        $second = $_POST['second'];
     
        $stmt -> bindParam(':second' ,$second);

        $stmt ->execute();

        
        $id = strval($conn->lastInsertId()); 
        header("Location:questionnaire.php?id=$id");
        // header('Location:mem_addmem_ok.php');
        // header('Location:?page=mem_addmem_ok');
    }
    catch(PDOException $e){
        die("Error!:錯誤.....".$e->getMessage());
    }
}
