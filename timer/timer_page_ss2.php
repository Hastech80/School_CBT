<?php include("../pure_php_files/connection.php")?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>CBT WEB APP</title>
     <meta name="author" content="Shoetan Hassan Ayomide">
     <meta name="description" content="This website is a CBT-WEB-APP for schools and universities">
     <meta name="keywords" content="Html css js cbt php sql">
     <link rel="shortcut icon" href="/IMAGE_FILES/IMG-20240406-WA0003.jpg" type="image/x-icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/CSS_FILES/subadding_wuestions.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS_FILES/timer.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
      
     
 </head>
 <body>
     <section class="general" id="general">
         <section class="sec_general">
            
 
             <p>Examination timer settings for SSS 2  <a href="../pure_php_files/class.php" class=" count2 count " style="margin-left: 50px; padding:5px;"><i class='bx bxs-home sppp'></i></a><a href="./timer_page_1.php" class=" count2 count">SSS1</a> <a href="./timer_page_ss2.php" class=" count2 count">SSS2</a> <a href="./timer_page_ss3.php " class="count2 count">SSS3</a></p><br>
             <p style="width: 100%;"><marquee behavior="" direction=""><b>note: </b>if you want to change the time after been set, you can achieve that by deleting the previous time with timer id and set a new time. contact the super admin for further assistance</marquee></p><br>
             <div class="login_section container" id="r_log">
                  <form action="" method="post">
                     <p style="display: grid; grid-template-columns: 1fr 1fr 1fr; align-items: center;">   
                        <span>Add timer</span>  
                        <span class="count"><b>
                            <span style="color: red;">
                        <?php
                            try {
                                $sql = "SELECT * FROM  ss2_timer_table";
                                if($result = mysqli_query($conn, $sql)){
                                    $rowcount = mysqli_num_rows($result);
                                    echo "$rowcount subjest(s) set";
                                }
                            } catch (MYSQLI_SQL_EXCEPTION) {
                                 echo "0 subjest(s) set";
                            }

                        ?>
                            </span>
                         </b></span> 
                        <span><input type="submit" value="Create Database" name="createtimerdb" id="login" style="width: auto;"></span>
                     </p><br>
                     
                     <label for="correct" style="margin-left: 120px;">Select Subject: </label>
                     <select name="subject" id="hhh" required>
                         <option  value="----">----</option>
                         <option value="Mathematics">Mathematics</option>
                         <option value="English">English</option>
                         <option value="Physics">Physics</option>
                         <option value="Chemistry">Chemistry</option>
                         <option value="Biology">Biology</option>
                         <option value="Agric_Sci.">Agric Sci.</option>
                         <option value="Civic_Edu">Civic Edu</option>
                         <option value="Technical_Dra.">Technical Dra.</option>
                         <option value="Book_Keeping">Book Keeping</option>
                         <option value="Accounting">Accounting</option>
                         <option value="Commerce">Commerce</option>
                         <option value="CRK">CRK</option>
                         <option value="IRK">IRK</option>
                         <option value="Economics">Economics</option>
                         <option value="Geography">Geography</option>
                         <option value="History">History</option>
                         <option value="Literature">Literature</option>
                         <option value="PHE">PHE</option>
                         <option value="Yoruba">Yoruba</option>
                         <option value="Marketing">Marketing</option>
                         <option value="Government">Government</option>
                         <option value="Data_process.">Data_process.</option>
                         <option value="Animal_Hus.">Animal Hus.</option>
                         <option value="Computer_Sci.">Computer Sci.</option>
                         <option value="Catering_Craft">Catering Craft</option>
                         <option value="Further_Maths">Further Maths</option>
                         <option value="New_A">New_A</option>
                         <option value="New_B">New_B</option>
                         <option value="New_C">New_C</option>
                         <option value="New_D">New_D</option>
                         <option value="New_E">New_E</option>
                     </select>

                     <label for="correct">Select Time: </label>
                     <select name="time" id="hhh" required>
                         <option  value="----">----</option>
                         <option value="10">10 minutes</option>
                         <option value="15">15 minutes</option>
                         <option value="20">20 minutes</option>
                         <option value="25">25 minutes</option>
                         <option value="30">30 minutes</option>
                         <option value="35">35 minutes</option>
                         <option value="40">40 minutes</option>
                         <option value="45">45 minutes</option>
                         <option value="50">50 minutes</option>
                         <option value="60">60 minutes</option>
                         <option value="70">70 minutes</option>
                         <option value="80">80 minutes</option>
                         <option value="90">90 minutes</option>
                         <option value="100">100 minutes</option>
                     </select>
                     <br><br>
                     <input type="submit" value=" SET" id="login" name="set_T">
                  </form>
             </div><br><hr>

             <div class="update login_section container  " > 
                 <p>delete timer with timer ID.</p><br>
                 <form action="" method="post">
                     <label for="">Enter the Timer ID (T_ID)</label> 
                     <input type="number" name="QID"   placeholder="Enter the timer ID" required style="width: 50%;">
                     <input type="submit" value="Delete" name="delete" class="deletebtn">
                 </form>
             </div>
              
         </section>
     </section>
  
             <br><hr>
             
        <div class="Q_UPLOADED container">
            <p>uploaded time</p><br>
        <div class="qb">
                <table>
                    <tr>
                        <th>timer id</th>
                        <th>subject</th>
                        <th>time (minutes)</th>
                        <th>date & time</th>
                    </tr>
                    <tr>
                    <?php
                        try {
                            $query2 ="SELECT * FROM ss2_timer_table";
                            $result = mysqli_query($conn ,$query2 );
                            if ($result -> num_rows > 0) {
                                while($row = mysqli_fetch_array($result)){
                                    $id  = $row['id'];
                                    $subject  = $row['subjectt'];
                                    $time  = $row['time'];
                                    $date  = $row['date'];
    
                                    echo "<tr>";
                                    echo "<td>$id </td>";
                                    echo "<td>$subject</td>";
                                    echo "<td>$time </td>";
                                    echo "<td>$date </td>";
                                    echo "</tr>";
    
                                }
                            }
                        } catch (mysqli_sql_exception) {
                                    echo "<tr>";
                                    echo "<td> no id yet </td>";
                                    echo "<td> no subject yet</td>";
                                    echo "<td>no time yet </td>";
                                    echo "<td>no date yet </td>";
                                    echo "</tr>";
                        }
                    ?>
                    </tr>
                     
                </table>
        </div>

    </div>

 
 
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
     
     
 
 
 </body>
 </html>
<?php
    
 

    function create_database($table_name){
        try {
            $sql_m_ss1 = "CREATE TABLE `cbt`.`$table_name` (`id` INT(100) NOT NULL AUTO_INCREMENT , `subjectt` VARCHAR(100) NOT NULL , `time` INT(100) NOT NULL , `date` DATETIME(6) NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`))";
            include("../pure_php_files/connection.php");
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
                    text: "Table Created, Go Ahead TO Set your timer.",
                    icon: "warning"
                });</script>';
        }
    };
    if (isset($_POST['createtimerdb'])) {
        create_database('ss2_timer_table');
    }

    if (isset($_POST['set_T'])) {
        include("../pure_php_files/connection.php");
        $subject = $_POST['subject'];
        $time = $_POST['subject'];

        ########## check if table exist
        $statement11 = "SHOW TABLES LIKE 'ss2_timer_table'";
        $result1 = $conn->query($statement11);
         
        if ($subject == "----" || $time == "----") {
            print  '<script>Swal.fire({
                title: "ERROR!!!",
                text: " You Haven\'t Added The Time Or Subject ",
                icon: "warning"
            });</script>';
        }else{
            if ($result1 -> num_rows >  0) {
                // checking if the subject has been set
               $checksid = "SELECT * FROM ss2_timer_table where subjectt ='$subject'";
               $result101 = $conn->query($checksid); 
   
               if($result101->num_rows > 0){
               
                   print  '<script>Swal.fire({
                       title: "ERROR!!!",
                       text: " The Timer OF This Subject  Is Already Set !!! {if you want to change the time after been set, you can achieve that by deleting the previous time with timer id and set a new time.}",
                       icon: "warning"
                   });</script>'; 
               } else{
                   $subject = $_POST['subject'];
                   $time = $_POST['time'];
                   $statement22 = "INSERT INTO ss2_timer_table (subjectt,time) VALUES ('$subject','$time')";
                   if(mysqli_query($conn, $statement22)) {
                       print  '<script>Swal.fire({
                           title: "ADDED SUCCESSFULLY !!!",
                           text: "The status of this exam should be in ready mode, you can go ahead to activate the exam for the students. ",
                           icon: "success"
                       });</script>'; 
                   }
                   else{
                       print  '<script>Swal.fire({
                           title: "RETRY AGAIN!",
                           text: "Error Occured.",
                           icon: "error"
                         });</script>';
                   }
               }
           }
           else{
               print  '<script>Swal.fire({
                   title: "RETRY AGAIN!",
                   text: "No Database Created For SSS2 Timer, Click On The Create Button On Top To Create The Database.",
                   icon: "error"
                 });</script>';
           }
   
          
        }
        
    }
    

    if (isset($_POST['delete'])) {
        $QID = $_POST['QID'];
        $statement1 = "DELETE FROM ss2_timer_table WHERE id = $QID ";
        $statement2 = "DELETE FROM ss2_timer_table WHERE id = $QID ";
        if (mysqli_query($conn, $statement1)) {
            echo  '<script>Swal.fire({
                title: "GOOD JOB!",
                text: "Record Deleted Successfully {Refresh}",
                icon: "success"
              });</script>'; 
        } else{
            if(!(mysqli_query($conn, $statement2))) {
                echo  '<script>Swal.fire({
                    title: "Error!",
                    text: "Record Not in the database",
                    icon: "error"
                  });</script>'; 
            }else{
                echo '<script>Swal.fire({
                    title: "Try Again!",
                    text: "Record Not deleted ",
                    icon: "error"
                  });</script>'; 
            }
        }
       
        
    }
?>
 
 
 
 
 