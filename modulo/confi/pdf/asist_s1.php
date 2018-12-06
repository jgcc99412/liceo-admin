<?php
require("../../../fpdf/fpdf.php");
require("../../../cone/conexion.php");

$pdf = new FPDF();
$pdf->addPage();
$pdf->Ln(30);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,10,'',0);
$pdf->Cell(120, 10, 'San Sebastian de los Reyes Edo-Aragua', 0);
$pdf->Cell(40,10,'',0);
$pdf->Ln(5);
$pdf->Cell(65,10,'',0);
$pdf->Cell(120, 10, 'U.E.N. Andres Rodriguez Ramirez', 0);
$pdf->Cell(40,10,'',0);
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(18,10,'',0);

$pdf->SetFont('Arial','',10);
//$pdf->Image('../img/tienda.gif', 10,8,10,13,'GIF');

$pdf->Ln(15);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,8,'',0);
$pdf->Cell(100, 8, 'LISTA DE PROFESORES', 0);
$pdf->Ln(15);
$pdf->Cell(18,10,'',0);
$pdf->Cell(120, 10, 'Asignatura: _________________________', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Cell(18,10,'',0);
$pdf->Ln(20);


$pdf->SetFont('Arial','B',8);
$pdf->Cell(18,10,'',0);
$pdf->Cell(10, 8, 'ID', 0);
$pdf->Cell(30,8,'CEDULA',0);
$pdf->Cell(40,8,'NOMBRE',0);
$pdf->Cell(50,8,'APELLIDO',0);
$pdf->Cell(10,8,'Asist.',1);
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
//consulta

$estudiantes = mysqli_query($conDB, "SELECT nombre, apellido, cedula, id_grado, id_seccion
	                                    FROM alumno
                                       WHERE id_grado=2 AND id_seccion=1  ORDER BY cedula");
$id = 0;
while ($estu = mysqli_fetch_array($estudiantes)) {
$id = $id+1;
$pdf->Cell(18,10,'',0);
$pdf->Cell(10, 8, $id, 0);
$pdf->Cell(30,8,$estu['cedula'],0);
$pdf->Cell(40,8,$estu['nombre'],0);
$pdf->Cell(50,8,$estu['apellido'],0);
$pdf->Cell(10,8,'',1);
$pdf->Ln(10);



}
$pdf->Output();

?>