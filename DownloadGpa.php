


<?php
session_start();
 $ser = "localhost";
        $user = "root";
        $pass = "";
        $db = "CGU";
        $con = mysqli_connect($ser, $user, $pass) or die("connection failed");
        $selected = mysqli_select_db($con, $db) or die("Colud not selected database");

$Q="Select * from semester";
$result=  mysqli_query($con, $Q);
$FP= $_SESSION["Faculty"] ;
$CP=$_SESSION["Course"] ;
 $LP=    $_SESSION["Level"] ;
$SP=    $_SESSION["Semester"] ;
require('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('uvawellassa.jpg', 10, 6, 30);

$pdf->SetFont('Arial','B',24);
$pdf->Cell(190,10,'UWU Result Sheet',0,1,'C');
$pdf->Ln(35);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Faculty :',0,0);
$pdf->Cell(40,10,$FP,0,1);
$pdf->Cell(70,10,'Degree Programme :',0,0);
$pdf->Cell(90,10,$CP,0,1);
$pdf->Cell(40,10,'Level :',0,0);
$pdf->Cell(40,10,$LP,0,1);
$pdf->Cell(40,10,'Semester :',0,0);
$pdf->Cell(40,10,$SP,0,1);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,'Course Code',1,0,'C');
$pdf->Cell(120,10,'Subject Name',1,0,'C');
$pdf->Cell(20,10,'Grade',1,1,'C');
$pdf->SetFont('Arial','B',14);
while ($row=  mysqli_fetch_assoc($result)){

 $pdf->Cell(40,10,$row['CourseCode'],1,0,'L');
$pdf->Cell(120,10,$row['Sname'],1,0,'L');
$pdf->Cell(20,10,$row['Grade'],1,1,'C');
}
$GP=$_GET["GP"];
$pdf->Ln(35);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(70,10,'Your Semester GPA is  :',0,0);
$pdf->Cell(40,10,$GP,0,1);
$pdf->Output();

?>