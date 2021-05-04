<?PHP 
require "../assets/ssd/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=coupdechef','root','');

   class myPDF extends FPDF{
function header(){
    $this->Image('logo.png',80,100);
    $this->SetFont('Arial','B',24);
    $this->Cell(276,5,'Liste des Reclamations',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,13,'Coup de Chef',0,0,'C');
    $this->Ln(20);
}
function footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function headerTable(){
    $this->SetFont('Times','B',16);
    $this->Cell(20,10,'ID',1,0,'C');
    $this->Cell(20,10,'Nom',1,0,'C');
    $this->Cell(80,10,'Email',1,0,'C');
    $this->Cell(50,10,'Type',1,0,'C');
    $this->Cell(100,10,'Description',1,0,'C');
    $this->Ln();
}
function viewTable($db){
    $this->SetFont('Times','',12);
    $liste = $db->query('SELECT * FROM reclamation');
    while($data = $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->id,1,0,'C');
        $this->Cell(20,10,$data->nom,1,0,'C');
        $this->Cell(80,10,$data->email,1,0,'C');
        $this->Cell(50,10,$data->type,1,0,'C');
        $this->Cell(100,10,$data->description,1,0,'C');
        $this->Ln();
    }

}

   }
   $pdf = new myPDF();
   $pdf->AliasNbPages();
   $pdf->AddPage('L','A4',0);
   $pdf->headerTable();
   $pdf->viewTable($db);
   $pdf->Output();
?>