<?php   include("../pure_php_files/connection.php"); ?>
<?php
    if (isset($_POST['edit_math1'])) {
        $check_table = "SHOW TABLES LIKE 'mathematics_sss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            //header("Location: ../question_bank_ss1/q_math_ss1.php");
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='q_math_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }    
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_eng'])) {
        $check_table = "SHOW TABLES LIKE 'english_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/eng_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_phy'])) {
        $check_table = "SHOW TABLES LIKE 'physics_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/phy_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_chemistry'])) {
        $check_table = "SHOW TABLES LIKE 'chemistry_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/chem_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_biology'])) {
        $check_table = "SHOW TABLES LIKE 'biology_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/bio_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_agric_sci'])) {
        $check_table = "SHOW TABLES LIKE 'agric_sci_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/agric_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_civic_edu'])) {
        $check_table = "SHOW TABLES LIKE 'civic_edu_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/civic_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_technical_dra'])) {
        $check_table = "SHOW TABLES LIKE 'technical_dra_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/technical_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_book_keeping'])) {
        $check_table = "SHOW TABLES LIKE 'book_keeping_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/book_keeping_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_account'])) {
        $check_table = "SHOW TABLES LIKE 'account_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/account_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_commerce'])) {
        $check_table = "SHOW TABLES LIKE 'commerce_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/commerce_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_CRK'])) {
        $check_table = "SHOW TABLES LIKE 'CRK_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/crk_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_IRK'])) {
        $check_table = "SHOW TABLES LIKE 'IRK_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/irk_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_economics'])) {
        $check_table = "SHOW TABLES LIKE 'economics_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/economics_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_geography'])) {
        $check_table = "SHOW TABLES LIKE 'geography_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/geogra_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_history'])) {
        $check_table = "SHOW TABLES LIKE 'history_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/history_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_literature'])) {
        $check_table = "SHOW TABLES LIKE 'literature_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/literature_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_phe'])) {
        $check_table = "SHOW TABLES LIKE 'phe_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/phe_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_yoruba'])) {
        $check_table = "SHOW TABLES LIKE 'yoruba_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/yoruba_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_marketing'])) {
        $check_table = "SHOW TABLES LIKE 'marketing_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/marketing_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }

    if (isset($_POST['edit_government'])) {
        $check_table = "SHOW TABLES LIKE 'government_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/government_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_data_process'])) {
        $check_table = "SHOW TABLES LIKE 'data_process_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/data_p_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_animal_hus'])) {
        $check_table = "SHOW TABLES LIKE 'animal_hus_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/animal_hus_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_computer_sci'])) {
        $check_table = "SHOW TABLES LIKE 'computer_sci_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/com_sci_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_catering_craft'])) {
        $check_table = "SHOW TABLES LIKE 'catering_craft_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/creative_c_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_further_Maths'])) {
        $check_table = "SHOW TABLES LIKE 'further_Maths_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/further_m_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_new_A'])) {
        $check_table = "SHOW TABLES LIKE 'new_A_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/newA_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_new_B'])) {
        $check_table = "SHOW TABLES LIKE 'new_B_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/newB_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_new_C'])) {
        $check_table = "SHOW TABLES LIKE 'new_C_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/newC_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_new_D'])) {
        $check_table = "SHOW TABLES LIKE 'new_D_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/newD_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
    if (isset($_POST['edit_new_E'])) {
        $check_table = "SHOW TABLES LIKE 'new_E_ss1'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss1/newE_ss1.php';</script>";
            } else {
                print '<script>Swal.fire({
                    title: "WARNING",
                    text: "header not sent",
                    icon: "warning"
                  });</script>';
            }   
        }else {
            print '<script>Swal.fire({
                title: "WARNING",
                text: "No Place To Store This Questions, click on the Create button before clicking on edit button",
                icon: "warning"
              });</script>';
        }
    }
     
    
    
     
?>