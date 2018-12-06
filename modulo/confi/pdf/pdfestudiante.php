<?php
require("../../../fpdf/fpdf.php");
require("../../../cone/conexion.php");

$pdf = new FPDF();
$pdf->addPage();
$pdf->Ln(30);
//$pdf->Image('../../img/me.png', 10,8,10,13,'GIF');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,8,'',0);
$pdf->Cell(100, 8, 'LISTAD DE ESTUDIANTES', 0);
$pdf->Ln(20);
$pdf->Cell(18,10,'',0);
$pdf->Cell(120, 10, '', 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Cell(18,10,'',0);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10, 8, 'ID', 0);
$pdf->Cell(20,8,'CEDULA',0);
$pdf->Cell(30,8,'NOMBRE',0);
$pdf->Cell(30,8,'APELLIDO',0);
$pdf->Cell(15,8,'NOTA 1',0);
$pdf->Cell(15,8,'NOTA 2',0);
$pdf->Cell(15,8,'NOTA 3',0);
$pdf->Cell(15,8,'NOTA 4',0);
$pdf->Cell(15,8,'NOTA 5',0);
$pdf->Cell(15,8,'DEFINIT.',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',8);
//consulta

$estudiantes = mysqli_query($conDB, "SELECT nombre, apellido, cedula,asignatura, lapso, nota, nota2,nota3, nota4, nota5
                           FROM notas 
                           INNER JOIN asignatura  ON notas.materia=asignatura.id_asignatura
                           INNER JOIN alumno  ON notas.alumno=alumno.id_alumno WHERE 1 ORDER BY cedula");
$id = 0;
while ($estu = mysqli_fetch_array($estudiantes)) {
$id = $id+1;
$pdf->Cell(10, 8, $id, 0);
$pdf->Cell(20,8,$estu['cedula'],0);
$pdf->Cell(30,8,$estu['nombre'],0);
$pdf->Cell(30,8,$estu['apellido'],0);
$pdf->Cell(15,8,$estu['nota'],0);
$pdf->Cell(15,8,$estu['nota2'],0);
$pdf->Cell(15,8,$estu['nota3'],0);
$pdf->Cell(15,8,$estu['nota4'],0);
$pdf->Cell(15,8,$estu['nota5'],0);
$pdf->Cell(15,8,'DEFINIT.',0);
$pdf->Ln(10);



}
$pdf->Output();

?>