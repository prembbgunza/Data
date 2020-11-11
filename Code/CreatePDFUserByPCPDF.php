<?php
require 'fpdf.php';
/* ใช้ติดต่อฐานข้อมูล
include '';
$.. = new PDO('mysql:localhost;dbname='','root','');
*/

// ตรงนี้ ถ้าเป็นปุ่มใช้ iss['']; ประมาณนี้
class myPDF extends FPDF {
    function header() {
        //$this->Image('urlpic',0,0);
        $this->SetFont('Arial','B',16);
        $this->Cell(276,5,'ยินดีต้อนรับ',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'aaaaa',0,0,'C');
        $this->Ln(20);
    }
    function footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','B',8);
        $this->Cell(0,10,'Page'.$this->PageNo.'/{nb}',0,0,'C');
    }
    function headerTable() {
        $this->SetFont('Arial','B','18');
        $this->Cell(20,10,'ID',1,0,'C');
        $this->Cell(40,10,'Name',1,0,'C')
        $this->Ln();
    }
    /*
    function viewDatatable(/*$conn) {
        $this->SetFont('Arial','','16');
        $... = $conn->query('select * from ...');
        while($data = $...->fetch(PDO::FETCH_OBJ)) {
            $this->Cell(40,10,$data->ID,1,0,'L');
            $this->Cell(40,10,$data->name,1,0,'L');
            $this->Cell(40,10,$data->tell,1,0,'L');
            $this->Cell(40,10,$data->email,1,0,'L');
            $this->Ln();
        }
    }
    */
}
$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPaGE('L','A4',0);
$pdf->headerTable();
/* ใช้ในกรณีเชื่อมฐานข้อมูล
$pdf->viewDatatable($db);
*/
$pdf->Output();
?>