<?PHP
class commande{

	private $id;
	private $nom;
	private $adresse;
	private $total;
    private $date;
    private $etat;
    private $livreur;
    
	function __construct($id,$nom,$adresse,$total,$date,$etat,$livreur){
		$this->id=$id;
		$this->nom=$nom;
		$this->adresse=$adresse;
		$this->total=$total;
        $this->date=$date;
        $this->etat=$etat;
        $this->livreur=$livreur;
	}
	
	function getid(){
		return $this->id;
	}

	function getNom(){
		return $this->nom;
	}
	function getadresse(){
		return $this->adresse;
	}
	function gettotale(){
		return $this->total;
	}
	function getdate(){
		return $this->date;
    }
    function getetat(){
		return $this->etat;
	}
function getlivreur(){
		return $this->livreur;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setadresse($adresse){
		$this->prenom;
	}
	function settotale($totale){
		$this->note=$note;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setlivreur($livreur){
		$this->livreur=$livreur;
	}
	
}

?>