<?PHP
	class Utilisateur{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $login = null;
    	private  $pass = null;
    	private  $code = null;



		function __construct(string $nom, string $prenom, string $email, string $login , string $pass ){

     		$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->pass=$pass;

		}

		
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getLogin(): string{
			return $this->login;
		}
		
		function getCode(): int{
			return $this->code;
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
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		
		
		function setPass(string $pass): void{
			$this->pass=$pass;
		}
		
function setCode(int $code): void{
			$this->code=$code;
		}
	}
?>