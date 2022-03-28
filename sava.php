<?php 
require_once('conn.php');

if(isset($_POST['second']) && $_POST['second'] != ""){
    try{
        $sql_str = "INSERT INTO information (second,vedio) VALUES (:second,:vedio)";
        $stmt = $conn -> prepare($sql_str);

        $second = $_POST['second'];
        $vedio = $_POST['vedio'];
     
        $stmt -> bindParam(':second' ,$second);
        $stmt -> bindParam(':vedio' ,$vedio);

        $stmt ->execute();
        if(isset($_POST['v1'])){$v1 = $_POST['v1'];}else{$v1 = null;}
        if(isset($_POST['v2'])){$v2 = $_POST['v2'];}else{$v2 = null;}
        if(isset($_POST['v3'])){$v3 = $_POST['v3'];}else{$v3 = null;}
        $code = $_POST['code'];

        $id = strval($conn->lastInsertId()); 
        if(isset($_POST['v1']) && isset($_POST['v2']) &&  isset($_POST['v3'])){
            $v2 = $_POST['v2'];
            $v3 = $_POST['v3'];
             header("Location:questionnaire.php?id=$id&code=$code&v2=$v2&v3=$v3");
        }elseif(isset($_POST['v2']) &&  isset($_POST['v3'])){
            $v3 = $_POST['v3'];
             header("Location:questionnaire.php?id=$id&code=$code&v3=$v3");
        }else{
            header("Location:questionnaire.php?id=$id&code=$code");
        }
        // header("Location:questionnaire.php?id=$id");
    }
    catch(PDOException $e){
        die("Error!:錯誤.....".$e->getMessage());
    }
}
