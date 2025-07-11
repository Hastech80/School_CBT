<?php
    include("./connection.php");
    if (isset($_POST['register'])) {
        $firstname = $_POST['fname'];
        $othernames = $_POST['oname'];
        $sid = $_POST['sid'];
        $password = $_POST['password'];
        $secure_password = password_hash($password,PASSWORD_DEFAULT);
        $class = $_POST['class'];
        $gender = $_POST['gender'];


        // for checkbox
        if (isset($_POST['head_boy'])){
            $position = 'Head_boy <br>';
        }
        if (isset($_POST['ahead_boy'])){
            $position = 'Assit. head_boy <br>';
        }
        if (isset($_POST['head_girl'])){
            $position = 'head_girl <br>';
        }
        if (isset($_POST['ahead_girl'])){
            $position = 'Assit. head_girl <br>';
        }
        if (isset($_POST['Others'])){
            $position = 'Others <br>';
        }
        if (isset($_POST['None'])){
            $position = 'None <br>';
        }

        // for image
        $filename = $_FILES['image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowedtype = array('jpg', "jpeg", 'png', 'pdf');
        $size = $_FILES['image']['size'];
        $tempname= $_FILES['image']['tmp_name'];
        $targetpath = "studentPic/".$filename;

    
        //to check if the student id exist.
        $checksid = "SELECT * FROM student where student_id ='$sid'";
        $result101 = $conn->query($checksid); 

        if($result101->num_rows > 0){
            print  "<script>alert('student id  already used by another student, try another id')</script>";
        } else{
            if($size >= 103000){
                print  "<script>alert('Your image must be less than 100kb')</script>";     
            }
            else{
                        if(in_array($ext, $allowedtype)) {
                            if(move_uploaded_file($tempname, $targetpath)){
                                $query1 = "INSERT INTO student (firstname, otherNames, student_id,password, class, gender, student_image, position) VALUES ('$firstname','$othernames','$sid','$secure_password','$class',' $gender','$filename','$position')";
                                if(mysqli_query($conn, $query1)){
                                    print  "<script>alert('student is registered')</script>";
                                }
                                else{                             
                                    print  "<script>alert('something is wrong')</script>";                               
                                }
                            }else{                          
                                print "<script>alert('file not uploaded')</script>";                           
                            }
                        }
                        else{                    
                            print "<script>alert('your files are not allowed, only jpg, jpeg, pdf, png is allowed')</script>";
                        }
                    }
            }
        
        }

       
    
?>

