<?php
    include("./connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SHOETAN HASSAN AYOMIDE">
    <meta name="DESCRIPTION" content="a cbt web app for schools to add questions and set time for student">
    <meta name="keywords" content="php, css, css, js sql">
    <title>HASTECH CBT WEB APP</title>
    <link rel="shortcut icon" href="/IMAGE FILES/IMG-20240406-WA0003.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS_FILES/STUDENT_PROFILE.CSS">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- <header>
        <div>Dashboard</div>
        <div>Administrator control panel for fumac high school vlap.</div>
        <div>"Admin name"</div>
        <div><img src="/IMAGE_FILES/download.jfif" alt="admin img" width="30px"></div>
        <div><a href=""><i class='bx bx-log-out'></i>logout</a></div>
    </header> -->
    <?php include("./header.php")?>

   <!--  <nav class="sidebar">
        <ul>
            <li><a href=""><i class='bx bxs-user-circle'></i> student profile</a></li>
            <li><a href=""><i class='bx bxs-user'></i> teachers profile</a></li>
            <li><a href=""><i class='bx bx-book-add'></i> add questions</a></li>
            <li><a href=""> <i class='bx bx-street-view'></i>student result</a></li>
            <li><a href=""><i class='bx bxs-cog'></i>settings</a></li>
            <li><a href=""><i class='bx bxs-contact'></i>contact us / help</a></li>
            <li><a href=""><i class='bx bxs-save'></i>saved questions</a></li>
            <li><a href=""><i class='bx bx-link-external'></i>student page</a></li>
            
        </ul>
    </nav> -->
    <?php include('./sidebar.php')?>

    <section>
        <h2><u>student profile.</u></h2>
        <nav class="nav2">
            <div><button id="registeredbtn">registered student</button></div>
            <div><a href="#add"><button id="addbtn">add new student</button></a></div>
            <div><a href="#update"><button id="updatebtn">Delete Student Info</button></a></div>
            <div><a href="#delete"><button id="deletebtn" >Change Password</button></a></div>
             
        </nav>
        <div class="registered_stu">
            <h2>registered student  <span class="count" >
                        <?php
                            $sql = "SELECT * FROM student_data";
                            if($result = mysqli_query($conn, $sql)){
                                $rowcount = mysqli_num_rows($result);
                                echo "$rowcount student registered";
                            }
                        ?>
                    </span>
            </h2>
            <table>
                <tr>
                     
                    <th>first name</th>
                    <th>other names</th>
                    <th>student id</th>
                    <th>class</th>
                    <th>gender</th>
                    <th>student image</th>
                    <th>position in school</th>
                </tr>
                <tr>
                    <?php
                        include_once('connection.php');
                        $query2 ="SELECT * FROM student_data";
                        $result = mysqli_query($conn ,$query2 );
                        if ($result -> num_rows > 0) {
                            while($row = mysqli_fetch_array($result)){
                                
                                $firstname  = $row['firstname'];
                                $otherNames  = $row['otherNames'];
                                $student_id  = $row['student_id'];
                                $class  = $row['class'];
                                $gender  = $row['gender'];
                                ////special note on image
                                $student_image  = $row['student_image']; 
                                $imgurl = "studentPic/".$student_image;
                                $position  = $row['position'];
                                echo "<tr>";
                                echo "<td>$firstname </td>";
                                echo "<td>$otherNames</td>";
                                echo "<td>$student_id </td>";
                                echo "<td>$class </td>";
                                echo "<td>$gender </td>";
                                echo "<td> <img src='$imgurl' width='50px' height='50px' id='pic'> </td>";
                                echo "<td>$position </td>";
                                echo "</tr>";

                            }
                        }
                    ?>
                </tr>
                 
            </table>
        </div>
<hr>    
        <section class="container">
                <div class="add_student" id="add">
                    <h2>add new student</h2>
                    <!-- <form action="../pure php files/student_login.php" method="post" enctype="multipart/form-data"> -->
                    <form action="./STUDENT_PROFILE.PHP" method="post" enctype="multipart/form-data">
                        <label for="first name">first name: </label>
                        <input type="text" name="fname" id="fname" autofocus required placeholder="enter your first name" style="margin-left: 50px;">
                        <br>
                        <label for="other names">other names: </label>
                        <input type="text" name="oname" id="oname" autofocus required placeholder="enter your other names" style="margin-left: 28px;">
                        <br>
                        <label for="student id">student id: </label>
                        <input type="number" name="sid" id="sid" autofocus required placeholder="enter your student id" style="margin-left: 52px;">
                        <br>
                        <label for="password">password: </label>
                        <input type="password" name="password" id="password" autofocus required placeholder="enter your password" style="margin-left: 60px;">
                        <br>
                        <label for="class" class="class" >class</label> 
                        <select name="class" id="class" required class="sss" style="margin-left: 110px;">
                            <option> ------------- -------------------- </option>
                            <option value="sss1">sss1</option>
                            <option value="sss2">sss2</option>
                            <option value="sss3">sss3</option>
                            <option value="jss1">jss1</option>
                            <option value="jss2">jss2</option>
                            <option value="jss3">jss3</option>
                            
                        </select>
                        <br> <br>
                        <label for="gender">gender</label>
                        <input type="radio" name="gender" id="male" value="male"><span>male</span>
                        <input type="radio" name="gender" id="female" value="female"><span>female</span>
                        <br><br> <br>
                        <label for="img">student image</label>
                        <input type="file" name="image" id="image" ><span style="color:red; "><b>Png,jpeg,jpg,pdf less than 100kb</b></span>
                        <br><br><br>
                        <label for="position">position in school: </label>

                        <span>head boy</span><input type="checkbox" name="head_boy" id="hb" value="Head boy">  <span class="sep">||</span>
                        <span>assit. head boy</span><input type="checkbox" name="ahead_boy" id="ahb" value="assit. Head boy"><span class="sep">||</span>
                        
                        <span>head girl</span><input type="checkbox" name="head_girl" id="hg" value="Head girl"><span class="sep">||</span>
                        <span>assit. head girl</span><input type="checkbox" name="ahead_girl" id="hg" value="assit. Head girl"><span class="sep">||</span>
                        
                        <span>Others</span><input type="checkbox" name="Others" id="Others" value="Others"><span class="sep">||</span>
                        <span>None</span><input type="checkbox" name="None" id="None" value="None">
                        <br><br>
                        <input type="submit" value="register" name="register" id="regbtn">
                    </form>
                </div>
        </section>
        <hr><br>
        <section class="container">
                <div class="delete" id="delete">
                    <h2>delete student info</h2>
                    <form action="./STUDENT_PROFILE.PHP" method="post">
                        <label for="">student id</label>
                        <input type="number" name="rem" id="rid" placeholder="Enter student ID" required>
                        <input type="submit" value="remove student" name="remove">
                    </form>
                </div>
        </section>
        <hr><br>
        <section class="container password">
                    <div class="update" id="update">
                        <h2>change student password</h2>
                        <form action="./STUDENT_PROFILE.PHP" method="post">
                            <label for="">student id</label>
                            <input type="number" name="sid" id="sid" placeholder="Enter student ID" required>
                            <input type="password" name="pass" id="pas" placeholder="ENTER NEW PASSWORD" required>
                            <input type="submit" value="Change password" name="update">
                        </form>
                    </div>
        </section>
    </section>
    
    <hr><br>
    <section class="container extra" style="width: auto; margin:2px auto; text-align:center;">
            <footer>
                <span > &copy;Powered By Hastech  +2349068508072,  ------------- hastech80@gmail.com.  </span>
            </footer>
    </section>

    <script src="/JAVASCRIPT FILES/student_page.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
    include("./connection.php");
    print  '<script>Swal.fire({
        title: "WELCOME ADMINISTRATOR",
        text: "THIS IS STUDENT\'S  PORTAL",
        icon: "success"
      });</script>'; 
      
    if (isset($_POST['register'])) {
        $firstname = $_POST['fname'];
        $othernames = $_POST['oname'];
        $sid = $_POST['sid'];
        $password = $_POST['password'];
        $secure_password = password_hash($password,PASSWORD_DEFAULT);
        $class = $_POST['class'];
        $gender = $_POST['gender'];


        // for checkbox
        if (isset($_POST['head_boy'])){
            $position = 'Head_boy <br>';
        }
        if (isset($_POST['ahead_boy'])){
            $position = 'Assit. head_boy <br>';
        }
        if (isset($_POST['head_girl'])){
            $position = 'head_girl <br>';
        }
        if (isset($_POST['ahead_girl'])){
            $position = 'Assit. head_girl <br>';
        }
        if (isset($_POST['Others'])){
            $position = 'Others <br>';
        }
        if (isset($_POST['None'])){
            $position = 'None <br>';
        }

        // for image
        $filename = $_FILES['image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowedtype = array('jpg', "jpeg", 'png', 'pdf');
        $size = $_FILES['image']['size'];
        $tempname= $_FILES['image']['tmp_name'];
        $targetpath = "studentPic/".$filename;

    
        //to check if the student id exist.
        $checksid = "SELECT * FROM student_data where student_id ='$sid'";
        $result101 = $conn->query($checksid); 

        if($result101->num_rows > 0){
          
            print  '<script>Swal.fire({
                title: "RETRY AGAIN!",
                text: "Student id  already used by another student, try another id",
                icon: "warning"
              });</script>'; 
        } else{
            if($size >= 103000){
                 
                print  '<script>Swal.fire({
                    title: "RETRY AGAIN!",
                    text: "Your image must be less than 100kb",
                    icon: "error"
                  });</script>';    
            }
            else{
                        if(in_array($ext, $allowedtype)) {
                            if(move_uploaded_file($tempname, $targetpath)){
                                $query1 = "INSERT INTO student_data (firstname, otherNames, student_id,password, class, gender, student_image, position) VALUES ('$firstname','$othernames','$sid','$secure_password','$class',' $gender','$filename','$position')";
                                if(mysqli_query($conn, $query1)){
                                    
                                    print  '<script>Swal.fire({
                                        title: "REGISRERED!",
                                        text: "Student is registered successfully",
                                        icon: "success"
                                      });</script>';
                                }
                                else{                             
                                                                 
                                    print  '<script>Swal.fire({
                                        title: "RETRY AGAIN!",
                                        text: "Something is wrong",
                                        icon: "error"
                                      });</script>';                               
                                }
                            }else{                          
                                
                                print  '<script>Swal.fire({
                                    title: "RETRY AGAIN!",
                                    text: "File not uploaded",
                                    icon: "info"
                                  });</script>';                           
                            }
                        }
                        else{                    
                             
                            print  '<script>Swal.fire({
                                title: "RETRY AGAIN!",
                                text: "Your files are not allowed, only jpg, jpeg, pdf, png is allowed",
                                icon: "info"
                              });</script>'; 
                        }
                    }
            }
        
        }
    
?>


<?php
    // removing php
    if (isset($_POST['remove'])) {
        $sid = $_POST['rem'];
        $statement1 = "DELETE FROM student_data WHERE student_id = $sid ";
        $statement2 = "DELETE FROM student_data WHERE student_id = $sid ";
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
<?php
    // updating php
     if (isset($_POST['update'])) {
        $sid = $_POST['sid'];
        $pass= $_POST['pass'];
        $secure_pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql1 = "UPDATE student_data SET password = '$secure_pass' WHERE student_id = '$sid'";
        if(mysqli_query($conn, $sql1)){
            echo '<script>Swal.fire({
                title: "PASSWORD CHANGED!",
                text: "Password changed  Successfully {Refresh}",
                icon: "success"
              });</script>';
        }else{
            echo '<script>Swal.fire({
                title: "AN ERROR OCCURED!",
                text: "Try again ,password not changed successfully",
                icon: "error"
              });</script>';
        }
     }

     
?>


 