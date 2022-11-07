function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_nlq3h1n";
  const templateID = "template_1pf7or5";



  
if(grecaptcha.getResponse().length ==0)
{
 
          alert("nu e selectat")
  
      }

    }else{
      
      alert("se trimite")
    }
     
     
}
else
{
    //The recaptcha is not cheched
    //You can display an error message here
    alert('Oops, you have to check the recaptcha !');
}

}


