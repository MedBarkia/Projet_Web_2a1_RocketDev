function verif() {
  var errors = "<ul>";
  var IDtype = document.querySelector('#IDtype').value;
  var type = document.querySelector('#type').value;

  if (IDtype === "") {
      errors += "<li>ID est obligatoire </li>";
  }
      if (type === "") {
      errors += "<li>Type reclamation est obligatoire </li>";
      }else if (type.substring(0, 11) !== 'reclamation')
      {
        errors += "<li>Type reclamation est erroné </li>";
      }
  if (errors !== "<ul>") {
      document.querySelector('#erreur').style.color = 'white';
      errors += "</ul>"
      document.getElementById('erreur').innerHTML = errors;
      return false;
  }  
 
}
