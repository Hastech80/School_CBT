
<?php
 
    function check_timer($subject){
      include("./connection.php");
      $timer = $conn->query("SELECT time FROM ss1_timer_table WHERE subjectt = '$subject'")->fetch_column();
      if ($timer) {
        $time = $timer;
      }else{
        $time = 0;
      }
      return $time;
    }
    

    function count_questions($subject_question_table){
      include("./connection.php");
      try {
          $sql = "SELECT * FROM $subject_question_table";
          if($result = mysqli_query($conn, $sql)){
              $rowcount = mysqli_num_rows($result);
              $count = $rowcount;
          }else {
            $count = 0;
          }
      } catch (MYSQLI_SQL_EXCEPTION) {
        $count = 0;
      } 
      return $count;
    }



    function status($subject,$subject_question_table){
      include("./connection.php");

      try {
          $timer = $conn->query("SELECT time FROM ss1_timer_table WHERE subjectt = '$subject'")->fetch_column();
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


    function activator($subject,$subject_question_table) {
      include("./connection.php");
      try {
          $timer = $conn->query("SELECT time FROM ss1_timer_table WHERE subjectt = '$subject'")->fetch_column();
          $sql = "SELECT * FROM $subject_question_table";
          if($result = mysqli_query($conn, $sql)){
            $rowcount = mysqli_num_rows($result);
          }else {
            $rowcount = 0;
          }

          ### checking the status 
          if ($timer == true && $rowcount >= 5) {
            header("location: ../studentLogin.php ");
          }else{
            echo  '<script>Swal.fire({
                    title: "Total Error!!!",
                    text: "Timer is not set and questions is less than 5, add more questions and update the timer for this exam to be in ready mode.",
                    icon: "error"
                  });</script>';
          }
      } catch (MYSQLI_SQL_EXCEPTION) {
        echo "No Database";
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