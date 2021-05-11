<?PHP 
require "../View/pdf/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=integ','root','');

   class myPDF extends FPDF{
function header(){
    $this->Image('logo.png',80,100);
    $this->SetFont('Arial','B',24);
    $this->Cell(276,5,'Liste des commandes',0,0,'C');
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
    $this->Cell(20,10,'id',1,0,'C');
    $this->Cell(50,10,'Nom',1,0,'C');
    $this->Cell(60,10,'adresse',1,0,'C');
    $this->Cell(20,10,'total',1,0,'C');
    $this->Cell(40,10,'date',1,0,'C');
    $this->Cell(30,10,'etat',1,0,'C');
    $this->Cell(30,10,'livreur',1,0,'C');
    $this->Ln();
}
function viewTable($db){
    $this->SetFont('Times','',12);
    $liste = $db->query('SELECT * FROM commande');
    while($data = $liste->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->id,1,0,'C');
        $this->Cell(50,10,$data->nom,1,0,'C');
        $this->Cell(60,10,$data->adresse,1,0,'C');
        $this->Cell(20,10,$data->total,1,0,'C');
        $this->Cell(40,10,$data->date,1,0,'C');
        $this->Cell(30,10,$data->etat,1,0,'C');
        $this->Cell(30,10,$data->livreur,1,0,'C');
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