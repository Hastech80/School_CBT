<?php
    include("./connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT WEB APP</title>
    <meta name="author" content="Shoetan Hassan Ayomide">
    <meta name="description" content="This website is a CBT-WEB-APP for schools and universities">
    <meta name="keywords" content="Html css js cbt php sql">
    <link rel="shortcut icon" href="/folder_A/IMAGE/lasuLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/CSS_FILES/studentlogin.css">
    <link rel="stylesheet" href="/CSS_FILES/trasistion.css">
</head>
<body>
    <section class="general" id="general">
        <section class="sec_general">
            <nav class="header">
                <div><img src="/IMAGE_FILES/download.jfif" alt="school_logo" width="50px" height="50px" class="popopopo"></div>
                <div><span class="add"><h1><b><span id="school_name">Fumac International School</span>  --- Virtual Learning And Assessment Platform --- <span id="short_school_name">(FUMAC-VLAP).</span></b></h1></span></div>
                <div><a href="./class.php"><img class="popopopo" src="/IMAGE_FILES/download.jfif" alt="school_logo" width="50px" id="img2" height="50px" ></a></div>
            </nav>

            <div class="going_going">
                    <p>  <b>Motto: <i id="s_motto">Education Towards Positive Change.</i></b></p>
                    <p><b>Address: <i id="S_address">12,Salvation Avenue , Peace Estate, Zone D, Phase II, Ipaye B/Stop, Iba Road, Lagos.</i></b></p>
                    <p><b>Tel: <i id="s_tel">07081654727, 09068508072.</i></p>     
            </div>
            
            <div class="login_section container" id="r_log">
                 <form action="" method="post">
                    <h2> Teacher's LogIn Page.  </h2>
                     
                    <label for="sin">Enter Your Teacher ID:  </label>
                    <input type="number" name="student_id" id="six" placeholder="enter your Teacher id" required style="margin-left: 10px;"><br><br>

                    <label for="password"> Enter Your Password:  </label>
                    <input type="password" placeholder="Enter your password" name="password" id="five"  required style="margin-left: 20px;"><br><br>
                    <input type="submit" value="LogIn" id="login" name="login">
                 </form>
            </div>
            <div class="small_section">
                <b>WARNING: </b><i>Do Not Engage In Examination Malpractice...</i><br><br>
                <marquee behavior="" direction=""><b><span> &copy;Powered By Hastech  +2349068508072 ---- Hastech80@gmail.com. </span></b></marquee>
            </div>
             
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php 
    include("./preloader.php");
    echo  '<script>Swal.fire({
        title: "WELCOME ADMIN!",
        text: "YOU CAN ONLY LOGIN FROM THIS PAGE, CONTACT THE SUP ADMIN TO SIGN UP",
        icon: "success"
    });</script>';
     if(isset($_POST['login'])){
        $teachers_id = $_POST['student_id'];
        $password = $_POST['password'];
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);

        $sql="SELECT * FROM teachers_data WHERE teachers_id = '$teachers_id'";
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
                $_SESSION['teachers_id'] = $row['teachers_id'];
                header("Location: class.php");
                exit();
            }
         }else{
            echo  '<script>Swal.fire({
                title: "RETRY AGAIN!",
                text: "Not found ,incorrect id or password",
                icon: "error"
              });</script>'; 
        }
     }
    
?>

 