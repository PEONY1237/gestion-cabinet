<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Cabinet Medical </title>

    <!-- css -->
    <link rel="stylesheet" href="css/doctor.css">

    <!--botstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    <div class="logo">
        <p><a href="index.php">Doctor Shems</a></p>
    </div>
    <table class="table table-striped">
        <tr>
            <th>Np</th>
            <th>Name</th>
            <th>Appointment</th>
            <td>Editer</td>
            <td>Supprimer</td>
        </tr>
    <?php
        require_once "connect.php" ;
        $conn = getConnection();
        try{
            $sql="select * from APPOINTMENT";
            $rows=$conn->query($sql);
            foreach($rows as $row){
                echo "<tr>".PHP_EOL;
                echo "<td>$row[NP]</td><td>$row[NAME]</td><td>$row[APPOINTMENT]</td>";
                echo "<td><a href='editer.php?date=$row[APPOINTMENT]'>edit</a></td>";
                echo "<td><a href='supprimer.php?date=$row[APPOINTMENT]'>suppr</a></td>".PHP_EOL;
                echo "</tr>".PHP_EOL;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    ?>
    </table>

</body>
</html>