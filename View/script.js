
function verifUtilisateur() {
	var erreur = false;
	// controle de saisie nom et prenom 
    var nom = formUtilisateur.nom.value;
    var prenom = formUtilisateur.prenom.value;
    var login = formUtilisateur.login.value;
    var pass = formUtilisateur.pass.value;

    var letters = /^[A-Za-z]+$/;
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
    if(login == "")
    {
        document.getElementById('erreurlogin').innerHTML = "Le login ne doit pas être vide";
        erreur = true;
    }
    else if (login.length<8)
    {
        document.getElementById('erreurlogin').innerHTML = "Le login  doit avoir 8 characters minimum";
                erreur = true;


    }
    else
    {
        document.getElementById('erreurlogin').innerHTML = "";
    }
    if(pass == "")
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de pass ne doit pas être vide";
        erreur = true;
    }
    else if (pass.length<8)
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de passe  doit avoir 8 characters minimum";
                erreur = true;


    }
    else
    {
        document.getElementById('erreurpass').innerHTML = "";
    }

    
    return (!erreur);
}
function verifAdmin() {
    var erreur = false;
    // controle de saisie nom et prenom 
    var nom = formAdmin.nom.value;
    var pass = formAdmin.pass.value;

    var letters = /^[A-Za-z]+$/;
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
    
    if(pass == "")
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de pass ne doit pas être vide";
        erreur = true;
    }
    else if (pass.length<8)
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de passe  doit avoir 8 characters minimum";
                erreur = true;


    }
    else
    {
        document.getElementById('erreurpass').innerHTML = "";
    }

    
    return (!erreur);
}


function verifLivreur() {
    var erreur = false;
    // controle de saisie nom et prenom 
    var nom = name=formLivreur.nom.value;
    var prenom = formLivreur.prenom.value;
    var login = formLivreur.login.value;
    var pass = formLivreur.pass.value;

    var letters = /^[A-Za-z]+$/;
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
    if(login == "")
    {
        document.getElementById('erreurlogin').innerHTML = "Le login ne doit pas être vide";
        erreur = true;
    }
    else if (login.length<8)
    {
        document.getElementById('erreurlogin').innerHTML = "Le login  doit avoir 8 characters minimum";
                erreur = true;


    }
    else
    {
        document.getElementById('erreurlogin').innerHTML = "";
    }
    if(pass == "")
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de pass ne doit pas être vide";
        erreur = true;
    }
    else if (pass.length<8)
    {
        document.getElementById('erreurpass').innerHTML = "Le mot de passe  doit avoir 8 characters minimum";
                erreur = true;


    }
    else
    {
        document.getElementById('erreurpass').innerHTML = "";
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
    // Wait for document to load
  document.addEventListener("DOMContentLoaded", function(event) {
    document.documentElement.setAttribute("data-theme", "dark");
  });
    document.addEventListener("DOMContentLoaded", function(event) {
    document.documentElement.setAttribute("data-theme", "light");

    // Get our button switcher
    var themeSwitcher = document.getElementById("theme-switcher");

    // When our button gets clicked
    themeSwitcher.onclick = function() {
      // Get the current selected theme, on the first run
      // it should be `light`
      var currentTheme = document.documentElement.getAttribute("data-theme");

      // Switch between `dark` and `light`
      var switchToTheme = currentTheme === "dark" ? "light" : "dark"

      // Set our currenet theme to the new one
      document.documentElement.setAttribute("data-theme", switchToTheme);
    }
  });