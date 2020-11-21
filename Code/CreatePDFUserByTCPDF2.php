<?php
//
include ('...');
//
class TCPDF extends TCPDF
{
    //page header
    public function Header()
    {
         //Logo
         //$image_file = K_PATH_IMAGES.'.jpg';
         //$this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
         // Set font
         $this->SetFont('helvetica', 'B', 20);
         // Title
         $this->Cell(0, 15, 'aaa', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }
    public function Footer()
    {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'หน้าที่ '.$this->getAliasNumPage().' จาก '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
//
$pdf = new TCPDF('P','mm','A4',true,'UTF-8',false);
$pdf->setHeaderFont(Array('', 'B',18));
$pdf->setFooterFont(Array('', 'B',18));
$html = "
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </head>
    <style>
    </style>
    <body>
        <table border="1">
            <tr>
                <th></th>
            </tr>
            while()
            {
            <tr>
                <td></td>
            </tr>
            }
        </table>
    </body>
    </html>";
//
$pdf->WriteHTML($html,true,false,true,false,'');
//
$pdf->AddPage();

//
$pdf->Output();