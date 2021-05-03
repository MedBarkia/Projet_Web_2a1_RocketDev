<?PHP
	class livreur{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $login = null;
    	private  $pass = null;


		function __construct(string $nom, string $prenom,  string $login , string $pass){

     		$this->nom=$nom;
			$this->prenom=$prenom;
			$this->login=$login;
			$this->pass=$pass;

		}

		
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		
		function getLogin(): string{
			return $this->login;
		}
		
		
		function getPass(): string{
			return $this->pass;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		
		function setLogin(string $login): void{
			$this->login=$login;
		}
		
		
		function setPass(string $pass): void{
			$this->pass=$pass;
		}

	}
?>