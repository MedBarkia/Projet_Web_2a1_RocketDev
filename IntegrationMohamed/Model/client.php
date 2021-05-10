<?PHP
    class client{
        private  $id = null;
        private  $nom = null;
        private  $prenom = null;
        
        
        function __construct(string $nom,string $prenom){
            
            $this->nom=$nom;
            $this->prenom=$prenom;
            
            
        }

    
        function getNom(): string{
            return $this->nom;
        }
        function getprenom(): string{
            return $this->prenom;
        }
       
        
        
        

    }
?>