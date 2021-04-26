<?php
class Recette{
    private $id;
    private $id_chef;
    private $nom_recette = null;
    private $type = null;
    private $duree = null;
    private $difficulte = null;
    private $nbr_personnes = null;
    private $ingredients = null;
    private $preparation = null;
    private $image = null;

    
    public function getId(){
      return $this->id;
    }

     public function getId_chef(){
      return $this->id_chef;
    }

    public function getNom_recette(){
        return $this->nom_recette;
    }
    
    public function getType(){
        return $this->type;
    }
        
    public function getDuree(){
        return $this->duree;
    }

     public function getDifficulte(){
        return $this->difficulte;
    }

     public function getNbr_personnes(){
        return $this->nbr_personnes;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

     public function getPreparation(){
        return $this->preparation;
    }

    public function getImage(){
      return $this->image;
    }


    public function setId($id){
        $this->id = $id;
    }

    public function setId_chef($id_chef){
        $this->id_chef = $id_chef;
    }

    public function setNom_recette($nom_recette){
        $this->nom_recette = $nom_recette;
    }
    
    public function setType($type){
        $this->type = $type;
    }
        
    public function setDuree($duree){
        $this->duree = $duree;
    }

    public function setDifficulte($difficulte){
        $this->difficulte = $difficulte;
    }

    public function setNbr_personnes($nbr_personnes){
        $this->nbr_personnes = $nbr_personnes;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    public function setPreparation($preparation){
        $this->preparation = $preparation;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function ajouterRecetteForm($option){
        return '<form name="formRecette" onsubmit="return verifRecette();" action="../view/ajouterRecette.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="id_chef">Nom du chef</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="id_chef" name="id_chef" >' . $option . '</select>
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nom_recette">Nom de la recette</label>
                    <input class="form-control" type="text" id="nom_recette" name="nom_recette" >
                    <div style="color: red;" id="erreurNomRecette"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="type_recette">Type de la recette</label>
                    <select class="form-control" type="select" id="type_recette" name="type_recette" >
                      <option value="Entrée">Entrée</option>
                      <option value="Plat">Plat</option>
                      <option value="Dessert">Dessert</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating for="duree_recette">Durée de la recette</label>
                    <input class="form-control" type="text" id="duree_recette" name="duree_recette" >
                    <div style="color: red;" id="erreurDuree"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="difficulte_recette">Difficulté de la recette</label>
                    <select class="form-control" type="select" id="difficulte_recette" name="difficulte_recette">
                      <option value="Facile">Facile</option>
                      <option value="Moyenne">Moyenne</option>
                      <option value="Difficile">Difficile</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nbr_personnes">Nombres de personnes</label>
                    <input class="form-control" type="number" id="nbr_personnes" name="nbr_personnes">
                    <div style="color: red;" id="erreurNbr_Personnes"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="ingredients">Ingrédients de la recette</label>
                    <textarea rows="5" cols="33" class="form-control" id="ingredients" name="ingredients"></textarea>
                    <div style="color: red;" id="erreurIngredients"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="preparation">Préparation de la recette</label>
                    <textarea rows="5" cols="33" class="form-control" id="preparation" name="preparation"></textarea>
                    <div style="color: red;" id="erreurPreparation"></div>
                  </div>
                  <label class="bmd-label-floating">Photo de la recette</label>
                  <br>
                  <input type="file" name="fileToUpload" id="fileToUpload_r" accept="image/png,image/gif,image/jpeg,image/jpg">
                  <input type="submit" name="submit" class="btn btn-primary pull-right" value="Ajouter">
                  <button type="reset" class="btn btn-primary pull-right">Reset</button>
                </form>';
    }


    public function afficherRecetteForm(){
        return "<tr>
                  <td>" . $this->id. "</td>
                  <td>" . $this->id_chef. "</td>
                  <td>" . $this->nom_recette. "</td>
                  <td>" . $this->type. "</td>
                  <td>". $this->duree. "</td>
                  <td>". $this->difficulte. "</td>
                  <td>". $this->nbr_personnes. "</td>
                  <td>". $this->ingredients. "</td>
                  <td>". $this->preparation. "</td>
                  <td> <img src='" . $this->image . "' class='img-responsive smoothie' alt='' border=3 height=100 width=200></img></td>
                  <td><B><FONT size='3pt'><a href='../view/modifierRecette.php?id=".$this->id."' >Modifier</td>
                  <td><B><FONT size='3pt'><a href='../view/supprimerRecette.php?id=".$this->id."' >Supprimer</td>
                </tr>";

    }

    public function modifierRecetteForm(){
        return '<form name="formRecette" onsubmit="return verifRecette();" action="../view/modifierRecette.php?id=' . $this->id. '" method="POST" enctype="multipart/form-data">
                  <input id="id" name="id" type="hidden" value="'. $this->id. '">
                  <input id="id_chef" name="id_chef" type="hidden" value="'. $this->id_chef. '">
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nom_recette">Nom de la recette</label>
                    <input class="form-control" type="text" id="nom_recette" name="nom_recette" value= "'. $this->nom_recette. '">
                    <div style="color: red;" id="erreurNomRecette"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="type_recette">Type de la recette</label>
                    <select class="form-control" id="type_recette" name="type" >
                      <option value="Entrée" ' . ($this->type == 'Entrée' ? ' selected="selected"' : '') . '>Entrée</option>
                      <option value="Plat" ' . ($this->type == 'Plat' ? ' selected="selected"' : '') . '>Plat</option>
                      <option value="Dessert" ' . ($this->type == 'Dessert' ? ' selected="selected"' : '') . '>Dessert</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="duree">Durée</label>
                    <input class="form-control" type="text" id="duree" name="duree_recette" value= "'. $this->duree. '">
                    <div style="color: red;" id="erreurDuree"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="difficulte">Difficulté de la recette</label>
                      <select class="form-control" id="difficulte" name="difficulte_recette">
                        <option value="Facile" ' . ($this->difficulte == 'Facile' ? ' selected="selected"' : '') . '>Facile</option>
                        <option value="Moyenne" ' . ($this->difficulte == 'Moyenne' ? ' selected="selected"' : '') . '>Moyenne</option>
                        <option value="Difficile" ' . ($this->difficulte == 'Difficile' ? ' selected="selected"' : '') . '>Difficile</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="nbr_personnes">Nombres de personnes</label>
                    <input class="form-control" type="number" id="nbr_personnes" name="nbr_personnes" value="' . $this->nbr_personnes . '">
                    <div style="color: red;" id="erreurNbr_Personnes"></div>
                  </div>                
                  <div class="form-group">
                    <label class="bmd-label-floating" for="ingredients">Ingrédients de la recette</label>
                    <textarea rows="5" cols="33" class="form-control" id="ingredients" name="ingredients" >' . $this->ingredients . '</textarea>
                    <div style="color: red;" id="erreurIngredients"></div>
                  </div>
                  <div class="form-group">
                    <label class="bmd-label-floating" for="preparation">Préparation de la recette</label>
                    <textarea rows="5" cols="33" class="form-control" id="preparation" name="preparation" >' . $this->preparation . '</textarea>
                   <div style="color: red;" id="erreurPreparation"></div>
                  </div>
                  <label class="bmd-label-floating">Photo du chef</label>
                  <br>
                  <input id="vielle_image" name="vielle_image" type="hidden" value="'. $this->image. '">
                  <img src="' . $this->image . '" class="img-responsive smoothie" alt="" height="500" width="300">
                  <input type="file" name="fileToUpload" id="fileToUploadd" accept="image/png,image/gif,image/jpeg,image/jpg">
                  <input type="submit" name="update" class="btn btn-primary pull-right" value="Mettre à jour">
                  <button type="reset" class="btn btn-primary pull-right">Reset</button>
              </form>';
    }


    public function afficherRecetteChef(){
      return '
               <div class="col-xs-3">
                  <img src="' . $this->image . '" class="img-responsive smoothie" alt="" height="50" width="300"><br><br>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-5 col-md-offset-1">
                          <h2 <span class="theme-accent-color">'. $this->nom_recette .'</span></h2>
                          <p class="lead"><B>Type de la recette:</B> '.$this->type.'<br><B>Pour: </B>' . $this->nbr_personnes . ' Personnes<br><B> Durée: </B>' . $this->duree . '<br> <B> Difficulté: </B>' . $this->difficulte . ' <br><B>Ingrédients: </B>' . $this->ingredients . ' <br><B>Préparation: </B> ' . $this->preparation. '</p>
                      </div>
                  </div>
              </div>
              <hr style="height:1px;border-width:0;color:orange;background-color:orange">';
    }




  }

?>