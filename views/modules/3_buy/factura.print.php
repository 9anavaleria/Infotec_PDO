<?php
require('assets/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('courier','B',14);
    // Título
    $this->Cell(0, 20, utf8_decode('FACTURA DE VENTA'),0,0,'C');
    // Salto de línea
    $this->Ln(10);
    $this->SetFont('times','B',16);
    $this->Cell(0, 20, utf8_decode('Lubrimotos la 33'),0,0,'C');
    $this->Ln(5);
    $this->SetFont('times','I',12);
    $this->Cell(0, 20, utf8_decode('NIT. 999.999.999-9'),0,0,'C');
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','B',14);
    // Número de página
    $this->Cell(0,10,'Infotec '.utf8_decode('®'),0,0,'C');
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
}
}

// Creación del objeto de la clase heredada

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->Cell(5,5,"");
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Numero Factura: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['id_factura']);
$pdf->Ln(10);
$pdf->Cell(5,5,"");
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Fecha Factura: ');
$pdf->SetFont('Arial','I',14);
$pdf->Write(5, $factura[1][0]['fecha_factura']);
$pdf->Ln(10);
$pdf->Cell(5,5,"");
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Nombre Cliente: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['cliente']);
$pdf->Ln(10);
$pdf->Cell(5,5,"");
$pdf->SetFont('Arial','B',14);
$pdf->Write(5, 'Placa Vehiculo: ');
$pdf->SetFont('Arial','',14);
$pdf->Write(5, $factura[1][0]['vehiculo']);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(5,5,"");
$pdf->SetFillColor(45, 147, 196); 
$pdf->SetTextColor(255, 255, 255); 

$pdf->Cell(10,7,'ID',1,0,'C', true);
$pdf->Cell(125,7,'Nombre producto/servicio',1,0,'C', true);
$pdf->Cell(20,7,'Cantidad',1,0,'C', true);
$pdf->Cell(25,7,'Valor',1,0,'C', true);
$pdf->Ln();
$pdf->SetTextColor(10, 10, 10); 
$pdf->SetFont('Arial','',12);
foreach ($factura[0] as $key => $value) {
    $pdf->Cell(5,5,"");
    $pdf->Cell(10,7,$value['id_producto'],1,0,'C');
    $pdf->Cell(125,7,utf8_decode($value['nombre_producto']),1);
    $pdf->Cell(20,7,$value['cantidad'],1,0,'C');
    $pdf->Cell(25,7,"$".number_format($value['valor_venta'], 0, '.', ','),1,0,'R');
    $pdf->Ln();
    # code...
}
$pdf->Cell(5,5,"");
$pdf->Cell(10,7,"");
$pdf->Cell(125,7,"");
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(255, 255, 255); 
$pdf->Cell(20,7,"TOTAL",1,0,'C', true);
$pdf->SetTextColor(10, 10, 10);
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(220,220,220); 

$pdf->Cell(25,7,"$".number_format($factura[1][0]['total_pedido'], 0, '.', ','),1,0,'R',true);
$pdf->Ln();

$pdf->Ln();

$pdf->Output('Formulario.pdf','I');
?>