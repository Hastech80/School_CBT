<?php  
 
include("../pure_php_files/connection.php");
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
    <link rel="shortcut icon" href="/IMAGE_FILES/IMG-20240406-WA0003.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="/CSS_FILES/subadding_wuestions.css">   
</head>
<body>
    <section class="general" id="general">
        <section class="sec_general">
            <?php include("school_heading.php")?>

            <p>Senior Secondary School 1 {SSS1} Question Bank for  <span class="count" style="color:green; "> new_A.</span></p><br>
            
            <div class="login_section container" id="r_log">
                 <form action=" " method="post">
                    <p> Adding Questions ------------ <SPan style="color: red; " class="count">
                    <?php
                            $sql = "SELECT * FROM new_A_ss1";
                            if($result = mysqli_query($conn, $sql)){
                                $rowcount = mysqli_num_rows($result);
                                echo "$rowcount Questions Added";
                            }
                        ?>
                    </SPan></p>
                     
                    <label for="sin" class="question">Question </label>
                    <textarea name="question" id="" cols="100" rows="2" required placeholder=" Questions "></textarea> <br><br>

                    <label for="CLASS"> Option A  </label>
                    <textarea name="optA" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option A  "></textarea> <br><br>

                    <label for="CLASS"> Option B  </label>
                    <textarea name="optB" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option B  "></textarea> <br><br>
                    <label for="CLASS"> Option C  </label>
                    <textarea name="optC" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option C "></textarea> <br><br>
                    <label for="CLASS"> Option D  </label>
                    <textarea name="optD" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option D  "></textarea> <br><br>

                    <label for="correct">Correct Answer: </label>
                    <select name="answer" id="hhh" required>
                        <option  value="----">----</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    <br><br>
                    <input type="submit" value=" ADD" id="login" name="add">
                 </form>
            </div><br><hr>


            <div class="update login_section container">
                <p class="edit_cover">edit questions with question ID</p>
                <form action="" method="post">
                    <label for="">Enter the question ID (Q_ID)</label>
                    <input type="number" name="upid" id="" required placeholder="enter question id" style=" width: 20%;"><br>
                    <label for="sin" class="question">Question </label> 
                        <textarea name="questionE" id="" cols="100" rows="2" required  placeholder=" question " ></textarea> <br><br>
    
                        <label for="CLASS"> Option A  </label>
                        <textarea name="aaa" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option A  "></textarea> <br><br>
                        <label for="CLASS"> Option B  </label>
                       <textarea name="bbb" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option B  "></textarea> <br><br>
                        <label for="CLASS"> Option C  </label>
                        <textarea name="ccc" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option C  "></textarea> <br><br>
                        <label for="CLASS"> Option D  </label>
                        <textarea name="ddd" id="" cols="100" rows="1" required style="margin-left: 20px;"  placeholder=" Option D  "></textarea> <br><br>

                        <label for="correct">Correct Answer: </label>
                        <select name="CA" id="hhh" required>
                            <option >------</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <br><br>
                        <input type="submit" value="EDIT" name="EDIT"  class="edit">
                </form>
                
            </div><br>
        
            <div class="update login_section container  " > 
                <p>delete questions with question ID.</p><br>
                <form action="" method="post">
                    <label for="">Enter the question ID (Q_ID)</label> 
                    <input type="number" name="QID" id="" placeholder="Enter the question ID" required style="width: 50%;">
                    <input type="submit" value="Delete" name="delete" class="deletebtn">
                </form>
            </div>
             
        </section>
    </section>

    <div class="Q_UPLOADED container">
                 <p>uploaded question</p><br>
                <div class="qb">
                        <?php
                            $query2 ="SELECT * FROM new_A_ss1 ORDER BY id  ";
                            $result = mysqli_query($conn ,$query2 );
                            if ($result -> num_rows > 0) {
                                while($row = mysqli_fetch_array($result)){
                                    $Q_ID  = $row['id'];
                                    $questions  = $row['questions'];
                                    $option_A  = $row['opt_A'];
                                    $option_B  = $row['opt_B'];
                                    $option_C  = $row['opt_C'];
                                    $option_D  = $row['opt_D'];
                                    $answers  = $row['correct_answer'];

                                    

                                    echo "<div><b>Question id </b>: <SPan class = 'qidd'><b> $Q_ID </b></SPan></div>";
                                    echo "<div><b>Question</b>  :  " . htmlspecialchars($questions) . "   </div>";
                                    echo "<div><b>Option A</b>  :   " . htmlspecialchars($option_A) . "   </div>";
                                    echo "<div><b>Option B</b>  :   " . htmlspecialchars($option_B) . "   </div>";
                                    echo "<div><b>Option C</b>  :   " . htmlspecialchars($option_C) . "   </div>";
                                    echo "<div><b>Option D</b>  :  " . htmlspecialchars($option_D) . "   </div>";                               
                                    echo "<div><b>CORRECT ANSWER</b>  : <b class='answer'>$answers</b></div>"; 
                                    echo "<hr><br>";

                                }
                            }  
    
 
                 
                        ?>
                </div>

            </div>
            <br><hr>
            



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script>
    window.MathJax = {
        tex: {
        inlineMath: [['$', '$'], ["\\(", "\\)"]]
        },
        svg: {
        fontCache: 'global'
        }
    };
</script>
 
    


</body>
</html>





<?php
    if (isset($_POST['add'])) {
        $question = $_POST['question'];
        $optA = $_POST['optA'];
        $optB = $_POST['optB'];
        $optC = $_POST['optC'];
        $optD = $_POST['optD'];
        $correct_A = $_POST['answer'];

                                    $question = mysqli_real_escape_string($conn, $question);
                                    $optA = mysqli_real_escape_string($conn, $optA);
                                    $optB = mysqli_real_escape_string($conn, $optB);
                                    $optC = mysqli_real_escape_string($conn, $optC);
                                    $optD = mysqli_real_escape_string($conn, $optD);

        

        if ($correct_A === '----') {
           
            echo  '<script>Swal.fire({
                title: "ERROR OCCURED",
                text: "NOT ADDED, CORRECT ANSWER  NOT GIVEN",
                icon: "error"
              });</script>';
              
        } else {
            $sql_add = "INSERT INTO new_A_ss1 (questions, opt_A, opt_B,opt_C,opt_D,correct_answer) VALUES ('$question','$optA','$optB','$optC','$optD','$correct_A')" ;
             
    
            if (mysqli_query($conn, $sql_add)) {
                
                print  '<script>Swal.fire({
                    title: "GOOD JOB",
                    text: "ADDED SUCCESSFULLY",
                    icon: "success"
                  });</script>';
            } else {
                
                print  '<script>Swal.fire({
                    title: "WARNING",
                    text: "NOT ADDED SUCCESSFULLY",
                    icon: "warning"
                  });</script>';
                
            }
        }
    
       
    }

?>


<?php
         if (isset($_POST['EDIT'])) {
            $sid = $_POST['upid'];
            $question = $_POST['questionE'];
            $A = $_POST['aaa'];
            $B = $_POST['bbb'];
            $C = $_POST['ccc'];
            $D = $_POST['ddd'];
            $ANSWER = $_POST['CA'];
            

            $question = mysqli_real_escape_string($conn, $question);
            $A = mysqli_real_escape_string($conn, $A);
            $B = mysqli_real_escape_string($conn, $B);
            $C = mysqli_real_escape_string($conn, $C);
            $D = mysqli_real_escape_string($conn, $D);
    
            $sql1 = "UPDATE new_A_ss1 SET questions = '$question' ,opt_A = ' $A' , opt_B = ' $B', opt_C= ' $C', opt_D = ' $D'  WHERE id = '$sid'";
            if(mysqli_query($conn, $sql1)){
                echo '<script>Swal.fire({
                    title: "QUESTION CHANGED!",
                    text: "question changed  Successfully {Refresh}",
                    icon: "success"
                  });</script>';
            }else{
                echo '<script>Swal.fire({
                    title: "AN ERROR OCCURED!",
                    text: "Try again ,question not changed successfully",
                    icon: "error"
                  });</script>';
            }
         }

?>





<?php
     if (isset($_POST['delete'])) {
        $sid = $_POST['QID'];
        $statement1 = "DELETE FROM new_A_ss1 WHERE id = $sid ";
        $statement2 = "DELETE FROM new_A_ss1 WHERE id = $sid ";
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
 