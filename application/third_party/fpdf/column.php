<?php
require('fpdf.php');

class column extends FPDF
{
    protected $col = 0; // Current column
    protected $y0;      // Ordinate of column start

    const DPI = 96;
    const MM_IN_INCH = 25.4;
    const A4_HEIGHT = 50;
    const A4_WIDTH = 210;
    // tweak these values (in pixels)
    const MAX_WIDTH = 600;
    const MAX_HEIGHT = 200;

    function pixelsToMM($val) {
        return $val * self::MM_IN_INCH / self::DPI;
    }

    function resizeToFit($imgFilename) {
        list($width, $height) = getimagesize($imgFilename);

        $widthScale = self::MAX_WIDTH / $width;
        $heightScale = self::MAX_HEIGHT / $height;

        $scale = min($widthScale, $heightScale);

        return array(
            round($this->pixelsToMM($scale * $width)),
            round($this->pixelsToMM($scale * $height))
        );
    }

    function centreImage($img, $x,$y) {
        list($width, $height) = $this->resizeToFit($img);

        // you will probably want to swap the width/height
        // around depending on the page's orientation
        $this->Image(
            $img, $x, $y,
            $width,
            $height
        );
    }

function Header()
{
    // Page header
    global $title;

    $this->SetFont('Arial','B',15);
    $w = $this->GetStringWidth('Report Defect')+6;
    $this->SetX((210-$w)/2);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    $this->SetLineWidth(1);
    $this->Cell($w,9,'Report Defect',1,1,'C',true);
    $this->Ln(10);
    // Save ordinate
    $this->y0 = $this->GetY();
}

function Footer()
{
    // Page footer
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(128);
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function SetCol($col)
{
    // Set position at a given column
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}

function AcceptPageBreak()
{
    // Method accepting or not automatic page break
    if($this->col<2)
    {
        // Go to next column
        $this->SetCol($this->col+1);
        // Set ordinate to top
        $this->SetY($this->y0);
        // Keep on page
        return false;
    }
    else
    {
        // Go back to first column
        $this->SetCol(0);
        // Page break
        return true;
    }
}

function ChapterTitle($project, $subProject,$area,$element,$description,$dateDefect,$createdby,$nameLocation)
{
    // Title
	$this->SetFont('Arial','',12);
	$this->Cell(30,8,'Project ',0,0,'L');
	$this->Cell(60,8,': '.$project,0,1,'L');
	$this->Cell(30,8,'Sub Project ',0,0,'L');
	$this->Cell(60,8,': '.$subProject,0,1,'L');
	$this->Cell(30,8,'Location ',0,0,'L');
	$this->Cell(60,8,': '.$nameLocation.'-'.$area,0,1,'L');
	$this->Cell(30,8,'Element  ',0,0,'L');
	$this->Cell(60,8,': '.$element,0,1,'L');
	$this->Cell(30,8,'Description ',0,0,'L');
	$this->Cell(60,8,': '.substr($description,0,90),0,1,'L');
    $this->Cell(60,8,'                               '.substr($description,91,500),0,1,'L');
   	$this->Cell(30,8,'Created By  ',0,0,'L');
    $this->Cell(60,8,': '.$createdby,0,1,'L');
    $this->Cell(30,8,'Date Defect  ',0,0,'L');
    $this->Cell(60,8,': '.$dateDefect,0,1,'L');
    $this->Ln(10);
    // Save ordinate
    $this->y0 = $this->GetY();
}

function ChapterBody($img)
{
    $string = "$img";
    $images = explode(',', $string);
    if(count($images) == 1){
        for ($x = 0; $x <= count($images); $x++) {
            $this->MultiCell(60,8,$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[0] , 20,100));  
            $this->Ln();
              // Go back to first column
            $this->SetCol(0);
        }
    } else if (count($images) == 2){
        for ($x = 0; $x <= count($images); $x++) {
            $this->MultiCell(60,8,$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[0] , 10,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[1], 70,100));  
            $this->Ln();
              // Go back to first column
            $this->SetCol(0);
        }
    } else if (count($images) == 3){
        for ($x = 0; $x <= count($images); $x++) {
            $this->MultiCell(60,8,$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[0] , 5,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[1], 70,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[2], 150,100));  
            $this->Ln();
              // Go back to first column
            $this->SetCol(0);
        }
    } else if (count($images) == 4){
        for ($x = 0; $x <= count($images); $x++) {
            $this->MultiCell(60,8,$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[0] , 5,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[1], 50,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[2], 100,100),$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[3], 150,100));  
            $this->Ln();
              // Go back to first column
            $this->SetCol(0);
        }
    }else {
        for ($x = 0; $x <= count($images); $x++) {
            $this->MultiCell(60,8,$this->centreImage('https://mob-api.checkdeliver.com/upload/'.$images[0] , 20,100));  
            $this->Ln();
              // Go back to first column
            $this->SetCol(0);
        }
    }
  
}


function PrintChapter($project, $subProject,$area,$element,$description,$dateDefect,$createdby,$nameLocation,$images)
{
    // Add chapter
    $this->AddPage();
    $this->ChapterTitle($project, $subProject,$area,$element,$description,$dateDefect,$createdby,$nameLocation);
    if($images != null ){
        $this->ChapterBody($images);
    }
    

}
}
?>