
var loginsubmit = document.getElementById('loginsubmit');
loginsubmit.addEventListener("click", loginvalidateForm);

function loginvalidateForm()
{
  console.log(hej);
  var email = document.loginbox.email.value;
  var password = document.loginbox.password.value;
  if(email == "" || password == "")
    {
      alert('Alla fält måste vara ifyllda!');
    }
  if(email.indexOf("@") >= 0 && email.indexOf(".") > email.indexOf("@") )
  {
  }
  else {
    {
      alert('Ogiltig epost-adress')
    }
  }
}
