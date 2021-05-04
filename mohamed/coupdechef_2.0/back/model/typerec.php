<?PHP
	class typerec{
		
        private  $IDtype;
		private  $type;

		function __construct(string $IDtype,string $type){
			
			
			$this->IDtype=$IDtype;
			$this->type=$type;
			
		}
		
	
		
		function getIDtype(){
			return $this->IDtype;
		}
	    function gettype(){
			return $this->type;
		}
		
		
        
		
        function setIDtype($IDtype){
			$this->IDtype=$IDtype;
		}
		function settype($type){
			$this->type=$type;
		}
		
		
	}
?>