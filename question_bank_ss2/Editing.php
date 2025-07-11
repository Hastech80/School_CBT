<?php   include("../pure_php_files/connection.php"); ?>
<?php
    if (isset($_POST['edit_math1'])) {
        $check_table = "SHOW TABLES LIKE 'mathematics_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='q_math_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'english_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/eng_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'physics_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/phy_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'chemistry_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/chem_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'biology_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/bio_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'agric_sci_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/agric_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'civic_edu_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/civic_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'technical_dra_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/technical_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'book_keeping_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/book_keeping_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'account_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/account_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'commerce_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/commerce_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'CRK_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/crk_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'IRK_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/irk_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'economics_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/economics_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'geography_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/geogra_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'history_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/history_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'literature_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/literature_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'phe_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/phe_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'yoruba_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/yoruba_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'marketing_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/marketing_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'government_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/government_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'data_process_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/data_p_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'animal_hus_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/animal_hus_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'computer_sci_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/com_sci_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'catering_craft_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/creative_c_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'further_Maths_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/further_m_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'new_A_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/newA_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'new_B_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/newB_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'new_C_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/newC_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'new_D_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/newD_ss2.php';</script>";
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
        $check_table = "SHOW TABLES LIKE 'new_E_ss2'";
        $result = $conn->query($check_table);
        if ($result ->num_rows >0){
            if ( headers_sent() ) {
                 echo "<script type='text/javascript'>window.location.href='../question_bank_ss2/newE_ss2.php';</script>";
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