<?PHP
    class restau{
        private  $num = null;
        private  $nom = null;
        private  $adresse = null;
        private  $telephone = null;
        private $horaire = null;
        private $photo = null;
        
        function __construct(int $num, string $nom, string $adresse, int $telephone , string $horaire, string $photo){
            
            $this->num=$num;
            $this->nom=$nom;
            $this->adresse=$adresse;
            $this->telephone=$telephone;
            $this->horaire=$horaire;
            $this->photo=$photo;

        }

        function getnum(): int{
            return $this->num;
        }
        function getNom(): string{
            return $this->nom;
        }
        function getadresse(): string{
            return $this->adresse;
        }
        function gettel(): int{
            return $this->telephone;
        }
        function gethoraire(): string{
            return $this->horaire;
        }
        function getphoto(): string{
            return $this->photo;
        }
        

    }
?>