<?php
class Chef{
    private $id;
    private $nom_chef = null;
    private $prenom_chef = null;
    private $date_naissance = null;
    private $nationalite = null;
    private $image = null;
    
    public function getImage(){
      return $this->image;
    }

    public function getId(){
      return $this->id;
    }

    public function getNom(){
        return $this->nom_chef;
    }
    
    public function getPrenom(){
        return $this->prenom_chef;
    }
    
    public function getDate_naissance(){
        return $this->date_naissance;
    }
    
    public function getNationalite(){
        return $this->nationalite;
    }

    public function setImage($image){
         $this->image = $image;
    }

    public function setId($id){
         $this->id = $id;
    }

    public function setNom($nom){
         $this->nom_chef = $nom;
    }
    
    public function setPrenom($prenom){
         $this->prenom_chef = $prenom;
    }
    
    public function setDate_naissance($date_naissance){
         $this->date_naissance = $date_naissance;
    }
    
    public function setNationalite($nationalite){
         $this->nationalite = $nationalite;
    }

    public function ajouterChefForm(){
        return '<form name="formChef" onsubmit="return verifChef();" action="../view/ajouterChef.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nom">Nom du chef</label>
                    <input class="form-control" type="text" id="nom" name="nom_chef" >
                    <div style="color: red;" id="erreurNom"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="prenom">Prenom du chef</label>
                    <input class="form-control" type="text" id="prenom" name="prenom_chef">
                    <div style="color: red;" id="erreurPrenom"></div>
                  </div>
                  <div class="form-group">
                    <label for="date_naissance">Date de naissance du chef</label>
                    <input class="form-control" type="date" id="date_naissance" name="date_naissance">
                    <div style="color: red;" id="erreurDate"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nationalite">Nationalite du chef</label>
                    <input class="form-control" type="text" id="nationalite" name="nationalite">
                    <div style="color: red;" id="erreurNationalite"></div>
                  </div>
                  <label class="bmd-label-floating">Photo du chef</label>
                  <br>
                  <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png,image/gif,image/jpeg,image/jpg">
                  <input type="submit" name="submit" class="btn btn-primary pull-right" value="Ajouter">
                  <button type="reset" class="btn btn-primary pull-right">Reset</button>
                </form>';
    }


    public function afficherChef(){
        return "<tr>
                  <td><FONT size='3pt'>" . $this->id. "</FONT></td>
                  <td><FONT size='3pt'>" . $this->nom_chef. "</FONT></td>
                  <td><FONT size='3pt'>" . $this->prenom_chef. "</FONT></td>
                  <td><FONT size='3pt'>". $this->date_naissance. "</FONT></td>
                  <td><FONT size='3pt'>". $this->nationalite. "</FONT></td>
                  <td> <img src='" . $this->image . "' class='img-responsive smoothie' alt='' border=3 height=150 width=300></img></td>
                  <td><B><FONT size='3pt'><a href='../view/modifierChef.php?id=".$this->id."' >Modifier</a></B></FONT></td>
                  <td><B><FONT size='3pt'><a href='../view/supprimerChef.php?id=".$this->id."' >Supprimer</a></B></FONT></td>
                </tr>";

    }

    public function modifierChefForm(){
        return '<form name="formChef" onsubmit="return verifChef();" action="../view/modifierChef.php?id=' . $this->id. '" method="POST" enctype="multipart/form-data">
                  <input id="id" name="id" type="hidden" value="'. $this->id. '">
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nom_u">Nom du chef</label>
                    <input class="form-control" type="text" id="nom_u" name="nom_chef" value= "'. $this->nom_chef. '">
                    <div style="color: red;" id="erreurNom"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="prenom_u">Prenom du chef</label>
                    <input class="form-control" type="text" id="prenom_u" name="prenom_chef" value= "'. $this->prenom_chef. '">
                    <div style="color: red;" id="erreurPrenom"></div> 
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="date_naissance_u">Date de naissance du chef</label>
                    <input class="form-control" type="Date" id="date_naissance_u" name="date_naissance" value= "'. $this->date_naissance. '">
                    <div style="color: red;" id="erreurDate"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nationalite_u">Nationalite du chef</label>
                    <input class="form-control" type="text" id="nationalite_u" name="nationalite" value= "'. $this->nationalite. '">
                    <div style="color: red;" id="erreurNationalite"></div>
                  </div>
                  <label class="bmd-label-floating">Photo du chef</label>
                  <br>
                  <input id="vielle_image" name="vielle_image" type="hidden" value="'. $this->image. '">
                  <img src="' . $this->image . '" class="img-responsive smoothie" alt="" height="500" width="300">
                  <input type="file" name="fileToUpload" id="fileToUploadd" accept="image/png,image/gif,image/jpeg,image/jpg">
                  <input type="submit" name="modifier" class="btn btn-primary pull-right" value="Mettre à jour">
                  <button type="reset" class="btn btn-primary pull-right">Reset</button>
              </form>';
    }

    public function afficherChefCarte()
    {
      return '<li>
                <div class="row hover-item">
                    <div class="col-xs-12">
                        <img src="' . $this->image . '" class="img-responsive smoothie" alt="" height="500" width="300">
                    </div>
                    <div class="col-xs-12 overlay-item-caption smoothie"></div>
                    <div class="col-xs-12 hover-item-caption smoothie">
                        <div class="vertical-center">
                            <h3 class="smoothie"><a href="../view/afficherChefCarte.php?id='. $this->id . '" title="view project">'. $this->nom_chef. ' ' . $this->prenom_chef . '</a><br>' . $this->date_naissance . '<br>' . $this->nationalite . '</h3>
                            <ul class="smoothie list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="col-xs-12 theme-accent-color-bg hover-bar"></span>
                </div>
            </li>';
    }
}
?>