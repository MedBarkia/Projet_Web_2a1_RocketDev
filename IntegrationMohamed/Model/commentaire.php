<?PHP
    class commentaire{
        private  $id = null;
        private  $num = null;
        private  $idclient = null;
        private  $commentaire = null;
        
        function __construct(int $num,int $idclient, string $commentaire){
            
            $this->num=$num;
            $this->idclient=$idclient;
            $this->commentaire=$commentaire;
            
        }

    
        function getNum(): int{
            return $this->num;
        }
        function getidc(): int{
            return $this->idclient;
        }
        function getcommentaire(): string{
            return $this->commentaire;
        }
        
        
        

    }
?>