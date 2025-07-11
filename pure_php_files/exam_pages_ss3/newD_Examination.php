<?php   
         
        include("../connection.php");
        include("../pbo_connection.php");
        ob_start();
        if (!isset($_SESSION['shuffled_questions'])) {
            $query = "SELECT * FROM new_D_ss3 ORDER BY RAND()";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
            shuffle($questions);
            $_SESSION['shuffled_questions'] = $questions;
            $_SESSION['current_question_index'] = 0;
        }
        $shuffledQuestions = $_SESSION['shuffled_questions'];
        $totalQuestions = count($shuffledQuestions);
        if (!isset($_SESSION['current_question_index'])) {
            $_SESSION['current_question_index'] = 0;
        }
        $currentQuestion = $shuffledQuestions[$_SESSION['current_question_index']] ;
        for($i = 1 ; $i <= $totalQuestions; $i++ ){
            if (isset($_POST[$i])){ 
                $_SESSION['current_question_index'] = $i-1;
            }
            if(isset($_POST['opt'])){setcookie($_SESSION['current_question_index'] +1 , $_POST['opt'], time()+3600 , '/') ;} //////  coolisss
            if(isset($_COOKIE['opt'])){$saved_answer = $_COOKIE[$_SESSION['current_question_index'] +1];} else{$saved_answer='';}  
        }
        if (isset($_POST['next']) || isset($_POST['previous'])) {
            if (isset($_POST[$currentQuestion['id']])) {
                $_SESSION['user_answers'][$_SESSION['current_question_index']] = $_POST[$currentQuestion['id']];
            }
            if (isset($_POST['next'])) {
                $_SESSION['current_question_index']++;
                if ($_SESSION['current_question_index'] >= $totalQuestions) {
                    $_SESSION['current_question_index'] = 0;  
                }  
            } elseif (isset($_POST['previous'])) {
                $_SESSION['current_question_index']--;
                if ($_SESSION['current_question_index'] < 0) {
                    $_SESSION['current_question_index'] = $totalQuestions - 1; 
                }
            }
        }       
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS_FILES/calculator.css">
    <link rel="stylesheet" href="/CSS_FILES/mathExam.css">
    <link rel="stylesheet" href="/CSS_FILES/logout_check.css">
    <title><?php echo strtoupper($_SESSION['fname'] ." ".  $_SESSION['lname'])  ?></title>
    <link rel="shortcut icon" href="/IMAGE_FILES/download.jfif" type="image/x-icon">
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
                         echo "<p><img src='$imgurl' alt='student image' width='30px' height = '30px'></p>";
                    }  
                }

            ?> 
         <p><button type="button" id="cla_btn" onclick="cla_btn()">Show calcul.</button></p>
         <p><button type="button" id="cla_btn" onclick="hide_btn()">Hide calcul.</button></p>
         <p><button type="button" id="logout-btn">Logout</button> </p>
    </section>
    <form action="" method="post" id="myform">
        <section class="main">
            <div id="ended">
                <div class="sub_header">
                    <div><span id="count">
                        <?php
                            echo  $_SESSION['current_question_index'] +1  . " of " .$totalQuestions;
                        ?>
                    </span></div>
                    <div><span id="dura">00:00</span></div>
                </div>
                <div class="Q_section">
                <?php
                    $currentQuestion = $shuffledQuestions[$_SESSION['current_question_index']];
                    if (!isset($_SESSION['user_answers'])) {
                        $_SESSION['user_answers'] = array_fill(0, $totalQuestions, '');
                    }
                ?>
        <div><b><?php  echo htmlspecialchars($currentQuestion['questions']). "<br>"?></b></div>
        <label for="optionsa">
            <p><span>A</span>
                <input type="radio" name="opt" value="A" <?php   
        if(isset($_COOKIE[$_SESSION['current_question_index'] +1]) && $_COOKIE[$_SESSION['current_question_index'] +1]==="A"){echo 'checked';}
        ?>>
                <?php  echo  htmlspecialchars($currentQuestion['opt_A'])  ;?>
            </p>
        </label>
        <label for="optionsb">
            <p><span>B</span>
                <input type="radio" name="opt" value="B" <?php  
        if(isset($_COOKIE[$_SESSION['current_question_index'] +1]) && $_COOKIE[$_SESSION['current_question_index'] +1]==="B"){echo 'checked';}
        ?>>
                <?php  echo htmlspecialchars($currentQuestion['opt_B']); ?>
            </p>
        </label>
        <label for="optionsc">
            <p><span>C</span>
                <input type="radio" name="opt" value="C" <?php 
        if(isset($_COOKIE[$_SESSION['current_question_index'] +1]) && $_COOKIE[$_SESSION['current_question_index'] +1]==="C"){echo 'checked';} 
        ?>>
                <?php echo htmlspecialchars($currentQuestion['opt_C']); ?>
            </p>
        </label>

        <label for="optionsd">
            <p><span>D</span>
                <input type="radio" name="opt" value="D" <?php  
        if(isset($_COOKIE[$_SESSION['current_question_index'] +1]) && $_COOKIE[$_SESSION['current_question_index'] +1]==="D"){echo 'checked';}
        ?>>
                <?php echo htmlspecialchars($currentQuestion['opt_D']); ?>
            </p>
        </label>

                </div>
                <div class="Next_previous">
                    <div><input type="submit" value="previous" name="previous" id="previousbtn"></div>
                    <div><input type="submit" value="next" name="next" id="nextbtn"></div>
                </div>
            </div>
    
            <div class="aside">
                <div id="one">
                    <p class="quickQuestions"><b><u>quick questions</u></b></p>
                    <div class="Q_questions">

                <?php
                            for($i = 1 ; $i <= $totalQuestions; $i++ ){
                                $answered = isset($_COOKIE[$i]) ? 'answered' : 'not-answered';
                                echo "<input type='submit' value='$i' name='$i' class='question-button $answered'>";
                            }
                            if (isset($_POST['next']) || isset($_POST['previous'])) {
                                if (!isset($_POST[$currentQuestion['id']])) {
                                    echo '';
                                } else {
                                    $_SESSION['user_answers'][$_SESSION['current_question_index']] = $_POST[$currentQuestion['id']];
                                    if (isset($_POST['next'])) {
                                        $_SESSION['current_question_index']++;
                                        if ($_SESSION['current_question_index'] >= $totalQuestions) {
                                            $_SESSION['current_question_index'] = 0; // Loop back to the first question
                                        }
                                    } elseif (isset($_POST['previous'])) {
                                        $_SESSION['current_question_index']--;
                                        if ($_SESSION['current_question_index'] < 0) {
                                            $_SESSION['current_question_index'] = $totalQuestions - 1; // Wrap around to the last question
                                        }
                                    }
                                }
                            }
                    
                ?>
                        <div><input type="submit" value="Submit" name="Submit" id="submit"></div>
                    </div>
                </div>   
            </div>
        </section>
    </form>
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
    <script src="/JAVASCRIPT_FILES/calculator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/JAVASCRIPT_FILES/navigation.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="/JAVASCRIPT_FILES/examination.js"></script>
</body>
</html>
 
<?php
if (isset($_POST['Submit'])) {
    unset($_SESSION['timer']);
    setcookie('timer', '', time() - 3600, '/');
    $score = 0;
    for ($i = 0; $i < $totalQuestions; $i++) {
        $correctAnswer = $shuffledQuestions[$i]['correct_answer'];
        if (isset($_COOKIE[$i + 1])) {
            $userAnswer = $_COOKIE[$i + 1];
        } else {
            $userAnswer = ''; // or some other default value
        }
        if (isset($userAnswer)) {
            if ($userAnswer == $correctAnswer) {
                $score += 2;
            } else {
                $score += 0;
            }
        } else {
            $score += 0;
        }
    }
    echo "Your score is $score out of " . $totalQuestions * 2;
    
    /* code to insert the scores to database */
    $student_name = $_SESSION['fname'] ." ".  $_SESSION['lname'];
    $student_score =  $score; 

    $query1 = "SELECT * FROM  result_ss3 where  name = '$student_name' ";
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) > 0 ) {
        $query_update = "UPDATE result_ss3 SET new_D = $student_score WHERE name = \"$student_name\"";
        mysqli_query($conn, $query_update);
    } else {
        $query_insert = "INSERT INTO result_ss3 (name, new_D) VALUES ('$student_name','$student_score')";
        mysqli_query($conn, $query_insert);
    }
    
    header("location: ../sss3_finished/newD_finished.php");
}
if (!isset($_SESSION['timer'])) {
    $time_value = $conn->query("SELECT time FROM ss3_timer_table WHERE subjectt = 'New_D'")->fetch_column();
    $time_in_seconds = $time_value * 60;
    $_SESSION['timer'] = $time_in_seconds;
}
if (isset($_COOKIE['timer'])) {
    $_SESSION['timer'] = $_COOKIE['timer'];
} else {
    $time_value = $conn->query("SELECT time FROM ss3_timer_table WHERE subjectt = 'New_D'")->fetch_column();
    $_SESSION['timer'] = $time_value * 60;
}
if (isset($_POST['yes'])) {
    echo '<script> Swal.fire({
                title: " Warning",
                text: " Submit Before You Logout !!!",
                icon: "warning"
            })</script>';
}
?>
<script>
    let timeInSeconds = <?php echo $_SESSION['timer']; ?>
</script>
 