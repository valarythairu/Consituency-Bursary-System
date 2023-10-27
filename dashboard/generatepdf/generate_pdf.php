<?php
require_once 'fpdf.php';
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'fund');
$sql= "select * from applicationform";
$results= mysqli_query($connection, $sql);


    
if(isset($_POST['btn_pdf']))
{
    $pdf = new FPDF('L','mm','A4');
    $pdf->SetFont('Arial','B',14);
    $pdf->AddPage();
    $pdf->Cell(20,10,'Name',1,0);
    $pdf->Cell(30,10,'School',1,0);
    $pdf->Cell(25,10,'Allocated',1,0);
    $pdf->Cell(45,10,'Parent/Guardian',1,0);
    $pdf->Cell(35,10,'Phonenumber',1,0);
    
    while ($row= mysqli_fetch_assoc($results)) {
        $total=$row['level']+$row['study']+$row['Ward']+$row['Family']+$row['Academicperformance'] ;
      $percentage = ($total/ 100.0) * 100;
      $total1= $row["amount"] * ($total/ 100.0) * 100 ;

        $pdf->Cell(20,10,$row['name'],1,0);
        $pdf->Cell(30,10,$row['School'],1,0);
        $pdf->Cell(20,10,"" . $total1/100 . "",1,0);
        $pdf->Cell(45,10,$row['FatherName'],1,0);
        $pdf->Cell(30,10,$row['Telephonenumber'],1,0);
        

    }
    $pdf->Output();
}
?>

