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

function translate_names($num)
{ 

$ones = array(
0 =>"ZERO", 
1 => "ONE", 
2 => "TWO", 
3 => "THREE", 
4 => "FOUR", 
5 => "FIVE", 
6 => "SIX", 
7 => "SEVEN", 
8 => "EIGHT", 
9 => "NINE",
10 => "TEN", 
11 => "ELEVEN", 
12 => "TWELVE", 
13 => "THIRTEEN", 
14 => "FOURTEEN", 
15 => "FIFTEEN", 
16 => "SIXTEEN", 
17 => "SEVENTEEN", 
18 => "EIGHTEEN", 
19 => "NINETEEN",
"014" => "FOURTEEN" 
); 
$tens = array( 
0 => "ZERO",
1 => "TEN",
2 => "TWENTY", 
3 => "THIRTY", 
4 => "FORTY", 
5 => "FIFTY", 
6 => "SIXTY", 
7 => "SEVENTY", 
8 => "EIGHTY", 
9 => "NINETY" 
); 
$hundreds = array( 
"HUNDRED", 
"THOUSAND",
"MILLION", 
"BILLION", 
"TRILLION",
"QUARDRILLION" 
); /* limit t quadrillion */
$num = number_format($num,2,".",",");
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$no_of_dordr = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr,1); 
$response_txt = ""; 
foreach($whole_arr as $key => $i){
	
while(substr($i,0,1)=="0")
		$i=substr($i,1,5);
if($i < 20){ 
/* echo "getting:".$i; */
$response_txt .= $ones[$i]; 
}elseif($i < 100){ 
if(substr($i,0,1)!="0")  $response_txt .= $tens[substr($i,0,1)]; 
if(substr($i,1,1)!="0") $response_txt .= " ".$ones[substr($i,1,1)]; 
}else{ 
if(substr($i,0,1)!="0") $response_txt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
if(substr($i,1,1)!="0")$response_txt .= " ".$tens[substr($i,1,1)]; 
if(substr($i,2,1)!="0")$response_txt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$response_txt .= " ".$hundreds[$key]." "; 
} 
} 
if($no_of_dordr > 0){ 
$response_txt .= " and "; 
if($no_of_dordr < 20){ 
$response_txt .= $ones[$no_of_dordr]; 
}elseif($no_of_dordr < 100){ 
$response_txt .= $tens[substr($no_of_dordr,0,1)]; 
$response_txt .= " ".$ones[substr($no_of_dordr,1,1)]; 
} 
} 
return $response_txt; 
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
  <p align="right" style="font-size:10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight:bold;">STUDENT COPY</p>

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

             <b><?php echo $_POST['t20'];?>
            <?php
            $birth_date = $_POST['t20'];
            $new_birth_date = explode('-', $birth_date);
            $year = $new_birth_date[0];
            $month = $new_birth_date[1];
            $day  = $new_birth_date[2];
            $birth_day=translate_names($day);
            $birth_year=translate_names($year);
            $monthNum = $month;
            $dateObj = DateTime::createFromFormat('!m', $monthNum);//Convert the number into month name
            $monthName = strtoupper($dateObj->format('F'));
            echo "<p align='center' style='color:blue'>$birth_day $monthName $birth_year</p>";
          
            ?>
            
            </b>
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
                Part – I a) Language Studied :  <br>
                Part -II b) Optional Subjects Studied : 
                <br>
                </td>
                <td>
         <b> <br> <br><?php echo $_POST['t13'];?>, ENGLISH </b>  <br>
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
if($_POST['t14']==7){
  echo "ECONOMICS, BUSINESS STUDIES , ACCOUNTANCY, STATISTICS ";
}
if($_POST['t14']==8){
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

<!-- college copy -->
<p style="break-after:page;"></p>
<p align="right" style="font-size:10px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight:bold;">COLLEGE COPY</p>

<div style="padding: 10px;    border: 5px solid salmon;">
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
                Part – I a) Language Studied :  <br>
                Part -II b) Optional Subjects Studied : 
                <br>
                </td>
                <td>
         <b> <br> <br><?php echo $_POST['t13'];?>, ENGLISH </b>  <br>
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
if($_POST['t14']==7){
  echo "ECONOMICS, BUSINESS STUDIES , ACCOUNTANCY, STATISTICS ";
}
if($_POST['t14']==8){
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
