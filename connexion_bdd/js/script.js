
/*#################################################*/
/*# Empêcher l'envoi du formulaire si des erreurs #*/
/*##### Colorer les champs qui posent problème ####*/

function surligne(champ, erreur)
{

   if(erreur)

      champ.style.backgroundColor = "#b15f75";

   else

      champ.style.backgroundColor = "#ede4db";

}

/*#################################################*/
/*#### Vérification des champs avec conditions  ###*/
/*#################################################*/

function verifLastname(champ)

{

   if(champ.value.length < 2 || champ.value.length > 25)

   {

      surligne(champ, true);

      //alert("Votre Nom doit comporter au minimum 2 caractères !");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}



function verifFirstname(champ)

{

   if(champ.value.length < 2 || champ.value.length > 25)

   {

      surligne(champ, true);

      //alert("Votre Prénom doit comporter au minimum 2 caractères !");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}



function verifCp(champ)

{

   if(isNaN(champ.value) || champ.value.length < 5 || champ.value.length > 5)

   {

      surligne(champ, true);

      //alert("Uniquement des chiffres !");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}



function verifCity(champ)

{



   if(champ.value.length < 2 || champ.value.length > 25)

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}



function verifEmail(champ)

{

   var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,6}$/;

   if(!regex.test(champ.value))

   {

      surligne(champ, true);

      //alert("Veuillez entrer une adresse mail valide !");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}



function verifMessage(champ)

{



   if(champ.value.length < 15)

   {

      surligne(champ, true);

      //alert("Votre message doit comporter au minimum 15 caractères");

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}

/*#################################################*/
/*####  Envoi du formulaire après vérification  ###*/
/*#################################################*/

function verifForm(f)

{

   var lastnameValid = verifLastname(f.lastname);

   var firstnameValid = verifFirstname(f.firstname);

   var cpValid = verifCp(f.cp);

   var cityValid = verifCity(f.city);

   var emailValid = verifEmail(f.email);

   var messageValid = verifMessage(f.message);



   if(lastnameValid && firstnameValid  && cpValid && cityValid && emailValid && messageValid)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}