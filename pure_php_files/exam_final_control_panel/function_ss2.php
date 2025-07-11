
<?php
 
    function check_timer($subject){
      include("../connection.php");
      $timer = $conn->query("SELECT time FROM ss2_timer_table WHERE subjectt = '$subject'")->fetch_column();
      if ($timer) {
        echo "$timer Min.";
      }else{
        echo "not set";
      }
    }
    

    function count_questions($subject_question_table){
      include("../connection.php");
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



    function status($subject,$subject_question_table){
      include("../connection.php");

      try {
          $timer = $conn->query("SELECT time FROM ss2_timer_table WHERE subjectt = '$subject'")->fetch_column();
          $sql = "SELECT * FROM $subject_question_table";
          if($result = mysqli_query($conn, $sql)){
            $rowcount = mysqli_num_rows($result);
          }else {
            $rowcount = 0;
          }

          ### checking the status 
          if ($timer == true && $rowcount >= 5) {
            echo "<b id='ready'>Ready Mode</b>";
          }else{
            echo "<b id='notready'> Not Ready Mode</b>";
          }
      } catch (MYSQLI_SQL_EXCEPTION) {
        echo "<b id='notready'> Not Ready Mode</b>";
      } 
    }


    function activator($subject,$subject_question_table ,$page) {
      include("../connection.php");
      try {
          $timer = $conn->query("SELECT time FROM ss2_timer_table WHERE subjectt = '$subject'")->fetch_column();
          $sql = "SELECT * FROM $subject_question_table";
          if($result = mysqli_query($conn, $sql)){
            $rowcount = mysqli_num_rows($result);
          }else {
            $rowcount = 0;
          }

          ### checking the status 
          if ($timer == true && $rowcount >= 5) {
            //header("location: ../studentLogin.php ");
            header("location: $page ");
          }else{
            echo  '<script>Swal.fire({
                    title: "Total Error!!!",
                    text: "Timer is not set and questions is less than 5, add more questions and update the timer for this exam to be in ready mode.",
                    icon: "error"
                  });</script>';
          }
      } catch (MYSQLI_SQL_EXCEPTION) {
        echo  '<script>Swal.fire({
          title: "Total Error!!!",
          text: "Timer is not set and questions is less than 5, add more questions and update the timer for this exam to be Activated.",
          icon: "error"
        });</script>';
      } 
    }
?> 
<style>
  #ready{
    background-color: yellow;
    color: black;
    padding: 1.8px;
    border-radius: 3px;
    margin: 1px;
  }
  #notready{
    background-color: red;
    color: white;
    padding: 1.8px;
    border-radius: 3px;
    margin: 1px;
    font-size: 15px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>