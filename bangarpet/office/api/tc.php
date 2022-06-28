<?php
include('../db_bpet_sdc/db.php');

$sql = "INSERT INTO tc (`name`)
VALUES (".$_POST['id'].")";

if (mysqli_query($conn, $sql)) {
//   $last_id = mysqli_insert_id($conn);
//   echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online TC</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div style="padding: 10px;    border: 5px solid salmon;    ">
    <section>
        <div style="text-align:center;line-height:28px;">
            <div class="grid-container">
                <div class="grid-item"> <img src="./Frame 3.png" alt="" srcset=""></div>
                <div class="grid-item">  
                    <h1>SMT DANAMMA CHANNABASAVAIAH (SDC) <br> INDEPENDENT P.U. COLLEGE</h1>
                    <h3>Near Canara Bank, Kolar Main Road, Bangarpet -563114</h3>
                    <h1> <span style="background-color: #01eece;">TRANSFER CERTIFICATE</span> </h1></div>
                
              </div>
         
         
        </div>
        <div>
            <table style="width:100%;border: none;border-collapse: auto;">

                <tbody>
                    <tr><td style="border: none;">College Code: MM0174</td><td style="border: none;text-align: center;"> <h5>FOR PRE UNIVERSITY COLLEGE </h5></td> <td style="border: none;text-align: right;">No. &nbsp; <?php echo $_POST['id'];?></td></tr>
                </tbody>
              </table>
        </div>
      <div class="table_div">
        <table style="width: 100%">
          <tbody>
            <tr>
              <td style="width:60%">1.Admission no
                <br>
               
              </td>
            <td style="text-align:center ;"> <b><?php echo $_POST['t1'];?></b></td>
            </tr>
            <tr>
              <td>2.Name of student
                <br>
              </td>
              <td style="text-align:center ;"> <b><?php echo $_POST['t2'];?></b></td>
            </tr>
            <!-- <tr>
              <td>3.Place of birth , district
                <br>
              </td>
              <td style="text-align:center ;"> <b><?php echo $_POST['t3'];?></b></td>
            </tr> -->
            <tr>
              <td>3.Gender
              
               
              </td>
           <td style="text-align:center ;">
           <b><?php echo $_POST['t4'];?></b>
           </td>

            </tr>
            <tr>
              <td>4.Nationality
               
            
              </td>
         <td style="text-align:center ;">
         <b><?php echo $_POST['t5'];?></b>
         </td>
            </tr>
            <tr>
              <td>5.Religion,  Caste 
              
              
              </td>
         
             <td style="text-align:center ;">

             <b><?php echo $_POST['t6'];?>&nbsp;/ &nbsp;<?php echo $_POST['t7'];?></b>
             </td>
            </tr>
            <tr>
              <td>6.Name of the Father
                
              
              </td>
            <td style="text-align:center ;">

            <b><?php echo $_POST['t8'];?></b>
            </td>

            </tr>
            <tr>
              <td>7.Name of the Mother
             
              
              </td>
             <td style="text-align:center ;">

             <b><?php echo $_POST['t9'];?></b>
             </td>
            </tr>
            <tr>
              <td>8.Date of birth
                
              
              </td>
             <td style="text-align:center ;">

             <b><?php echo $_POST['t20'];?></b>
             </td>
            </tr>
            <tr>
              <td>9.Whether qualified for promotion to the next standard
                
               
              </td>
             <td style="text-align:center ;">
             <b><?php echo $_POST['t11'];?></b>
             </td>
            </tr>
            <tr>
              <td>10. Whether the candidate belongs to  Schedule Caste or Schedule Tribe
                
                
              </td>
            <td style="text-align:center ;">
            <b><?php echo $_POST['t10'];?></b>
            </td>
            </tr>
            <tr>
              <td>11.	Standard in which the student  was studying at time of leaving the college
                
               
              </td>
             <td style="text-align:center ;"> <b><?php echo $_POST['t12'];?></b></td>
            </tr>
            <tr>
              <td>12.	Details of subject studied in  I / II PUC <br>
                Part – I a) Language Studied : 
                Part -II b) Optional Subjects Studied : 
                </td>
            
         <td>
         <b><?php echo $_POST['t13'];?>, ENGLISH </b>  <br>
         <b>

                <?php 
if($_POST['t14']==1){
  echo "PHYSICS, CHEMISTRY, MATHEMATICS, BIOLOGY ";
}
if($_POST['t14']==2){
  echo "PHYSICS, CHEMISTRY, MATHEMATICS, COMPUTER SCIENCE ";
}
if($_POST['t14']==3){
  echo "ECONOMICS, BUSINESS STUDIES , ACCOUNTANCY, COMPUTER SCIENCE ";
}
if($_POST['t14']==6){
  echo "ECONOMICS, BUSINESS STUDIES , ACCOUNTANCY, STATISTICS ";
}
if($_POST['t14']==6){
  echo "BASIC MATHS, BUSINESS STUDIES , ACCOUNTANCY, STATISTICS ";

}
                ?>
                </b>
         </td>
            </tr>
            <tr>
            <td>13.	Date  of Student’s  last attendance at college
                
              
              </td>
              <td style="text-align:center ;">
              <b><?php echo $_POST['t15'];?></b>
              </td>
            </tr>
          <tr>
            
          <td>14.	Medium of Instruction
                
               
              </td>
              <td style="text-align:center ;"> 
              <b>English</b>
              </td>
          </tr>
          <tr>
          <td>15.	Date of Admission or promotion to next class or standard
                
              
              </td>
              <td style="text-align:center ;">

              <b><?php echo $_POST['t16'];?></b>
              </td>
          </tr>
          <tr>  <td>16.Date on which the application for  the Transfer Certificate was recived
                
                
              </td>
            <td style="text-align:center ;">
            <b><?php echo $_POST['t17'];?></b>
            </td>
            </tr>

         <tr>
         <td>17.Whether the student has paid all the fees due to college?
                
              
              </td>
              <td style="text-align:center ;">
              <b>Yes</b>
              </td>
         </tr>
         <tr>
         <td>18.Date of issue of the Transfer Certificate
 
              </td>
              <td></td>
         </tr>
         <tr>
         <td>19.Number of college working days upto the date of leaving the college
                
               
              </td>
              <td style="text-align:center ;"> <b><?php echo $_POST['t18'];?></b></td>
         </tr>
         <tr>  <td>20.Total number of days student attended
                
               
              </td>
            <td style="text-align:center ;"> <b><?php echo $_POST['t19'];?></b></td>
            </tr>
            <tr> <td>21.Scholarship if any (Nature & Period to be specified )
               
              </td>
            <td>

            </td></tr>
            <tr>
            <td>22.Character and conduct
              
               
              </td>
              <td style="text-align:center ;"> <b>Satisfactory</b></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
   
    </div>
    <div style="margin-top:70px;">
            <table style="width:100%;border: none;   border-collapse: collapse;">
    
                <tbody>
                   
                    <tr>
                        <td style="border: none;">Checked By</td><td style="border: none;text-align: center;">  <h5></h5></td> <td style="border: none;text-align: right;">Principal Signature</td>
                    
                    </tr>
    
                </tbody>
              </table>
        </div>
    </section>
    <footer>
        
    </footer>
</div>
  </body>
</html>
