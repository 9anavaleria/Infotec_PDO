<?php
require('assets/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('../img/logof.jpg',10,8,30);
    // Arial bold 15
    $this->SetFont('Arial','',12);
    // Movernos a la derecha
    $this->Cell(30);
    // Título
    $this->Cell(0, 20, utf8_decode('Factura de venta INFOTEC'),0,0,'C');
    // Salto de línea
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
$pdf->SetFont('Arial','',11);
$pdf->Write(5, 'CIUDAD Y FECHA: ');
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['ciudad']).' '.$_POST['fecha']);
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$pdf->Write(5, 'SOLICITANTE: ');
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['solicitante']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' CÉDULA: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['cedula']));
$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(0,10, utf8_decode('LIBRANZA PRÉSTAMO ANEBRE NACIONAL'),0,0,'L');
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10, utf8_decode('VALOR: $'.$_POST['valor']),0,0,'R');
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10, utf8_decode('DESCUENTOS'),0,0,'C');
$pdf->Ln();
$pdf->Cell(30,7,utf8_decode('Año'),1);
$pdf->Cell(30,7,$_POST['descuento'],1);
$pdf->Cell(30,7,'Valor',1);
$meses = $_POST['meses'];

if($_POST['meses']>12){
    $pdf->Cell(10,5,"");
    $pdf->Cell(30,7,utf8_decode('Año'),1);
    $pdf->Cell(30,7,$_POST['descuento'],1);
    $pdf->Cell(30,7,'Valor',1);
    $mesesF = $_POST['meses']-12;
    $meses = 12;
}
$pdf->Ln();

for ($i=1; $i <= $meses; $i++) { 
    $pdf->Cell(30,5,$_POST['anio_'.$i],1);
    $pdf->Cell(30,5,$_POST['mes_'.$i],1);
    $pdf->Cell(30,5,"$".$_POST['valor_'.$i],1);
    if($_POST['meses']>12 && $i<=$mesesF){
        $id = 12+$i;
        $pdf->Cell(10,5,"");
        $pdf->Cell(30,5,$_POST['anio_'.$id],1);
        $pdf->Cell(30,5,$_POST['mes_'.$id],1);
        $pdf->Cell(30,5,"$".$_POST['valor_'.$id],1);
    }
    $pdf->Ln();
}
$pdf->Ln();
$pdf->Write(5, utf8_decode('De las sumas recibidas me declaro deudor de la ASOCIACIÓN NACIONAL DE EMPLEADOS DEL BANCO DE LA REPÚBLICA "ANEBRE", comprometiéndome a pagarlos en las condiciones aquí previstas.'));
$pdf->Ln();
$pdf->Write(5, utf8_decode('Autorizo al Señor Pagador del Banco, para que descuente de mi salario, liquidación definitiva de prestaciones sociales y pague por mi cuenta a "ANEBRE", el valor del préstamo anterior. De manera especial solícito atienda el pago de las sumas que dejo pignoradas a favor de la Asociación.'));
$pdf->Ln();
$pdf->Cell(0, 20, utf8_decode('________________________'),0,0,'C');
$pdf->Ln();
$pdf->Cell(0, 0, utf8_decode('Firma Afiliado - Deudor'),0,0,'C');
$pdf->Ln();
$pdf->Cell(0, 20, utf8_decode(''),0,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode('C.C. N°: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['cedula']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' de '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['ciudad_ex']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' Celular: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['celular']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' Teléfono Banco: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['telefono']));
$pdf->Ln();
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode('Correo: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['correo']));
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',11);

$pdf->Cell(0, 20, utf8_decode('DATOS PARA TRANSFERENCIA ELECTRÓNICA'),0,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode('N° Cuenta: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['cuenta']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' Banco: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['banco']));
$pdf->SetFont('Arial','',11);
$pdf->Write(5, utf8_decode(' Tipo de cuenta: '));
$pdf->SetFont('Arial','U',11);
$pdf->Write(5, utf8_decode($_POST['tipo_cuenta']));
$pdf->Ln();

$pdf->Output('Formulario.pdf','I');
?>