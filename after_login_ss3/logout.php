<?php
    session_start();
    session_destroy();

    header('location: ../pure_php_files/exam_final_control_panel/Exam_final_control_panel_1.php');
    echo  '<script>Swal.fire({
        title: "LOGED OUT!",
        text: "LOGED OUT SUCCESSFUL",
        icon: "success"
      });</script>';

?>
