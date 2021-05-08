<?PHP
	class typerec{
		
        private  $IDtype;
		private  $type;

		function __construct(string $IDtype,string $type){
			
			
			$this->IDtype=$IDtype;
			$this->type=$type;
			
		}
		
	
		
		public function getIDtype(){
			return $this->IDtype;
		}
	    public function gettype(){
			return $this->type;
		}
		
		
        
		
        public function setIDtype(string $IDtype){
			$this->IDtype=$IDtype;
		}
		public function settype(string $type){
			$this->type=$type;
		}
		
		
	}
?>