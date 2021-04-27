<?PHP
class livraison{

	private $id = null;
	private $nom = null;
	private $adresse = null;
	private $total = null;
    private $date = null;
    private $etat = null;
    private $livreur = null;
    
	function __construct(int $id,string $nom,string $adresse,int $total,string $date,string $etat,string $livreur){
		$this->id=$id;
		$this->nom=$nom;
		$this->adresse=$adresse;
		$this->total=$total;
        $this->date=$date;
        $this->etat=$etat;
        $this->livreur=$livreur;
	}
	
	function getid(): int{
		return $this->id;
	}

	function getNom(): string{
		return $this->nom;
	}
	function getadresse(): string{
		return $this->adresse;
	}
	function gettotale(): int{
		return $this->total;
	}
	function getdate(): string{
		return $this->date;
    }
    function getetat(): string{
		return $this->etat;
	}
function getlivreur(): string{
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