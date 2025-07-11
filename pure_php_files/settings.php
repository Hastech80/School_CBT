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
    <link rel="stylesheet" href="/CSS_FILES/settings.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     
</head>
<body>
    <!-- <header>
        <div>Dashboard</div>
        <div>Administrator control panel for fumac high school vlap.</div>
        <div>"Admin name"</div>
        <div><img src="/IMAGE_FILES/download.jfif" alt="admin img" width="30px"></div>
        <div><a href=""><i class='bx bx-log-out'></i>logout</a></div>
    </header> -->
    <?php include("./header.php")?>
    <?php include('./sidebar.php')?>
   <!--  <nav class="sidebar">
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

    <aside>
        <section class="sec_general" style="margin-left:12px;">
            <div class="login_section container" id="r_log">
                 <form action="./settings.php" method="post">
                    <h2> SETTINGS [Do Not Edit The School Settings] </h2>
                     
                    <label for="sin">Name Of School: </label>
                    <input type="text" name="sin" id="num" placeholder="enter your Name Of School" required style="margin-left: 10px;"><br><br>

                    <label for="sin"> School Email:  </label>
                    <input type="text" name="sin" id="num" placeholder="enter School Email:" required style="margin-left: 30px;"><br><br>

                    <label for="CLASS"> CBT Year: </label>
                    <input type="text" placeholder="CBT Year: " name="text" id="five"  required style="margin-left: 58px;"><br><br>

                    <label for="CLASS"> Test Type </label>
                    <input type="text" placeholder="Test Type: " name="text" value="COMPUTER BASED TEST" id="five"  required style="margin-left: 65px;"><br><br>

                    <label for="CLASS"> School phone no.: </label>
                    <input type="text" placeholder="School phone no. " name="text"   id="five"  required style="margin-left: 5px;"><br><br>

                    <label for="CLASS"> Admin copyright: </label>
                    <input type="text" placeholder="School phone no. " name="text"   id="five"  required value="@school name" style="margin-left: 10px;"><br><br>


                    <input type="submit" value="UPDATE" id="login" name="update">
                 </form>
            </div>
        </section>
    </aside>

    <footer>
        <span> &copy;Powered By Hastech  +2349068508072 ---- hastech80@gmail.com. </span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php
        print  '<script>Swal.fire({
            title: "DO NOT CHANGE THE SCHOOL SETTINGS",
            text: "THE SETTINGS HAS BEEN DONE FROM THE SUPER ADMIN PORTAL",
            icon: "warning"
          });</script>'; 
    if (isset($_POST['update'])) {
        print  '<script>Swal.fire({
            title: "DO NOT CHANGE THE SCHOOL SETTINGS",
            text: "THE SETTINGS HAS BEEN DONE FROM THE SUPER ADMIN PORTAL",
            icon: "warning"
          });</script>'; 
    }



?>