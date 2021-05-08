function verif() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var email = document.querySelector('#email').value;
    var description = document.querySelector('#description').value;
    var type = document.querySelector('#type').value;
    if (nom === "") {
        errors += "<li>Nom est obligatoire </li>";
    }
        

        function ValidateEmail(email) 
        {
         if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
          {
            return (true)
          }
            return (false)
        }
        if (ValidateEmail(email)===false) {
            if (email === "") {
                errors += "<li>Email est obligatoire </li>";
                } else {
            errors += "<li>Email est invalide </li>";
                }
            }
            
        if (type === "Select") {
            errors += "<li>Veuillez choisir un type de réclamation !!</li>";
            } 
        if (description === "") {
            errors += "<li>Veuillez donner une description de la réclamation !!</li>";
            } 
           
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = '#white';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }  
   
  }