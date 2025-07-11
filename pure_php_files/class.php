<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SHOETAN HASSAN AYOMIDE">
    <meta name="DESCRIPTION" content="a cbt web app for schools to add questions and set time for student">
    <meta name="keywords" content="php, css, css, js sql">
    <title>HASTECH CBT WEB APP</title>
    <link rel="shortcut icon" href="/IMAGE FILES/IMG-20240406-WA0003.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/CSS_FILES/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- <header>
        <div>Dashboard</div>
        <div>Administrator control panel for fumac high school vlap.</div>
        <div>"Admin name"</div>
        <div><img src="/IMAGE_FILES/IMG-20240406-WA0003.jpg" alt="admin img" width="30px"></div>
        <div><a href=""><i class='bx bx-log-out'></i>logout</a></div>
    </header>
 -->
    <?php include("./header.php")?>
     
<!--     <nav class="sidebar">
        <ul>
            <li><a href=""><i class='bx bxs-user-circle'></i> student profile</a></li>
            <li><a href=""><i class='bx bxs-user'></i> teachers profile</a></li>
            <li><a href=""><i class='bx bx-book-add'></i> add questions</a></li>
            <li><a href=""> <i class='bx bx-street-view'></i>student result</a></li>
            <li><a href=""><i class='bx bxs-cog'></i>settings</a></li>
            <li><a href=""><i class='bx bxs-contact'></i>contact us / help</a></li>
            <li><a href=""><i class='bx bxs-save'></i>saved questions</a></li>
            <li><a href=""><i class='bx bx-link-external'></i>student page</a></li>
            
        </ul>
    </nav> -->

    <?php include('./sidebar.php')?>

    <aside>
        <div><a href="../question_bank_ss1/sss1.php"><i class='bx bxs-group'></i><br> class_A  <br>sss1</a> </div>
        <div><a href="../question_bank_ss2/sss2.php"><i class='bx bxs-group'></i><br>class_b <br>sss2</a> </div>
        <div><a href="../question_bank_ss3/sss3.php"><i class='bx bxs-group'></i><br>class_c <br>sss3</a> </div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_d  <br>jss1</a></div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_e <br>jss2</a> </div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_f <br>jss3</a> </div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_g <br>----</a> </div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_h <br>----</a> </div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_i  <br>----</a></div>
        <div><a href=""><i class='bx bxs-lock'></i><br>class_j  <br>----</a></div>
    </aside>

    <footer>
        <span> &copy;Powered By Hastech  +2349068508072 ---- hastech80@gmail.com. </span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
     print  '<script>Swal.fire({
        title: "WELCOME ADMINISTRATOR",
        text: "LOGED IN SUCCESSFULLY",
        icon: "success"
      });</script>'; 


?>