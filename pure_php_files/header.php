 
 <?php include("./preloader.php")?>
<header>
    <head>
        <link rel="stylesheet" href="/CSS_FILES/STUDENT_PROFILE.CSS">
    </head>
        <div class="Dashboard">Dashboard</div>
        <div class="Administrator">Administrator control panel for fumac high school vlap.</div>
        <div class="count1 isset"> 
        <?php
            include("./connection.php");
            session_start();
            if(isset($_SESSION['teachers_id'])){
                $teachers_id = $_SESSION['teachers_id'];
                $query = mysqli_query($conn, "SELECT teachers_data. * FROM `teachers_data` WHERE teachers_data.teachers_id ='$teachers_id'");
                while($row = mysqli_fetch_array($query)){
                    echo $row['firstname']." ".$row['otherNames'];
                }
            }
    
         ?>
        </div>

        <!-- <div><img src="/IMAGE FILES/IMG-20240406-WA0003.jpg" alt="admin img" width="30px"></div> -->
        <!-- echo   <img src='$imgurl' width='50px' height='50px' id='pic'> ; -->
        <div>
        <?php
            if(isset($_SESSION['teachers_id'])){
                $teachers_id = $_SESSION['teachers_id'];
                $query = mysqli_query($conn, "SELECT teachers_data. * FROM `teachers_data` WHERE teachers_data.teachers_id ='$teachers_id'");
                while($row = mysqli_fetch_array($query)){
                    $direction = $row['teachers_image'];
                    $imgurl = "teachersPic/".$direction;
                    echo "<img src='$imgurl' width='33px' class='pppo' height='33px' alt='admin pic' style='border-radius: 40%;margin-top = 1px' > ";
                }  
            }
    
        ?>
        </div>
        <div ><a href="./logout.php"><i class='bx bx-log-out'></i>logout</a></div>
    </header>

<style>
    @media screen and (max-width:1115px){
        header{
            grid-template-columns:   4fr 1fr 0.5fr 1fr;
        }
        .Dashboard{
            display: none;
        }
    }
    @media screen and (max-width: 980px){
        .Administrator, a,i{
            font-size: 20px;
        }
    }
    @media screen and (max-width: 790px){
        img{
            width: 25px;
            height: 25px;
        }
        .Administrator, a,i,.isset{
            font-size: 16.5px;
        }
    }
    @media screen and (max-width: 727px){
        .isset{
            font-size: 13px;

        }
    }
</style> 