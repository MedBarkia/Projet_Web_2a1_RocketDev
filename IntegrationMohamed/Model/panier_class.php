

<?php

class panier
{
    private $DB;
    private $idp;

    public function __construct()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(!isset($_SESSION['panier']))
        {
            $_SESSION['panier']=array();
        }
        if(isset($_GET['delPanier']))
        {
            $this->del($_GET['delPanier']);
        } 
        
    }

    public function count()
    {
        return array_sum($_SESSION['panier']);
    }
    
    public function add($produit_idp)
    {
        if(isset($_SESSION['panier'][$produit_idp]))
        {
            $_SESSION['panier'][$produit_idp]++;
        }
        else
        {
            $_SESSION['panier'][$produit_idp]=1;
        }
       
    
    }

    public function del($produit_idp)
    {
        unset($_SESSION['panier'][$produit_idp]);
    }

   
}






?>