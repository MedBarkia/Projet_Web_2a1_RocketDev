<?PHP
	class Reclamation{
		
        private  $nom;
		private  $email;
		private  $type;
		private  $description;

		function __construct(string $nom,string $email,string $type,string $description){
			
			
			$this->nom=$nom;
			$this->email=$email;
			$this->type=$type;
			$this->description=$description;
			
		}
		
	
		
		function getnom(){
			return $this->nom;
		}
	    function getemail(){
			return $this->email;
		}
		function gettype(){
			return $this->type;
		}
		function getdescription(){
			return $this->description;
		}
		
        
		
        function setnom($nom){
			$this->nom=$nom;
		}
		function settype($type){
			$this->type=$type;
		}
		function setemail($email){
			$this->email=$email;
		}
		function setdescription($description){
			$this->description=$description;
		}
		
	}
?>