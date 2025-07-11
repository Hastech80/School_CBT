
<?php
 
    function check_timer($subject){
      include("../pure_php_files/connection.php");
      $timer = $conn->query("SELECT time FROM ss1_timer_table WHERE subjectt = '$subject'")->fetch_column();
      if ($timer) {
        echo "$timer Min.";
      }else{
        echo "not set";
      }
    }
    

    function count_questions($subject_question_table){
      include("../pure_php_files/connection.php");
      try {
          $sql = "SELECT * FROM $subject_question_table";
          if($result = mysqli_query($conn, $sql)){
              $rowcount = mysqli_num_rows($result);
              echo "$rowcount";
          }else {
            echo'not set';
          }
      } catch (MYSQLI_SQL_EXCEPTION) {
        echo'No Database';
      } 
    }

    
    if (isset($_COOKIE['timer'])) {   
        unset($_SESSION['timer']);
        setcookie('timer', '', time() - 3600, '/');
    }
?>
