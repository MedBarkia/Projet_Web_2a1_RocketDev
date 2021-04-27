
<?PHP
	class avis{
		
		private  $name = null;
        private  $rate = null;
		
		function __construct(string $name, float $rate){
			
			$this->name=$name;
            $this->rate=$rate;


		}

		function getname(): string{
			return $this->name;
		}
		function getrate(): float{
			return $this->rate;
		}
	
		}
        function setnom(string $name): void{
			$this->name=$name;
		}
		function setrate(float $rate): void{
			$this->$rate;
		}
	


	
?>