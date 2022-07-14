<?php
include '../db_bpet_sdc/db.php';
require ('../../../vendor/autoload.php');
// export to pdf
$output = '';
// export pdf
if($_GET["data"]=="consolidate_pdf")
{
 $query = "SELECT * FROM books";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>Categories</th>
                    <th>Acession_No</th>
                    <th>ISBN/ISSN</th>
                    <th>Title</th>
                    <th>Pages</th>
                    <th>Price</th>
                    <th>Invoice_No</th>
                    <th>Purchase_Date</th>
                    <th>Rack_ID</th>
                    <th>Main_Author</th>
                    <th>Joint_Author</th>
                    <th>Publisher</th>
                    <th>Place Of Publication</th>
                    <th>Year Of Publication</th>
                    <th>Edition</th>
                    <th>DDCN</th>
                    <th>Series</th>
                    <th>Volume</th>
                    <th>Department</th>
                    <th>Color</th>
                    <th>Note</th>
                    <th>types</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["categories"].'</td>  
                         <td>'.$row["acession_no"].'</td>  
                         <td>'.$row["isbn_issn_no"].'</td>  
                         <td>'.$row["title"].'</td>  
                         <td>'.$row["pages"].'</td>  
                         <td>'.$row["price"].'</td>  
                         <td>'.$row["invoice_no"].'</td>  
                         <td>'.$row["purchase_date"].'</td>  
                         <td>'.$row["rack_id"].'</td>  
                         <td>'.$row["main_author"].'</td>  
                         <td>'.$row["joint_author"].'</td>  
                         <td>'.$row["publisher"].'</td>  
                         <td>'.$row["place_publication"].'</td>  
                         <td>'.$row["year_publication"].'</td>  
                         <td>'.$row["edition"].'</td>  
                         <td>'.$row["ddcn"].'</td>  
                         <td>'.$row["series"].'</td>  
                         <td>'.$row["volume"].'</td>  
                         <td>'.$row["department"].'</td>  
                         <td>'.$row["color"].'</td>  
                         <td>'.$row["note"].'</td>  
                         <td>'.$row["types"].'</td>  
   
                    </tr>
   ';
  }
  $output .= '</table>';
  $mpdf=new \Mpdf\Mpdf();
  $mpdf->WriteHTML($output);
  $file=time().'.pdf';
  $mpdf->output($file, 'D');
 }
}

?>