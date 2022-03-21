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
        $id = $_POST['id'];
        $sql_str = "UPDATE information SET q1=:q1,q2=:q2,q3=:q3,q4=:q4,q5=:q5,q6=:q6 WHERE id = :id";
        $stmt = $conn->prepare($sql_str);
        $stmt->bindParam(':q1',$q1);
        $stmt->bindParam(':q2',$q2);
        $stmt->bindParam(':q3',$q3);
        $stmt->bindParam(':q4',$q4);
        $stmt->bindParam(':q5',$q5);
        $stmt->bindParam(':q6',$q6);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        header('Location:./finish.php');
    }
    catch (PDOException $e ){
        die("Error!: ". $e->getMessage());
      }
}