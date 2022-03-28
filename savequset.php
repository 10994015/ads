<?php
require_once('conn.php');
if(isset($_POST['q1'])){
    try{
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $id = $_POST['id'];
        $code = $_POST['code'];
        $sql_str = "UPDATE information SET q1=:q1,q2=:q2,q3=:q3,q4=:q4,q5=:q5,q6=:q6,q7=:q7,q8=:q8,q9=:q9,code=:code WHERE id = :id";
        $stmt = $conn->prepare($sql_str);
        $stmt->bindParam(':q1',$q1);
        $stmt->bindParam(':q2',$q2);
        $stmt->bindParam(':q3',$q3);
        $stmt->bindParam(':q4',$q4);
        $stmt->bindParam(':q5',$q5);
        $stmt->bindParam(':q6',$q6);
        $stmt->bindParam(':q7',$q7);
        $stmt->bindParam(':q8',$q8);
        $stmt->bindParam(':q9',$q9);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':code',$code);
        $stmt->execute();
        if(isset($_POST['v2']) && isset($_POST['v3'])){
            $v2 = $_POST['v2'];
            $v3 = $_POST['v3'];
            header("Location:./vedio$v2.php?code=$code&v2=$v2&v3=$v3");
        }elseif(isset($_POST['v3'])){
            $v3 = $_POST['v3'];
            header("Location:./vedio$v3.php?code=$code&v3=$v3");
        }else{
            header("Location:./information.php?code=$code");
        }
    }
    catch (PDOException $e ){
        die("Error!: ". $e->getMessage());
      }
}