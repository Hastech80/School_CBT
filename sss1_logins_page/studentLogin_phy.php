 
            <?php include("./HEADER.PHP")?>           
            <div class="login_section container" id="r_log">
                 <h2> Student LogIn.  </h2>
                 <form action="" method="post">
                    
                     
                    <label for="sin">Enter Your Student ID:  </label>
                    <input type="number" name="student_id" id="six" placeholder="enter your student id" required style="margin-left: 10px;"><br><br>

                    <label for="password"> Enter Your Password:  </label>
                    <input type="password" placeholder="Enter your password" name="password" id="five"  required style="margin-left: 20px;"><br><br>
                    <input type="submit" value="LogIn" id="login" name="login">
                 </form>
            </div>

            
            <div class="small_section">
                <b>WARNING: </b><i>Do Not Engage In Examination Malpractice...</i><br><br>
                <b><span> &copy;Powered By Hastech  +2349068508072 ---- Hastech80@gmail.com. </span></b>
            </div>
             
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php 
       // include("/pure_php_files/connection.php");
        include("../pure_php_files/connection.php");
         print  '<script>Swal.fire({
            title: "WELCOME STUDENT",
            text: "YOU CAN ONLY LOG IN IN THIS PORTAL, CONTACT THE ADMIN TO CREATE AN ACCOUNT.",
            icon: "success"
          });</script>'; 
     if(isset($_POST['login'])){
        $student_id = $_POST['student_id'];
        $password = $_POST['password'];
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);
        
    
     /*    $sql="SELECT * FROM student WHERE student_id = '$student_id' AND password = '$secure_password'"; */
        $sql="SELECT * FROM student_data WHERE student_id = '$student_id'";
        $result =  $conn->query($sql);

        if ($result -> num_rows>0) {
            $row = $result -> fetch_assoc();
            $hashpassword = $row['password']; 
            if (!password_verify($password, $hashpassword)) {
                 
                echo  '<script>Swal.fire({
                    title: "RETRY AGAIN!",
                    text: "Error occur incorrect password!",
                    icon: "error"
                  });</script>'; 
            }else{
                session_start();
                echo  '<script>Swal.fire({
                    title: "CONGRATULATIONS!",
                    text: "YOU ARE LOGED IN!",
                    icon: "success"
                  });</script>';
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['lname'] = $row['otherNames'];
                $_SESSION['picture'] = $row['student_image'];
                $_SESSION['class'] = $row['class'];
                $_SESSION['subject'] = "PHYSICS";  /* special note */
                $_SESSION['student_id'] = $row['student_id'];
                $_SESSION['gender'] = $row['gender'];

                header("Location: ../after_login_ss1/after_login.phy.php");   /* special note */
                exit();
            }

         }else{
            echo  '<script>Swal.fire({
                title: "RETRY AGAIN!",
                text: "Not found ,incorrect email or password",
                icon: "error"
              });</script>'; 
        }
     }
?>  