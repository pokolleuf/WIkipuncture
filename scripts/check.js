function checkPassword(){	
	var password = document.getElementById("pass")
	var confirm_password = document.getElementById("confirm_pass");

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Les mots de passe doivent être identiques");
  } else {
    confirm_password.setCustomValidity('');
  }
}