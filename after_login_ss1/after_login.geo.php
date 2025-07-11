<?php include("./functions.php");  session_start(); include("../pure_php_files/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS_FILES/after_login_math.css">
</head>
<body>
<?php
        if (isset($_COOKIE['timer'])) {   
            unset($_SESSION['timer']);
            setcookie('timer', '', time() - 3600, '/');
        }
?>


    <header>
        <div>Dashboard</div>
        <div>Profile</div>
        <div>Result</div>
        <div>Time Table</div>
        <div>More Info</div>
        <div ><a href="./logout.php"><i class='bx bx-log-out'></i>logout</a></div>
    </header>

    <nav class="sidebar">
        <div><p style="font-size: 25px;">Student Information.</p></div>
        <!-- <div><img src="/IMAGE_FILES/IMG-20240406-WA0003.jpg" alt="student picture" width="100px"></div> -->
        <div>
            <?php 
                if(isset($_SESSION['student_id'])){
                    $student_id = $_SESSION['student_id'];
                    $query = mysqli_query($conn, "SELECT  * FROM `student_data` WHERE student_id ='$student_id'");
                    while($row = mysqli_fetch_array($query)){
                        $direction = $row['student_image'];
                        $imgurl = "../pure_php_files/studentPic/".$direction;
                        echo "<img src='$imgurl' alt='student picture' width='100px' height='100px' > ";
                    }  
                }

            ?>
        </div> 
        <div><p> Name : <span> <?php echo $_SESSION['fname'] ." ".  $_SESSION['lname']  ?></span></p></div>
        <div><p> Class : <span><?php  echo $_SESSION["class"]?></span></p></div>
        <div><p>Subject : <span><?php  echo $_SESSION["subject"]?></span></p> </div>
        <div><p>student ID : <span><?php  echo $_SESSION["student_id"]?></span></p> </div>
        <div><p> Gender : <span><?php  echo $_SESSION["gender"]?></span></p></div>
        <div><p> Date : <span><?php echo date("d - m - Y")?> </span></p></div>
    </nav>

    <section id="main_section">
        <h1>student virtual learning and assessment platform (S_VLAP).</h1>
        <p>this exam in opened from <b><?php $current_time = date("h:iA"); $new_time = date('h:iA', strtotime('-1 hour A',strtotime($current_time))) ; echo $new_time  ?></b>  to <b> <?php $current_time = date("h:iA"); $new_time = date('h:iA', strtotime('+1 hour A',strtotime($current_time))) ; echo $new_time  ?></b>, it contains  
            <b>
                <?php
                    include("../pure_php_files/connection.php");
                    count_questions("geography_ss1")
                ?>
            </b>
questions and within
<b><?php
    check_timer("Geography")
?></b>
 , no student is allowed to open another tab in the browser , if you navigate from the page twice , the website will log you out automatically and you will not be able to attempt the exam again ,and you are only allowed to attempt once. 
        </p>
    <main>
        <h2><u>instructions</u></h2>
        <ol type="1">
            <li>read  all instructions carefully </li>
            <li>do not enter the exam hall with mobile phone or other devices</li>
            <li>manage your time effectively to complete all questions within allocated time </li>
            <li>answer all questions carefully</li>
            <li>review your work before submitting the exam</li>
            <li>if you need help, raise your hand to alert the proctor</li>
            <li>do not engage in examination malpractice.</li>
            <li>do not navigate from this current tab as stated earlier.</li>
            <li>remember to stay calm , focused and follow the instructions to ensure a smooth and successfully exam experience. </li>
            <li>log out properly.</li>
        </ol>
    </main>
            <form action="" method="post">
                <input type="submit" value="start" name="start">
            </form>
   
    </section>
</body>
</html>
<?php
        if (isset($_POST['start'])) {
            session_start();
            header("location: ../pure_php_files/exam_pages_ss1/geo_Examination.php");
            exit;
        }
?>
