<?PHP
	class reclamation{
		private  $id = null;
        private  $nom = null;
		private  $email = null;
		private  $type = null;
		private  $description = null;

		public function __construct(string $nom,string $email, string $type, string $description){
			
			
			$this->email=$email;
            $this->nom=$nom;
			$this->type=$type;
			$this->description=$description;
			
		}
		
		public function getid() {
			return $this->id;
		}
		public function getemail() {
			return $this->email;
		}
        public function getnom() {
			return $this->nom;
		}
		public function gettype() {
			return $this->type;
		}
		public function getdescription() {
			return $this->description;
		}
		

		public function settype(string $type) {
			$this->type=$type;
		}

        public function setnom(string $nom) {
			$this->nom=$nom;
		}
		
		public function setemail(string $email) {
			$this->email=$email;
		}
		public function setdescription(string $description) {
			$this->description=$description;
		}
		
	}
?>