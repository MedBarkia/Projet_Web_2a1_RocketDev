
<?PHP
	class produit{
		private  $idp = null;
		private  $nom = null;
		private  $marque = null;
		private  $dateajout = null;
		private  $image = null;

		
		function __construct(int $idp, string $nom, string $marque, string $dateajout, string $image){
			
			$this->idp=$idp;
			$this->nom=$nom;
			$this->marque=$marque;
			$this->dateajout=$dateajout;
			$this->image=$image;

		}

		function getId(): int{
			return $this->idp;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getmarque(): string{
			return $this->marque;
		}
		function getdateajout(): string{
			return $this->dateajout;
		}
		function getimage(): string{
			return $this->image;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setid(string $idp): void{
			$this->idp;
		}
		function setmarque(string $marque): void{
			$this->marque=$marque;
		}
		function setdateajout(string $dateajout): void{
			$this->dateajout=$dateajout;
		}
		

	}
?>