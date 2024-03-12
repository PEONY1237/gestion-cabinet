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
    <script src="js/script.js" ></script>


</head>
<body>
    <div class="logo">
        <p><a href="index.php">Doctor Shems</a></p>
    </div>
    <form method="POST">
        <input class="input" name="name" type="text">
        <input class="submit" type="submit" value="Rechercher">
    </form>

    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Appointment</th>
        </tr>
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                require_once "connect.php" ;
                $conn = getConnection();
                try{
                    $sql = "select * from PASSIONS where Name=:name";
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(":name", $_POST['name']);
                    $stmt->execute();
                    $rows = $stmt->fetchAll();
                    foreach($rows as $row){
                        echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        </tr>".PHP_EOL;
                    }
                } catch(PDOException $e){
                    echo $e-> getMessage();
                }
            }
        ?>
    </table>

</body>
</html>