
<?PHP
	class categorie{
		private  $ref = null;
        private  $idp = null;
		private  $nomcategorie = null;

		
		function __construct(int $ref, int $idp, string $nomcategorie){
            $this->ref=$ref;
			$this->idp=$idp;
			$this->nomcategorie=$nomcategorie;

		}

		function getidp(): int{
			return $this->idp;
		}
		function getnomcategorie(): string{
			return $this->nomcategorie;
		}
		function getref(): int{
			return $this->ref;
		}
		
        function setref(int $ref): void{
			$this->ref=$ref;
		}
		function setid(int $idp): void{
			$this->idp=$idp;
		}
		function setnomcategorie(string $nomcategorie): void{
			$this-> $nomcategorie=$nomcategorie;
		
        }

	}
?>