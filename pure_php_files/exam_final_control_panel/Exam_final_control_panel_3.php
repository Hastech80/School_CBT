<?php 
    ob_start();
    include("../connection.php"); 
    include("./function_ss3.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/CSS_FILES/sss1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/CSS_FILES/exam_final.control_panel.css">
</head>
<body>
        

    
    <header id="second_header">
          <div><a href="../exam_final_control_panel/Exam_final_control_panel_1.php" target="_blank" rel="noopener noreferrer">SSS 1</a></div>
          <div><a href="../exam_final_control_panel/Exam_final_control_panel_2.php" target="_blank" rel="noopener noreferrer">SSS 2</a></div>
          <div><a href="../exam_final_control_panel/Exam_final_control_panel_3.php" target="_blank" rel="noopener noreferrer">SSS 3</a></div>
          <div><a href="../class.php" class=" count2 count " style="margin-left: 50px; padding:5px;"><i class='bx bxs-home sppp'></i></a></div>
          <div ><a href="./logout.php"><i class='bx bx-log-out'></i>logout</a></div>
    </header>

 
        <p style="color: black;"> sss 3 Exam control panel. </p>
        <p style="color: black; width:100%; margin-top: 5px;"> <marquee behavior="" direction="" style="color: black;"><b style="color: black;">NOTE: </b>For the status of any examination to be in ready mode, there must be atleast 5 questions in the database and the timer must be set else the status will remains in <b style="color: black;">not ready mode</b>....... make sure the status is in ready mode before you activate the questions...... contact the developer or super admin if there is any problem. </marquee> </p>
        <form action="" method="post" class="real">  
            <aside>
               
                <div>
                    <a href="">mathematics</a><br> <br>
                    <span>timer : <b><?php check_timer("Mathematics");?></b></span><br>
                    <span>questions : <b><?php count_questions("mathematics_ss3")?></b></span><br>
                    <span>status : <b><?php status("Mathematics","mathematics_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="math" class="create">
                </div>

                <div>
                    <a href="">  english</a><br><br>
                    <span>timer : <b><?php check_timer("English");?></b></span><br>
                    <span>questions : <b><?php count_questions("english_ss3")?></b></span><br>
                    <span>status : <b><?php status("English","english_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="english" class="create">
                </div>  

                <div>
                    <a href="">  physics</a><br><br>
                    <span>timer : <b><?php check_timer("Physics");?></b></span><br>
                    <span>questions : <b><?php count_questions("physics_ss3")?></b></span><br>
                    <span>status : <b><?php status("Physics","physics_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Physics" class="create">
                </div>
                
                <div>
                    <a href="">  chemistry</a><br><br> 
                    <span>timer : <b><?php check_timer("Chemistry");?></b></span><br>
                    <span>questions : <b><?php count_questions("chemistry_ss3")?></b></span><br>
                    <span>status : <b><?php status("Chemistry","chemistry_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Chemistry" class="create">
                </div>
                <div>
                    <a href="">  biology</a><br><br> 
                    <span>timer : <b><?php check_timer("Biology");?></b></span><br>
                    <span>questions : <b><?php count_questions("biology_ss3")?></b></span><br>
                    <span>status : <b><?php status("Biology","biology_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Biology" class="create">
                </div>
                <div>
                    <a href="">  agric sci.</a><br><br> 
                    <span>timer : <b><?php check_timer("Agric_Sci.");?></b></span><br>
                    <span>questions : <b><?php count_questions("agric_sci_ss3")?></b></span><br>
                    <span>status : <b><?php status("Agric_Sci.","agric_sci_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Agric_Sci" class="create">
                </div>
                <div>
                    <a href="">  civic edu</a><br><br> 
                    <span>timer : <b><?php check_timer("Civic_Edu");?></b></span><br>
                    <span>questions : <b><?php count_questions("civic_edu_ss3")?></b></span><br>
                    <span>status : <b><?php status("Civic_Edu","civic_edu_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Civic_Edu" class="create">
                </div>
                <div>
                    <a href="">  technical dra.</a><br><br> 
                    <span>timer : <b><?php check_timer("Technical_Dra.");?></b></span><br>
                    <span>questions : <b><?php count_questions("technical_dra_ss3")?></b></span><br>
                    <span>status : <b><?php status("Technical_Dra.","technical_dra_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Technical_Dra" class="create">
                </div>
                <div>
                    <a href="">  book keeping</a><br><br> 
                    <span>timer : <b><?php check_timer("Book_Keeping");?></b></span><br>
                    <span>questions : <b><?php count_questions("book_keeping_ss3")?></b></span><br>
                    <span>status : <b><?php status("Book_Keeping","book_keeping_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Book_Keeping" class="create">
                </div>
                <div>
                    <a href="">  accounting</a><br><br> 
                    <span>timer : <b><?php check_timer("Accounting");?></b></span><br>
                    <span>questions : <b><?php count_questions("account_ss3")?></b></span><br>
                    <span>status : <b><?php status("Accounting","account_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="accounting" class="create">
                </div>
                <div>
                    <a href="">  commerce</a><br><br> 
                    <span>timer : <b><?php check_timer("Commerce");?></b></span><br>
                    <span>questions : <b><?php count_questions("commerce_ss3")?></b></span><br>
                    <span>status : <b><?php status("Commerce","commerce_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="commerce" class="create">
                </div>
                <div>
                    <a href="">  CRK</a><br><br> 
                    <span>timer : <b><?php check_timer("CRK");?></b></span><br>
                    <span>questions : <b><?php count_questions("CRK_ss3")?></b></span><br>
                    <span>status : <b><?php status("CRK","CRK_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="CRK" class="create">
                </div>
                <div>
                    <a href="">  IRK</a><br><br> 
                    <span>timer : <b><?php check_timer("IRK");?></b></span><br>
                    <span>questions : <b><?php count_questions("IRK_ss3")?></b></span><br>
                    <span>status : <b><?php status("IRK","IRK_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="IRK" class="create">
                </div>
                <div>
                    <a href="">  economics</a><br><br> 
                    <span>timer : <b><?php check_timer("Economics");?></b></span><br>
                    <span>questions : <b><?php count_questions("economics_ss3")?></b></span><br>
                    <span>status : <b><?php status("Economics","economics_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Economics" class="create">
                </div>
                <div>
                    <a href="">  geography</a><br><br> 
                    <span>timer : <b><?php check_timer("Geography");?></b></span><br>
                    <span>questions : <b><?php count_questions("geography_ss3")?></b></span><br>
                    <span>status : <b><?php status("Geography","geography_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Geography" class="create">
                </div>
                <div>
                    <a href="">  history</a><br><br> 
                    <span>timer : <b><?php check_timer("History");?></b></span><br>
                    <span>questions : <b><?php count_questions("history_ss3");?></b></span><br>
                    <span>status : <b><?php status("History","history_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="History" class="create">
                </div>
                <div>
                    <a href="">  literature</a><br><br> 
                    <span>timer : <b><?php check_timer("Literature");?></b></span><br>
                    <span>questions : <b><?php count_questions("literature_ss3")?></b></span><br>
                    <span>status : <b><?php status("Literature","literature_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Literature" class="create">
                </div>
                <div>
                    <a href="">  PHE</a><br><br> 
                    <span>timer : <b><?php check_timer("PHE");?></b></span><br>
                    <span>questions : <b><?php count_questions("phe_ss3")?></b></span><br>
                    <span>status : <b><?php status("PHE","phe_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="PHE" class="create">
                </div>
                <div>
                    <a href="">  yoruba</a><br><br> 
                    <span>timer : <b><?php check_timer("Yoruba");?></b></span><br>
                    <span>questions : <b><?php count_questions("yoruba_ss3")?></b></span><br>
                    <span>status : <b><?php status("Yoruba","yoruba_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Yoruba" class="create">
                </div>
                <div>
                    <a href="">  marketing</a><br><br> 
                    <span>timer : <b><?php check_timer("Marketing");?></b></span><br>
                    <span>questions : <b><?php count_questions("marketing_ss3")?></b></span><br>
                    <span>status : <b><?php status("Marketing","marketing_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Marketing" class="create">
                </div>
                <div>
                    <a href="">  government</a><br><br> 
                    <span>timer : <b><?php check_timer("Government");?></b></span><br>
                    <span>questions : <b><?php count_questions("government_ss3")?></b></span><br>
                    <span>status : <b><?php status("Government","government_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Government" class="create">
                </div>
                <div>
                    <a href="">  data_process.</a><br><br> 
                    <span>timer : <b><?php check_timer("Data_process.");?></b></span><br>
                    <span>questions : <b><?php count_questions("data_process_ss3")?></b></span><br>
                    <span>status : <b><?php status("Data_process.","data_process_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Data_process" class="create">
                </div>
                <div>
                    <a href="">  animal hus.</a><br><br> 
                    <span>timer : <b><?php check_timer("Animal_Hus.");?></b></span><br>
                    <span>questions : <b><?php count_questions("animal_hus_ss3")?></b></span><br>
                    <span>status : <b><?php status("Animal_Hus.","animal_hus_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Animal_Hus" class="create">
                </div>
                <div>
                    <a href="">  computer sci.</a><br><br> 
                    <span>timer : <b><?php check_timer("Computer_Sci.");?></b></span><br>
                    <span>questions : <b><?php count_questions("computer_sci_ss3")?></b></span><br>
                    <span>status : <b><?php status("Computer_Sci.","computer_sci_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Computer_Sci" class="create">
                </div>
                <div>
                    <a href="">  catering craft</a><br><br> 
                    <span>timer : <b><?php check_timer("Catering_Craft");?></b></span><br>
                    <span>questions : <b><?php count_questions("catering_craft_ss3")?></b></span><br>
                    <span>status : <b><?php status("Catering_Craft","catering_craft_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="Catering_Craft" class="create">
                </div>
                <div>
                    <a href="">  further Maths</a><br><br> 
                    <span>timer : <b><?php check_timer("Further_Maths");?></b></span><br>
                    <span>questions : <b><?php count_questions("further_Maths_ss3")?></b></span><br>
                    <span>status : <b><?php status("Further_Maths","further_Maths_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="further" class="create">
                </div>
                <div>
                    <a href="">  new_A</a><br><br> 
                    <span>timer : <b><?php check_timer("New_A");?></b></span><br>
                    <span>questions : <b><?php count_questions("new_A_ss3")?></b></span><br>
                    <span>status : <b><?php status("New_A","new_A_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="new_A" class="create">
                </div>
                <div>
                    <a href="">  new_B</a><br><br> 
                    <span>timer : <b><?php check_timer("New_B");?></b></span><br>
                    <span>questions : <b><?php count_questions("new_B_ss3")?></b></span><br>
                    <span>status : <b><?php status("New_B","new_B_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="new_B" class="create">
                </div>
                <div>
                    <a href="">  new_C</a><br><br> 
                    <span>timer : <b><?php check_timer("New_C");?></b></span><br>
                    <span>questions : <b><?php count_questions("new_C_ss3")?></b></span><br>
                    <span>status : <b><?php status("New_C","new_C_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="new_C" class="create">
                </div>
                <div>
                    <a href="">  new_D</a><br><br> 
                    <span>timer : <b><?php check_timer("New_D");?></b></span><br>
                    <span>questions : <b><?php count_questions("new_D_ss3")?></b></span><br>
                    <span>status : <b><?php status("New_D","new_D_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="new_D" class="create">
                </div>
                <div>
                    <a href="">  new_E</a><br><br> 
                    <span>timer : <b><?php check_timer("New_E");?></b></span><br>
                    <span>questions : <b><?php count_questions("new_E_ss3")?></b></span><br>
                    <span>status : <b><?php status("New_E","new_E_ss3")?></b></span><br>
                    <input type="submit" value="Activate" name="new_E" class="create">
                </div>
            </aside>
        </form>
 
 
 
 
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

 <style>
    .create{  
    background-color: green;
    color: white;
    padding: 6px;
    cursor: pointer;
    border-radius: 5px;
    margin: 5px;
    border: 0px solid black;
    font-size: 15px;
 
    }
 </style>
<?php
  if (isset($_POST['math'])) {   
    activator("Mathematics","mathematics_ss3", "/sss3_logins_page/studentLogin_math.php");
  }
  if (isset($_POST['english'])) {   
    activator("English","english_ss3", "/sss3_logins_page/studentLogin_eng.php");  /* the location is not set */
  }
  if (isset($_POST['Physics'])) {   
    activator("Physics","physics_ss3" ,"/sss3_logins_page/studentLogin_phy.php");
  }
  if (isset($_POST['Chemistry'])) {   
    activator("Chemistry","chemistry_ss3" ,"/sss3_logins_page/studentLogin_chem.php");
  }
  if (isset($_POST['Biology'])) {   
    activator("Biology","biology_ss3" ,"/sss3_logins_page/studentLogin_bio.php");
  }
  if (isset($_POST['Agric_Sci'])) {   
    activator("Agric_Sci.","agric_sci_ss3" ,"/sss3_logins_page/studentLogin_agric.php");
  }
  if (isset($_POST['Civic_Edu'])) {   
    activator("Civic_Edu","civic_edu_ss3" ,"/sss3_logins_page/studentLogin_civic.php");
  }
  if (isset($_POST['Technical_Dra'])) {   
    activator("Technical_Dra.","technical_dra_ss3" ,"/sss3_logins_page/studentLogin_technical.php");
  }
  if (isset($_POST['Book_Keeping'])) {   
    activator("Book_Keeping","book_keeping_ss3" ,"/sss3_logins_page/studentLogin_book_K.php");
  }
  if (isset($_POST['accounting'])) {   
    activator("Accounting","account_ss3" ,"/sss3_logins_page/studentLogin_accounting.php");
  }
  if (isset($_POST['commerce'])) {   
    activator("Commerce","commerce_ss3" ,"/sss3_logins_page/studentLogin_commerce.php");
  }
  if (isset($_POST['CRK'])) {   
    activator("CRK","CRK_ss3" ,"/sss3_logins_page/studentLogin_crk.php");
  }
  if (isset($_POST['IRK'])) {   
    activator("IRK","IRK_ss3" ,"/sss3_logins_page/studentLogin_irk.php");
  }
  if (isset($_POST['Economics'])) {   
    activator("Economics","economics_ss3" ,"/sss3_logins_page/studentLogin_economics.php");
  }
  if (isset($_POST['Geography'])) {   
    activator("Geography","geography_ss3" ,"/sss3_logins_page/studentLogin_geo.php");
  }
  if (isset($_POST['History'])) {   
    activator("History","history_ss3" ,"/sss3_logins_page/studentLogin_his.php");
  }
  if (isset($_POST['Literature'])) {   
    activator("Literature","literature_ss3" ,"/sss3_logins_page/studentLogin_lit.php");
  }
  if (isset($_POST['PHE'])) {   
    activator("PHE","phe_ss3" ,"/sss3_logins_page/studentLogin_phe.php");
  }
  if (isset($_POST['Yoruba'])) {   
    activator("Yoruba","yoruba_ss3" ,"/sss3_logins_page/studentLogin_yoruba.php");
  }
  if (isset($_POST['Marketing'])) {   
    activator("Marketing","marketing_ss3" ,"/sss3_logins_page/studentLogin_marketing.php");
  }
  if (isset($_POST['Government'])) {   
    activator("Government","government_ss3" ,"/sss3_logins_page/studentLogin_gov.php");
  }
  if (isset($_POST['Data_process'])) {   
    activator("Data_process.","data_process_ss3" ,"/sss3_logins_page/studentLogin_data_p.php");
  }
  if (isset($_POST['Animal_Hus'])) {   
    activator("Animal_Hus.","animal_hus_ss3" ,"/sss3_logins_page/studentLogin_animal_h.php");
  }
  if (isset($_POST['Catering_Craft'])) {   
    activator("Catering_Craft","catering_craft_ss3" ,"/sss3_logins_page/studentLogin_creating_craft.php");
  }
  if (isset($_POST['Computer_Sci'])) {   
    activator("Computer_Sci.","computer_sci_ss3" ,"/sss3_logins_page/studentLogin_computer.php");
  }
  if (isset($_POST['further'])) {   
    activator("Further_Maths","further_Maths_ss3" ,"/sss3_logins_page/studentLogin_further_M.php");
  }
  if (isset($_POST['new_A'])) {   
    activator("New_A","new_A_ss3" ,"/sss3_logins_page/studentLogin_newA.php");
  }
  if (isset($_POST['new_B'])) {   
    activator("New_B","new_B_ss3" ,"/sss3_logins_page/studentLogin_newB.php");
  }
  if (isset($_POST['new_C'])) {   
    activator("New_C","new_C_ss3" ,"/sss3_logins_page/studentLogin_newC.php");
  }
  if (isset($_POST['new_D'])) {   
    activator("New_D","new_D_ss3" ,"/sss3_logins_page/studentLogin_newD.php");
  }
  if (isset($_POST['new_E'])) {   
    activator("New_E","new_E_ss3" ,"/sss3_logins_page/studentLogin_newE.php");
  }
?>  