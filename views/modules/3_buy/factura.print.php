<?php
require('assets/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Roboto Condensed','B',14);
    // Movernos a la derecha
    $this->Cell(20);
    // Título
    $this->Cell(0, 20, utf8_decode('FACTURA DE VENTA'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(0, 20, utf8_decode('Lubrimotos la 33'),0,0,'C');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Numero Factura: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['id_factura']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Fecha Factura: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['fecha_factura']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Nombre Cliente: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['cliente']);
$pdf->Ln();
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Placa Vehiculo: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['vehiculo']);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(5,5,"");
$pdf->Cell(10,7,'ID',1,0,'C');
$pdf->Cell(120,7,'Nombre producto/servicio',1,0,'C');
$pdf->Cell(20,7,'Cantidad',1,0,'C');
$pdf->Cell(30,7,'Valor',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',12);
foreach ($factura[0] as $key => $value) {
    $pdf->Cell(5,5,"");
    $pdf->Cell(10,7,$value['id_producto'],1,0,'C');
    $pdf->Cell(120,7,utf8_decode($value['nombre_producto']),1);
    $pdf->Cell(20,7,$value['cantidad'],1,0,'C');
    $pdf->Cell(30,7,"$".number_format($value['valor_venta'], 0, '.', ','),1,0,'R');
    $pdf->Ln();
    # code...
}
$pdf->Cell(5,5,"");
$pdf->Cell(10,7,"");
$pdf->Cell(120,7,"");
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,7,"TOTAL",1,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(30,7,"$".number_format($factura[1][0]['total_pedido'], 0, '.', ','),1,0,'R');
$pdf->Ln();

$pdf->Ln();

$pdf->Output('Formulario.pdf','I');
?>