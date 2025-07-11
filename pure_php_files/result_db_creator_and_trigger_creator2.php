<?php
            function create_database($table_name){
                include("./connection.php");
                try {
                    $sql_m_ss1 = "CREATE TABLE `cbt`.`$table_name` (
                                                                    `id` INT(100) PRIMARY KEY  AUTO_INCREMENT , 
                                                                    `name` VARCHAR(100) NOT NULL  , 

                                                                    `maths` INT(100) DEFAULT 0 ,
                                                                    `eng` INT(100) DEFAULT 0 ,
                                                                    `phy` INT(100) DEFAULT 0 ,
                                                                    `chem` INT(100) DEFAULT 0 ,
                                                                    `bio` INT(100) DEFAULT 0 ,
                                                                    `agric` INT(100) DEFAULT 0 ,

                                                                    `civic` INT(100) DEFAULT 0 ,
                                                                    `technical` INT(100) DEFAULT 0 ,
                                                                    `book_k` INT(100) DEFAULT 0 ,
                                                                    `account` INT(100) DEFAULT 0 ,
                                                                    `commerce` INT(100) DEFAULT 0 ,
                                                                    `crk` INT(100) DEFAULT 0 ,

                                                                    `irk` INT(100) DEFAULT 0 ,
                                                                    `econo` INT(100) DEFAULT 0 ,
                                                                    `geo` INT(100) DEFAULT 0 ,
                                                                    `his` INT(100) DEFAULT 0 ,
                                                                    `lit` INT(100) DEFAULT 0 ,
                                                                    `phe` INT(100) DEFAULT 0 ,

                                                                    `yoruba` INT(100) DEFAULT 0 ,
                                                                    `market` INT(100) DEFAULT 0 ,
                                                                    `govern` INT(100) DEFAULT 0 ,
                                                                    `data_p` INT(100) DEFAULT 0 ,
                                                                    `animal_hus` INT(100) DEFAULT 0 ,
                                                                    `computer_sci` INT(100) DEFAULT 0 ,

                                                                    `careati` INT(100) DEFAULT 0 ,
                                                                    `further_m` INT(100) DEFAULT 0 ,
                                                                    `new_A` INT(100) DEFAULT 0 ,
                                                                    `new_B` INT(100) DEFAULT 0 ,
                                                                    `new_C` INT(100) DEFAULT 0 ,
                                                                    `new_D` INT(100) DEFAULT 0 ,
                            
                                                                    `new_E` INT(100) DEFAULT 0 ,
                                                                    `total` INT(100) DEFAULT 0 
                                                                    )";
                    $table = mysqli_query($conn, $sql_m_ss1); /* check this out */

                    $trigger_insert = "CREATE TRIGGER total_insert BEFORE INSERT ON `$table_name` FOR EACH ROW SET
                                                                    NEW.total = (NEW.maths+
                                                                                NEW.eng+
                                                                                NEW.phy+
                                                                                NEW.chem+
                                                                                NEW.bio+
                                                                                NEW.agric+
                                                                
                                                                                NEW.civic+
                                                                                NEW.technical+
                                                                                NEW.book_k+
                                                                                NEW.account+
                                                                                NEW.commerce+
                                                                                NEW.crk+
                                                                
                                                                                NEW.irk+
                                                                                NEW.econo+
                                                                                NEW.geo+
                                                                                NEW.his+
                                                                                NEW.phe+
                                                                                NEW.lit+
                                                                
                                                                                NEW.yoruba+
                                                                                NEW.market+
                                                                                NEW.govern+
                                                                                NEW.data_p+
                                                                                NEW.animal_hus+
                                                                                NEW.computer_sci+
                                                                
                                                                                NEW.careati+
                                                                                NEW.further_m+
                                                                                NEW.new_A+
                                                                                NEW.new_B+
                                                                                NEW.new_C+
                                                                                NEW.new_D+
                                                                
                                                                                NEW.new_E
                                                                    )
                                                                ";
                $table_trigger_insert = mysqli_query($conn, $trigger_insert);
                
                $trigger_update = "CREATE TRIGGER total_update BEFORE UPDATE ON `$table_name` FOR EACH ROW SET
                                                                    NEW.total = (NEW.maths+
                                                                                NEW.eng+
                                                                                NEW.phy+
                                                                                NEW.chem+
                                                                                NEW.bio+
                                                                                NEW.agric+
                                                                
                                                                                NEW.civic+
                                                                                NEW.technical+
                                                                                NEW.book_k+
                                                                                NEW.account+
                                                                                NEW.commerce+
                                                                                NEW.crk+
                                                                
                                                                                NEW.irk+
                                                                                NEW.econo+
                                                                                NEW.geo+
                                                                                NEW.his+
                                                                                NEW.phe+
                                                                                NEW.lit+
                                                                
                                                                                NEW.yoruba+
                                                                                NEW.market+
                                                                                NEW.govern+
                                                                                NEW.data_p+
                                                                                NEW.animal_hus+
                                                                                NEW.computer_sci+
                                                                
                                                                                NEW.careati+
                                                                                NEW.further_m+
                                                                                NEW.new_A+
                                                                                NEW.new_B+
                                                                                NEW.new_C+
                                                                                NEW.new_D+
                                                                
                                                                                NEW.new_E
                                                                    )
                                                                ";
                
                $table_trigger_update = mysqli_query($conn, $trigger_update);/* check this out */
                    
                    if ($table == true && $table_trigger_insert == true && $table_trigger_update == true ) {
                    print  '<script>Swal.fire({
                        title: "GOOD JOB !!!",
                        text: "Database For Student Result Created And Automation Has Been Activated",
                        icon: "success"
                    });</script>'; 
                    } elseif($table == true && $table_trigger == false ) {
                        print  '<script>Swal.fire({
                            title: "warning",
                            text: "Database For Student Result Created but Automation Has Not Been Activated",
                            icon: "warning"
                        });</script>'; 
                    }  
                    elseif($table == false && $table_trigger == true ) {
                        print  '<script>Swal.fire({
                            title: "warning",
                            text: "Database For Student Result Not Created  Automation Has Been Activated",
                            icon: "warning"
                        });</script>'; 
                    }  else{
                        print  '<script>Swal.fire({
                        title: "Total Error",
                        text: "Database For Student Result Not Created  Automation Has Not Been Activated",
                        icon: "error"
                        });</script>';   
                    }
        
                }
                catch (mysqli_sql_exception) {
                        print  '<script>Swal.fire({
                            title: "WARNING",
                            text: "Table Created, Exams Can Start.",
                            icon: "warning"
                        });</script>';
                }
            };
?>

<?php
   
?>