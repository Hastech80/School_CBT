<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS_FILES/result.css">

</head>
<body>
    <?php 
        
        include "./header.php";
        include("./result_db_creator_and_trigger_creator.php");
        
        
        ?>
    <h2>
        sss 1 result sheet [  this button should be clicked before the exam date ]. 
        <form action="" method="post">
            <input type="submit" value="create database" name="createdb" id="database">
            <input type="submit" value="sss 2 result" name="ss2" id="database">
            <input type="submit" value="sss 3 result" name="ss3" id="database">

        </form>
    </h2>
    <table>
        <tr>
            <th class="spp2">names</th>
            <th class="spp" class="tooltip" title="Mathematics">maths</th>
            <th class="spp" class="tooltip" title="English language">eng</th>
            <th class="spp"class="tooltip" title="PHYSICS">phy </th>
            <th class="spp"class="tooltip" title="CHEMISTRY"> chem</th>
            <th class="spp"class="tooltip" title="BIOLOGY"> bio</th>
            <th class="spp" class="tooltip" title="AGRICULTURAL SCIENCE"> agr</th>
            <th class="spp" class="tooltip" title="CIVIC EDUCATION"> civic</th>
            <th class="spp" class="tooltip" title="Technical Drawing"> tech</th>
            <th class="spp"  class="tooltip" title="Book keeping">book</th>
            <th class="spp"class="tooltip" title="Accounting"> acc</th>
            <th class="spp" class="tooltip" title="commerce"> comm</th>
            <th class="spp"class="tooltip" title="CRK"> crk</th>
            <th class="spp" class="tooltip" title="IRK"> irk</th>
            <th class="spp" class="tooltip" title="Economics"> eco</th>
            <th class="spp"class="tooltip" title="geography"> geo</th>
            <th class="spp" class="tooltip" title="History"> his</th>
            <th class="spp" class="tooltip" title="literature"> lite</th>
            <th class="spp" class="tooltip" title="PHE"> phe</th>
            <th class="spp"class="tooltip" title="Yoruba"> yor</th>
            <th class="spp" class="tooltip" title="Marketing"> mark</th>
            <th class="spp"  class="tooltip" title="Government"> gov</th>
            <th class="spp" class="tooltip" title="data processing"> data</th>
            <th class="spp" class="tooltip" title=" Animal husbandry"> anim</th>
            <th class="spp" class="tooltip" title="Computer science"> comp</th>
            <th class="spp" class="tooltip" title="catering craft"> cater</th>
            <th class="spp"  class="tooltip" title="Further Mathematics"> fur_M</th>
            <th class="spp">  New_A</th>
            <th class="spp"> New_B</th>
            <th class="spp"> New_C</th>
            <th class="spp"> New_D</th>
            <th class="spp"> New_E</th>
            <th class="spp" style="color: green;"> <b>Total</b></th>
        </tr>
            <?php   
                try {
                    $all = "SELECT * FROM result_ss1 ORDER BY TOTAL DESC LIMIT 1000 ";
                    $result = mysqli_query($conn, $all);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";

                            echo "<td>" . $row['maths'] . "</td>";
                            echo "<td>" . $row['eng'] . "</td>";
                            echo "<td>" . $row['phy'] . "</td>";
                            echo "<td>" . $row['chem'] . "</td>";
                            echo "<td>" . $row['bio'] . "</td>";
                            echo "<td>" . $row['agric'] . "</td>";

                            echo "<td>" . $row['civic'] . "</td>";
                            echo "<td>" . $row['technical'] . "</td>";
                            echo "<td>" . $row['book_k'] . "</td>";
                            echo "<td>" . $row['account'] . "</td>";
                            echo "<td>" . $row['commerce'] . "</td>";
                            echo "<td>" . $row['crk'] . "</td>";

                            echo "<td>" . $row['irk'] . "</td>";
                            echo "<td>" . $row['econo'] . "</td>";
                            echo "<td>" . $row['geo'] . "</td>";
                            echo "<td>" . $row['his'] . "</td>";
                            echo "<td>" . $row['lit'] . "</td>";
                            echo "<td>" . $row['phe'] . "</td>";

                            echo "<td>" . $row['yoruba'] . "</td>";
                            echo "<td>" . $row['market'] . "</td>";
                            echo "<td>" . $row['govern'] . "</td>";
                            echo "<td>" . $row['data_p'] . "</td>";
                            echo "<td>" . $row['animal_hus'] . "</td>";
                            echo "<td>" . $row['computer_sci'] . "</td>";

                            echo "<td>" . $row['careati'] . "</td>";
                            echo "<td>" . $row['further_m'] . "</td>";
                            echo "<td>" . $row['new_A'] . "</td>";
                            echo "<td>" . $row['new_B'] . "</td>";
                            echo "<td>" . $row['new_C'] . "</td>";
                            echo "<td>" . $row['new_D'] . "</td>";
                            echo "<td>" . $row['new_E'] . "</td>";

                            echo "<td>" . $row['total'] . "</td>";

                            echo "</tr>";
                        }
                    }
                } catch (mysqli_sql_exception) {
                    echo "<marquee behavior='' direction=''>Database Not Created, Click On Create Database !!! --------------   Database Not Created, Click On Create Database !!! -------------- Database Not Created, Click On Create Database !!! </marquee>";
                }
  ?>
       

    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
    print  '<script>Swal.fire({
        title: "WELCOME!!!",
        text: "THIS IS SSS 1 RESULT PAGE",
        icon: "success"
      });</script>';
    if(isset($_POST['ss1'])){
        header("location: ./sss1_result.php");
    }
    if(isset($_POST['ss2'])){
        header("location: ./sss2_result.php"); 
    }
    if(isset($_POST['ss3'])){
        header("location:./sss3_result.php");
    }



  
    if(isset($_POST['createdb'])){
        create_database("result_ss1");
    }
?>
 