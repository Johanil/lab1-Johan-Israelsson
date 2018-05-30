var loginsubmit = document.getElementById('loginsubmit');

loginsubmit.addEventListener("click", loginvalidateForm);

function loginvalidateForm()
{
  var email = document.loginbox.email.value;
  var password = document.loginbox.password.value;
  if(email == "" || password == "")
  {
  alert('Alla fält måste vara i fyllda')
  event.preventDefault();
} else{
  if(email.indexOf("@") =< 0 || email.indexOf(".") =< 0 )
{
}
else {
  {
    alert('Fyll i en giltig epost-adress')
  }
}
}

}
