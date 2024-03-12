<link rel="stylesheet" href="css/doctor.css">

<?php
    require_once 'connect.php';
    $conn=getConnection();
    try{
        $sql="select * from APPOINTMENT where NAME=:fname";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(":fname", $_REQUEST['NAME']);
        $stmt->execute();
        $row=$stmt->fetch();
        // $name=$row['NAME'];
        // $date=$row['APPOINTMENT'];
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
    <form method="POST">
        <div class="logo">
            <p><a href="index.php">Doctor Shems</a></p>
        </div>
        <table class="table table-striped">
            <tr>
                <td>
                    <label>Name</label>
                </td>
                <td>
                    <input name="fname" value="<?php echo $_REQUEST['NAME']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>DATE</label>
                </td>
                <td>
                    <input type="date" name="date" value="<?php echo $date; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Modifier" class="modifier">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name=$_POST['fname'];
            $date=$_POST['date'];
        try{ 
            $sql="update APPOINTMENT set NAME=:fname, APPOINTMENT=:date where NAME=:fname";
            $stmt=$conn->prepare($sql);
            $stmt->bindParam(":fname", $name);
            $stmt->bindParam(":date", $date);
            $stmt->execute();
            // header('location:secretery.php');
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>