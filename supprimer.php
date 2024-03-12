<?php
    require_once 'connect.php';
    try{
        $conn=getConnection();
        $sql="delete from APPOINTMENT where NP=:np";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(":np", $np);
        $stmt->execute();
        $row=$stmt->fetch();
        $np=$row['NP'];
        header('location:secretery.php');
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>