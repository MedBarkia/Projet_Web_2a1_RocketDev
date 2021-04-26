<?PHP
	class administrateur{
		private  $id = null;
		private  $nom = null;
		private  $email = null;
    	private  $pass = null;


		function __construct(string $nom,  string $email,  string $pass){

     		$this->nom=$nom;
			$this->email=$email;
			$this->pass=$pass;

		}

		
		function getNom(): string{
			return $this->nom;
		}
		
		function getEmail(): string{
			return $this->email;
		}
		
		
		function getPass(): string{
			return $this->pass;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		
		function setEmail(string $email): void{
			$this->email=$email;
		}		
		
		function setPass(string $pass): void{
			$this->pass=$pass;
		}

	}
?>