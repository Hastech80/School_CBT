<?php
    session_start();
    session_destroy();

    header('location: ../index.php');
    echo  '<script>Swal.fire({
        title: "LOGED OUT!",
        text: "LOGED OUT SUCCESSFUL",
        icon: "success"
      });</script>';

?>
 