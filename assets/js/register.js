var regsubmit = document.getElementById('regsubmit');
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
    }
    if(regemail.indexOf("@") >= 0 && regemail.indexOf(".") > regemail.indexOf("@") )
    {
      alert('Ange en correct emailadress')
    }
}
