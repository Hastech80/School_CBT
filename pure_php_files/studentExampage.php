<?php
    include("./connection.php");
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>page in progress</h1>
    <h1>page in progress</h1>
    <h1>page in progress</h1>
    <h1><?php
        if(isset($_SESSION['student_id'])){
            $sid = $_SESSION['student_id'];
            $query = mysqli_query($conn, "SELECT student_data. * FROM `student_data` WHERE student_data.student_id ='$sid'");
            while($row = mysqli_fetch_array($query)){
                echo $row['firstname']." ".$row['otherNames'];
            }
        }
    
    ?></h1>
</body>
</html>