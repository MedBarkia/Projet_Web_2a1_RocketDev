
function verifChef() {
	var erreur = false;
	// controle de saisie nom et prenom 
    var nom = formChef.nom_chef.value;
    var prenom = formChef.prenom_chef.value;
    var nationalite = formChef.nationalite.value;
    var letters = /^[A-Za-z\s]*$/;
    if(nom.charAt(0) != nom.charAt(0).toUpperCase())
    {     
    	document.getElementById('erreurNom').innerHTML = "Le nom doit commencer par une lettre Majuscule";
        erreur = true;
    }
    else if(nom == "")
    {
        document.getElementById('erreurNom').innerHTML = "Le nom ne doit pas être vide";
        erreur = true;
    }
    else if(!nom.match(letters))
    {
        document.getElementById('erreurNom').innerHTML = "Le nom doit contenir des lettres seulement";
        erreur = true;
    }
    else
    {
        document.getElementById('erreurNom').innerHTML = "";
    }
    if(prenom.charAt(0) != prenom.charAt(0).toUpperCase())
    {
		document.getElementById('erreurPrenom').innerHTML = "Le prenom doit commencer par une lettre Majuscule";
    	erreur = true;	
    }
    else if (prenom == "")
    {
        document.getElementById('erreurPrenom').innerHTML = "Le preom ne doit pas être vide";
        erreur = true;  
    }
    else
    {
    	document.getElementById('erreurPrenom').innerHTML = "";
    }
    if(nationalite == "")
    {
        document.getElementById('erreurNationalite').innerHTML = "La nationalité ne doit pas être vide";
        erreur = true;
    }
    else
    {
        document.getElementById('erreurNationalite').innerHTML = "";
    }

    var today = new Date();
    var dateNais = new Date(formChef.date_naissance.value);
    var year = today.getFullYear();
    var dateNaisYear = dateNais.getFullYear();
    var age = year - dateNaisYear;
    if(age<15)
    {
        document.getElementById('erreurDate').innerHTML = "Le chef doit avoir plus que 15 ans";
        erreur = true;
    }
    else if(formChef.date_naissance.value == '')
    {
        document.getElementById('erreurDate').innerHTML = "La date de naissance est obligatoire";
        erreur = true;
    }
    else
    {
        document.getElementById('erreurDate').innerHTML = "";
    }
    return (!erreur);
}

function verifRecette(){
    var erreur = false;
    var nom_recette = formRecette.nom_recette.value;
    var duree = formRecette.duree_recette.value;
    var nbr_personnes = formRecette.nbr_personnes.value;
    var ingredients = formRecette.ingredients.value;
    var preparation = formRecette.preparation.value;

    if(nom_recette == "")
    {
        document.getElementById('erreurNomRecette').innerHTML = "Le nom de la recette ne doit pas être vide";
        erreur = true;
    }
    else{
        document.getElementById('erreurNomRecette').innerHTML = "";
    }
    if(duree == "")
    {
        document.getElementById('erreurDuree').innerHTML = "La durée ne doit pas être vide";
        erreur = true;
    }
    else{
        document.getElementById('erreurDuree').innerHTML = "";
    }
    if ((nbr_personnes == "") || (parseInt(nbr_personnes) > 25))
    {
        document.getElementById('erreurNbr_Personnes').innerHTML = "Veuillez saisir un nombre de personnes non vide et < 25";
        erreur = true;
    }
    else{
        document.getElementById('erreurNbr_Personnes').innerHTML = "";
    }
    if (ingredients == "")
    {
        document.getElementById('erreurIngredients').innerHTML = "Les ingrédients ne doivent pas êtres vides";
        erreur = true;
    }
    else{
        document.getElementById('erreurIngredients').innerHTML = "";
    }
    if (preparation == "")
    {
        document.getElementById('erreurPreparation').innerHTML = "La préparation ne doit pas être vide";
        erreur = true;
    }
    else{
        document.getElementById('erreurPreparation').innerHTML = "";
    }
    return (!erreur);
}

function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
