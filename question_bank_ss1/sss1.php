<?php   include("../pure_php_files/connection.php"); ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS_FILES/sss1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
        

    <header>
        <head>
            <link rel="stylesheet" href="/CSS_FILES/STUDENT_PROFILE.CSS">
        </head>
            <div>Dashboard</div>
            <div>Administrator control panel for fumac high school vlap.</div>
            <div class="count1"> 
<?php
    session_start();
    if(isset($_SESSION['teachers_id'])){
        $teachers_id = $_SESSION['teachers_id'];
        $query = mysqli_query($conn, "SELECT  * FROM `teachers_data` WHERE teachers_data.teachers_id ='$teachers_id'");
        while($row = mysqli_fetch_array($query)){
            echo $row['firstname']." ".$row['otherNames'];
        }
    }
    

?>
            </div>
                
            <!-- <div><img src="/IMAGE FILES/IMG-20240406-WA0003.jpg" alt="admin img" width="30px"></div> -->
            <!-- echo   <img src='$imgurl' width='50px' height='50px' id='pic'> ; -->
              
            <div>
<?php
    if(isset($_SESSION['teachers_id'])){
        $teachers_id = $_SESSION['teachers_id'];
        $query = mysqli_query($conn, "SELECT  * FROM `teachers_data` WHERE teachers_data.teachers_id ='$teachers_id'");
        while($row = mysqli_fetch_array($query)){
            $direction = $row['teachers_image'];
            $imgurl = "../pure_php_files/teachersPic/".$direction;
            echo "<img src='$imgurl' width='33px' height='33px' alt='admin pic' style='border-radius: 40%;margin-top = 1px' > ";
        }
    }

?>
            </div>
            <div ><a href="../pure_php_files/logout.php"><i class='bx bx-log-out'></i>logout</a></div>
    </header>

 
        <p>Senior Secondary School 1 {SSS1} Question Bank. </p>
        <form action="./sss1.php" method="post">
            <aside>
               
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>mathematics</a><br>
                    <i class='bx bxs-file-plus'><input type="submit" value=" Create" name="crt_math_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_math1"></i>
                </div>  

                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>english</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_english_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_eng"></i>
                </div>  

                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>physics</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_physics_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_phy"></i>
                </div>
                
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>chemistry</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_chemistry_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_chemistry"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>biology</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_biology_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_biology"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>agric sci.</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_agric_sci_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_agric_sci"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>civic edu</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_civic_edu_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_civic_edu"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>technical dra.</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_technical_dra_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_technical_dra"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>book keeping</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_book_keeping_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_book_keeping"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>accounting</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_account_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_account"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>commerce</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_commerce_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_commerce"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>CRK</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_CRK_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_CRK"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>IRK</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_IRK_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_IRK"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>economics</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_economics_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_economics"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>geography</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_geography_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_geography"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>history</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_history_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_history"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>literature</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_literature_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_literature"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>PHE</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_phe_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_phe"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>yoruba</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_yoruba_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_yoruba"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>marketing</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_marketing_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_marketing"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>government</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_government_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_government"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>data_process.</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_data_process_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_data_process"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>animal hus.</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_animal_hus_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_animal_hus"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>computer sci.</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_computer_sci_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_computer_sci"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>catering craft</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_catering_craft_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_catering_craft"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>further Maths</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_further_Maths_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_further_Maths"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>new_A</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_new_A_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_new_A"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>new_B</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_new_B_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_new_B"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>new_C</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_new_C_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_new_C"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>new_D</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_new_D_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_new_D"></i>
                </div>
                <div>
                    <a href=""><i class='bx bxs-user-badge'></i><br>new_E</a><br>
                    <i class='bx bxs-file-plus'> <input type="submit" value="Create" name="crt_new_E_ss1" id="create_math" class="create"></i>
                    <i class='bx bxs-edit'><input type="submit" value="Edit" id="edit_math" class="edit"  name="edit_new_E"></i>
                </div>
            </aside>
        </form>
 
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php
        function create_subject($subject_class){
            include("../pure_php_files/connection.php"); 
            try {
                $sql_m_ss1 = "CREATE TABLE `cbt`.`$subject_class` (`id` INT(100) NOT NULL AUTO_INCREMENT , `questions` VARCHAR(65535) NOT NULL , `opt_A` VARCHAR(65535) NOT NULL , `opt_B` VARCHAR(65535) NOT NULL , `opt_C` VARCHAR(65535) NOT NULL , `opt_D` VARCHAR(65535) NOT NULL , `correct_answer` VARCHAR(100) NOT NULL , `date` DATETIME(6) NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";
                if (mysqli_query($conn, $sql_m_ss1)) {
                
                print  '<script>Swal.fire({
                    title: "GOOD JOB",
                    text: "Created Sucessfully",
                    icon: "success"
                });</script>'; 
            } else {
                
                print  '<script>Swal.fire({
                    title: "ERROR",
                    text: "Not Created Sucessfully",
                    icon: "error"
                });</script>'; 
            }  

            }
            catch (mysqli_sql_exception) {
            
                    print  '<script>Swal.fire({
                        title: "WARNING",
                        text: "Table Created, Click The Edit Button To Add More Questions",
                        icon: "warning"
                    });</script>';
            }
        };


    if (isset($_POST["crt_math_ss1"])) { 
       create_subject('mathematics_sss1');
    }
    if (isset($_POST["crt_physics_ss1"])) { 
        create_subject('physics_ss1');
    }
    if (isset($_POST["crt_english_ss1"])) { 
        create_subject('english_ss1');
    }
    if (isset($_POST["crt_chemistry_ss1"])) { 
        create_subject('chemistry_ss1');
    }
    if (isset($_POST["crt_biology_ss1"])) { 
        create_subject('biology_ss1');
    }
    if (isset($_POST["crt_agric_sci_ss1"])) { 
        create_subject('agric_sci_ss1');
    }
    if (isset($_POST["crt_civic_edu_ss1"])) { 
        create_subject('civic_edu_ss1');
    }
    if (isset($_POST["crt_technical_dra_ss1"])) { 
        create_subject('technical_dra_ss1');
    }
    if (isset($_POST["crt_account_ss1"])) { 
        create_subject('account_ss1');
    }
    if (isset($_POST["crt_book_keeping_ss1"])) { 
        create_subject('book_keeping_ss1');
    }
    if (isset($_POST["crt_commerce_ss1"])) { 
        create_subject('commerce_ss1');
    }
    if (isset($_POST["crt_CRK_ss1"])) { 
        create_subject('CRK_ss1');
    }
    if (isset($_POST["crt_IRK_ss1"])) { 
        create_subject('IRK_ss1');
    }
    if (isset($_POST["crt_economics_ss1"])) { 
        create_subject('economics_ss1');
    }
    if (isset($_POST["crt_geography_ss1"])) { 
        create_subject('geography_ss1');
    }
    if (isset($_POST["crt_history_ss1"])) { 
        create_subject('history_ss1');
    }
    if (isset($_POST["crt_literature_ss1"])) { 
        create_subject('literature_ss1');
    }
    if (isset($_POST["crt_phe_ss1"])) { 
        create_subject('phe_ss1');
    }
    if (isset($_POST["crt_yoruba_ss1"])) { 
        create_subject('yoruba_ss1');
    }
    if (isset($_POST["crt_marketing_ss1"])) { 
        create_subject('marketing_ss1');
    }
    if (isset($_POST["crt_government_ss1"])) { 
        create_subject('government_ss1');
    }
    if (isset($_POST["crt_data_process_ss1"])) { 
        create_subject('data_process_ss1');
    }
    if (isset($_POST["crt_animal_hus_ss1"])) { 
        create_subject('animal_hus_ss1');
    }
    if (isset($_POST["crt_computer_sci_ss1"])) { 
        create_subject('computer_sci_ss1');
    }
    if (isset($_POST["crt_catering_craft_ss1"])) { 
        create_subject('catering_craft_ss1');
    }
    if (isset($_POST["crt_further_Maths_ss1"])) { 
        create_subject('further_Maths_ss1');
    }
    if (isset($_POST["crt_new_A_ss1"])) { 
        create_subject('new_A_ss1');
    }
    if (isset($_POST["crt_new_B_ss1"])) { 
        create_subject('new_B_ss1');
    }
    if (isset($_POST["crt_new_C_ss1"])) { 
        create_subject('new_C_ss1');
    }
    if (isset($_POST["crt_new_D_ss1"])) { 
        create_subject('new_D_ss1');
    }
    if (isset($_POST["crt_new_E_ss1"])) { 
        create_subject('new_E_ss1');
    }   
    
    include("Editing.php")
?>