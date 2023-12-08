<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de existencia de choferes',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(60,10,'Nombre',1,0,'C',0);
	$this->Cell(30,10,'Apellidos',1,0,'C',0);
    $this->Cell(50,10,'Direccion',1,0,'C',0);
	$this->Cell(50,10,'Serie',1,1,'C',0);
  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("cn.php");
$consulta = "SELECT * FROM choferes";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

while ($row=$resultado->fetch_assoc()) {
	$pdf->Cell(60,10,$row['nombre'],1,0,'C',0);
	$pdf->Cell(30,10,$row['apellidos'],1,0,'C',0);
	$pdf->Cell(50,10,$row['direccion'],1,0,'C',0);
    $pdf->Cell(50,10,$row['num'],1,1,'C',0);

} 


	$pdf->Output();
?>