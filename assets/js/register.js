var regsubmit = document.getElementById('regsubmit');
if(regsubmit)
{
regsubmit.addEventListener("click", regvalidateForm);
function regvalidateForm ()
{
  var regfname = document.regbox.first.value;
  var reglname = document.regbox.last.value;
  var regemail = document.regbox.email.value;
  var regusername = document.regbox.username.value;
  var regpassword = document.regbox.regpassword.value;


  if(regfname.trim() == "" || reglname.trim() == "" || regemail.trim() == "" || regusername.trim() == "" || regpassword.trim() == "")
    {
      alert('Alla fält måste vara i fyllda')
      event.preventDefault();
    }
    if(email.indexOf("@") >= 0 && email.indexOf(".") > email.indexOf("@") )
  {
  }
  else {
    {
      alert('Fyll i en giltig epost-adress')
    }
  }
}
}
