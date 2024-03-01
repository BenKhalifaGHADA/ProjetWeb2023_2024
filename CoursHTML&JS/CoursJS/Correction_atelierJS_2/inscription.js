//Question1
function validerDateOfBirth () {
    var dateNaissance=document.getElementById('date_naissance');
    var dateNaissanceVal=new Date(dateNaissance.value);
    var aujoudhuiDate=new Date();
    console.log(dateNaissanceVal);
    console.log(aujoudhuiDate);
    if(dateNaissanceVal >= aujoudhuiDate){
        alert("La date de naissance doit être antérieure à la date d'aujourd'hui");
    }
    else{
        alert('La date de naissance est valide');
    }

}

const form=document.getElementById('form');
const nom=document.getElementById('nom');
const prenom=document.getElementById('prenom');
const telephone=document.getElementById('telephone'); //QuerySelector('#telephone')
//const dataOfBirth=doccument.getElementById('date_naissance');
const password=document.getElementById('password');
const errorNom=document.getElementById('erreurNom');
const errorPrenom=document.getElementById('errorPrenom');
const errorTel=document.getElementById('erreurTelephone');
const errorDate=document.getElementById('errorDate_naissance');
const errorPwd=document.getElementById('errorDate_password');
const email=document.getElementById('email');
const errorEmail=document.getElementById('erreurEmail');


email.addEventListener('keyup', function(){
  validerEmail();
})

function validerEmail(){
    const emailValue=email.value.trim();
    const emailRegex=/^\S+@esprit.tn+$/;
    if(!emailValue.match(emailRegex)){
        errorEmail.innerHTML="Veuillez entrer un email vaalide";
    }
    else{
        errorEmail.innerHTML="<span style='color:green'>Correct</span>";
    }
}

form.addEventListener('submit', function (event){
// //////
event.preventDefault();
ValiderNom();
ValiderPrenom();
ValiderTelephone();
validerDate ();
ValidPwd();


})

function ValiderNom(){
    const nomVal= nom.value;
    const pattern=/^[A-Za-zÀ-ÖØ-öø-ÿ\s']+$/;
    
    
  //match()
    if(!nomVal.match(pattern)){ 
         // console.log("error");
          //alert("Veuillez entrer un nom valide (Lettres uniquement");
          errorNom.innerHTML="Veuillez entrer un nom valide (Lettres uniquement)";
  
    }
    else{
     // alert("Correct");
     errorNom.innerHTML="<span style='color:green'>Correct</span>";
  }
}

  function ValiderPrenom(){
    const nomVal= prenom.value;
    const pattern=/^[A-Za-zÀ-ÖØ-öø-ÿ\s']+$/;
    
    
  //match()
    if(!nomVal.match(pattern)){ 
         // console.log("error");
          //alert("Veuillez entrer un nom valide (Lettres uniquement");
          errorPrenom.innerHTML="Veuillez entrer un prénom valide";
  
    }
    else{
     // alert("Correct");
     errorPrenom.innerHTML="<span style='color:green'>Correct</span>";
  }
}

function ValiderTelephone(){
    const tel=telephone.value;
    const telRegex=/^[0-9]{8}$/;
    if(!tel.match(telRegex)){
      errorTel.innerHTML="Veuillez entrer un numero de tel valide";
    }

    else{
        errorTel.innerHTML="<span style='color:green'>Correct</span>";
    }
}

function validerDate () {
    var dateNaissance=document.getElementById('date_naissance');
    var dateNaissanceVal=new Date(dateNaissance.value);
    var aujoudhuiDate=new Date();
    console.log(dateNaissanceVal);
    console.log(aujoudhuiDate);
    if(dateNaissanceVal >= aujoudhuiDate || dateNaissanceVal== "Invalid Date" ){
        errorDate.innerHTML="Veuillez entrer une date valide";
    }
    else{
        errorDate.innerHTML="<span style='color:green'>Correct</span>";
    }

}

function ValidPwd(){
    var pwd=password.value;
    const pwdRegex=/^[a-z]{5}$/;
    if(!pwd.match(pwdRegex)){
        errorPwd.innerHTML="Veuillez entrer un pwd valide";
      }
  
      else{
        errorPwd.innerHTML="<span style='color:green'>Correct</span>";
      }

}