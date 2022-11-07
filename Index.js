function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_nlq3h1n";
  const templateID = "template_1pf7or5";


    if(document.getElementById("name").value&&document.getElementById("email").value&&document.getElementById("message").value){

  
    emailjs.send(serviceID, templateID, params)
      .then(res=>{
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          document.getElementById("message").value = "";
          console.log(res);
          alert("Your message sent successfully!!")
  
      })
      .catch(err=>console.log(err));
    }else{
      
      alert("Your message don't sent !!")
    }
}

function  recaptcha_callback(){

  var subBtn=document.querySelector('#submitbtn')
  subBtn.removeAttribute('diseable')
}









