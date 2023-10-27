<?php
require_once 'fpdf.php';
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'fund');
$sql= "select * from applicationform where status='Approved'";
$results= mysqli_query($connection, $sql);


    
if(isset($_POST['btn_pdf']))
{
    $pdf = new FPDF('L','mm','A4');
    $pdf->SetFont('Arial','B',14);
    $pdf->AddPage();
    $pdf->Cell(150,10,'OTHAYA CONSTITUENCY NG-CDF BURSARY 2021/2022',1,1);
    $pdf->Cell(15,10,'Id no.',1,0);
    $pdf->Cell(50,10,'Name',1,0);
    $pdf->Cell(70,10,'Institution',1,0);
    $pdf->Cell(45,10,'Amount Allocated',1,0);
    $pdf->Cell(45,10,'Parent/Guardian',1,0);
    $pdf->Cell(35,10,'Phonenumber',1,0);
    $pdf->Cell(40,10,'Bursary Status',1,1);
    
    
    while ($row= mysqli_fetch_assoc($results)) {
    
        $pdf->Cell(15,10,$row['id'],1,0);
        $pdf->Cell(50,10,$row['name'],1,0);
        $pdf->Cell(70,10,$row['School'],1,0);
        $pdf->Cell(45,10,$row['disbandedamount'],1,0);
        $pdf->Cell(45,10,$row['FatherName'],1,0);
        $pdf->Cell(35,10,$row['Telephonenumber'],1,0);
        $pdf->Cell(40,10,$row['status'],1,1);

           
        

    }
    $pdf->Output();
}
?>

