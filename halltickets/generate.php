<?php

//import.php

include './vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <style type="text/css">
            @media print {
            .line {
                page-break-inside: avoid !important;
            }
        }
        table,
        tr,
        th,
        td {
            border: 1px solid black !important;

        }

        th {
            font-size: 20px;
        }

        td {
            font-weight: 600;
            font-size: 18px;
        }
        div.ten:before {
  content: "";
  position: absolute;
  border: 10px dashed #FF0000;
  top: -8px;
  bottom: -8px;
  left: -8px;
  right: -8px;
}

    </style>
 
</head>

<body class="p-0">


<?php
$result = array();
if(isset($_POST['type'])=="import_validate"){
    if($_FILES["file"]["name"] != '')
{
 $allowed_extension = array('xls', 'csv', 'xlsx');
 $file_array = explode(".", $_FILES["file"]["name"]);
 $file_extension = end($file_array);

 if(in_array($file_extension, $allowed_extension))
 {
  $file_name = time() . '.' . $file_extension;
  move_uploaded_file($_FILES['file']['tmp_name'], $file_name);
  $file_type = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file_name);
  $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($file_type);

  $spreadsheet = $reader->load($file_name);

  unlink($file_name);

  $data = $spreadsheet->getActiveSheet()->toArray();

  unset($data[0]);
  $i=0;
  foreach($data as $row){
$i++;
?>
<section class="line">

    <div style="display: flex; flex-direction:row;" class="text-center mt-2 ">

        <div class="p-2">
            <img src="logo.jpg" width="100px" alt="" srcset="">
        </div>
        <div class="text-center">
            <h3>SMT. DANAMMA CHANNABASAVIAH (SDC) <br>
                INDEPENDENT PU COLLEGE
            </h3>
            <h5>Canara Bank Road, Bangarpet-563114</h5>
            <h4>Exam Admit Card</h4>
        </div>

    </div>
    <div class="row">
        <div class="col-6 text-left">
         <b>   I / II PU MID-TERM EXAM - SEP 2022</b>
        </div>
        <div class="col-6 text-right">
            <b>College Code : MM0174</b>
        </div>
    </div>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="5" class="p-0">Name of the student : <?php echo $row[0]; ?></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" class="p-1">Reg No</th>
                    <th scope="col" class="p-1">Student No.</th>
                    <th scope="col" class="p-1" colspan="2">Combination</th>

                </tr>
                <tr>
                    <th scope="row" class="p-1">Date</th>
                    <th scope="row" class="p-1" style="text-align: center;">Day</th>
                    <th scope="row" class="p-1">Subject</th>
                    <th scope="row" class="p-1">Invigilator Sign</th>
                </tr>
                <tr>
                    <td scope="row" class="p-1">08-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">THUR</td>
                    <td scope="row" class="p-1">Kannada/Hindi/Urdu/Sanskrit</td>
                    <td scope="row" class="p-1"></td>
                </tr>
                <tr>
                    <td scope="row" class="p-1">09-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">FIR</td>
                    <td scope="row" class="p-1">Economics / Basic Maths</td>
                    <td scope="row" class="p-1"></td>
                </tr>
                <tr>
                    <td scope="row" class="p-1">10-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">SAT</td>
                    <td scope="row" class="p-1">Business Studies</td>
                    <td scope="row" class="p-1"></td>
                </tr>
                <tr>
                    <td scope="row" class="p-1">12-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">MON</td>
                    <td scope="row" class="p-1">Accountancy</td>
                    <td scope="row" class="p-1"></td>
                </tr>
                <tr>
                    <td scope="row" class="p-1">13-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">TUE</td>
                    <td scope="row" class="p-1">Statistics / Computer Science</td>
                    <td scope="row" class="p-1"></td>
                </tr>
                <tr>
                    <td scope="row" class="p-1">14-09-2022</td>
                    <td scope="row" class="p-1" style="text-align: center;">WED</td>
                    <td scope="row" class="p-1">English</td>
                    <td scope="row" class="p-1"></td>
                </tr>
            </tbody>
        </table>


    </div>
    <div class="text-center mb-5">
        <b>Note:</b> Exam Timings for all subjects <b>8:45AM</b> to <b>11:45AM</b>
    </div>
    <div>
        <h6>Student's Signture</h6>
        <p class="text-right">
            <img src="./pricipal sign.png" width="200px" alt=""><br> PRINCIPAL</p>
    </div>



</section>
<?php

if($i % 2 == 0){
 ?>
 <section class="line p-5">
<div style="margin-top:200px;">
<h5 align="center">INSTRUCTIONS TO THE STUDENTS</h5>
<p style="font-size:20px;"> 

1)	Make yourself present at the exam hall 30 minutes before the commencement of examination. <br>
2)	You should bring the Exam Hall Ticket and Identity card on all the days of examination.  You will not be allowed to write the examination without these. <br>
3)	You should not involve in any sort of malpractices such as copying from bits, helping others to copy, exchanging of answer booklets or question papers etc. You will be debarred from examination in case you are found indulging in such activities. You will not be allowed to write on subsequent subjects.   <br>
4)	You are not allowed to leave the exam hall before the last bell.  <br>
5)	Write your hall ticket number and other details as being asked on the answer booklets. <br>
</p>

</div>
<div style="margin-top:500px;">
<h5 align="center">INSTRUCTIONS TO THE STUDENTS</h5>
<p style="font-size:20px;"> 

1)	Make yourself present at the exam hall 30 minutes before the commencement of examination. <br>
2)	You should bring the Exam Hall Ticket and Identity card on all the days of examination.  You will not be allowed to write the examination without these. <br>
3)	You should not involve in any sort of malpractices such as copying from bits, helping others to copy, exchanging of answer booklets or question papers etc. You will be debarred from examination in case you are found indulging in such activities. You will not be allowed to write on subsequent subjects.   <br>
4)	You are not allowed to leave the exam hall before the last bell.  <br>
5)	Write your hall ticket number and other details as being asked on the answer booklets. <br>
</p>

</div>
 </section>
 <?php
}

?>

<?php
  }


 }
}
}


// // add

// echo '$file = "headerPdfFile.pdf";

// $filename = "IamPdfFile.pdf";
// header("Content-type: application/pdf");
  
// header("Content-Disposition: inline; filename='.$filename.'"); ';
// Header content type

?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

        <script>
            window.print();
        </script>
</body>

</html>