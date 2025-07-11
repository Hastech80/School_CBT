<?php   
         
        include("../connection.php");
        include("../pbo_connection.php");
        ob_start();
         
          
?>
  
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS_FILES/calculator.css">
    <link rel="stylesheet" href="/CSS_FILES/mathExam.css">
    <link rel="stylesheet" href="/CSS_FILES/logout_check.css">
    <link rel="shortcut icon" href="/IMAGE_FILES/download.jfif" type="image/x-icon">
    <title><?php echo strtoupper($_SESSION['fname'] ." ".  $_SESSION['lname'])  ?></title>
</head>
<body>
    <section class="header">
         <p><?php echo $_SESSION['fname'] ." ".  $_SESSION['lname']  ?></p> 
         <p><?php  echo $_SESSION["class"]?></p> 
         <p><?php  echo $_SESSION["subject"]?></p> 
         <p><?php  echo $_SESSION["student_id"]?></p> 
         <?php 
                if(isset($_SESSION['student_id'])){
                    $student_id = $_SESSION['student_id'];
                    $query = mysqli_query($conn, "SELECT  * FROM `student_data` WHERE student_id ='$student_id'");
                    while($row = mysqli_fetch_array($query)){
                        $direction = $row['student_image'];
                        $imgurl = "../studentPic/".$direction;
                       // echo "<img src='' alt='student picture' width='100px' width='100px' > ";
                        echo "<p><img src='$imgurl' alt='student image' width='30px' height = '30px'></p>";
                    }  
                }

            ?> 
         <p><button type="button" id="cla_btn" onclick="cla_btn()">Show calcul.</button></p>
         <p><button type="button" id="cla_btn" onclick="hide_btn()">Hide calcul.</button></p>
         <p><button type="button" id="logout-btn">Logout</button> </p>
    </section> 
    <div id="two" style="display: none;">
        <div id="calculator">
            <input id="display" readonly>
            <div id="keys">
                <button onclick="appendToDisplay('+')" class="operator-btn">+</button>
                <button onclick="appendToDisplay('7')">7</button>
                <button onclick="appendToDisplay('8')">8</button>
                <button onclick="appendToDisplay('9')">9</button>
                <button onclick="appendToDisplay('-')" class="operator-btn">-</button>
                <button onclick="appendToDisplay('4')">4</button>
                <button onclick="appendToDisplay('5')">5</button>
                <button onclick="appendToDisplay('6')">6</button>
                <button onclick="appendToDisplay('*')" class="operator-btn">*</button>
                <button onclick="appendToDisplay('1')">1</button>
                <button onclick="appendToDisplay('2')">2</button>
                <button onclick="appendToDisplay('3')">3</button>
                <button onclick="appendToDisplay('/')" class="operator-btn">/</button>
                <button onclick="appendToDisplay('0')">0</button>
                <button onclick="appendToDisplay('.')">.</button>
                <button onclick="calculate()">=</button>
                <button onclick="clearDisplay()" class="operator-btn">C</button>
            </div>
        </div>
    </div>
            <div id="logout-popup" style="display: none;">
                <form id="logout-form" method="post" action="">
                    <h2>Logout Confirmation</h2>
                    <p>Once you logout, you will not be able to login for this exam again. 
                    <br><br><b>If you logout without submitting your examination  <br>Your score will no be recorded </b></p>
                    <p>Are you sure you want to logout?</p>
                    <input type="submit" name="yes" value="Yes" id="yes-btn">
                    <button type="button" id="no-btn">No</button>
                </form>
            </div>
            <section class="main mainnn">
                <h1 class="submittttting">exanination successfully submitted <br> Logout from this page. <br>exit the hall !!!</h1>
            </section>
    <script src="/JAVASCRIPT_FILES/calculator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/JAVASCRIPT_FILES/navigation.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</body>
</html>
<?php
    if (isset($_POST['yes'])) {
            deleteAllCookiesAndSession();   
            deleteTimerCookie();   
            header("location: /sss2_logins_page/studentLogin_geo.php"); 
    }

    function deleteTimerCookie() {
        // Delete timer cookie
        setcookie('timer', '', time() - 3600, '/');
    }
    function deleteAllCookiesAndSession() {
        // Delete all cookies
        $cookies = $_COOKIE;
        foreach ($cookies as $cookieName => $value) {
            setcookie($cookieName, '', time() - 3600, '/');
            unset($_COOKIE[$cookieName]);
        }
        // Delete the timer value from the session
        unset($_SESSION['timer']);
        unset($_SESSION['student_id']);
        setcookie('timer', '', time() - 3600, '/');
    }