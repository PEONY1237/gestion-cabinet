<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $apnt = date($_POST['date']);
        $today_date = date("Y/m/d");

        $apnt_date = strtotime($apnt);
        $current_date = strtotime($today_date);

        if($apnt_date > $current_date){
            require_once 'connect.php';
            $conn = getConnection();    
            try{
                $sql="insert into PASSIONS values(:fname, :bd, :phone , :adrs , :email, :date)";
                $stmt=$conn->prepare($sql);
                $stmt->bindParam(":fname", $_POST['fname']);
                $stmt->bindParam(":bd", $_POST['bd']);
                $stmt->bindParam(":phone", $_POST['tel']);
                $stmt->bindParam(":adrs", $_POST['adrs']);
                $stmt->bindParam(":email", $_POST['email']);
                $stmt->bindParam(":date", $_POST['date']);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $apnt = date($_POST['date']);
        $today_date = date("Y/m/d");

        $apnt_date = strtotime($apnt);
        $current_date = strtotime($today_date);

        if($apnt_date > $current_date){
            require_once 'connect.php';
            $conn = getConnection();    
            try{
                $sql="insert into APPOINTMENT values(:fname , :date)";
                $stmt=$conn->prepare($sql);
                $stmt->bindParam(":fname", $_POST['fname']);
                $stmt->bindParam(":date", $_POST['date']);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>