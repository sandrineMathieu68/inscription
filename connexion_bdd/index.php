<?php session_start(); ?>

    

<!DOCTYPE html>

<html lang="fr">

  <head>

        <meta charset="utf-8">
        <!-- ################################ -->
        <!-- ###### Meta d'information ###### -->
        <!-- ################################ -->
        <meta property="og:locale" content="fr_FR" />
        <meta property="og:title" content="formulaire js"/>
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="Flatdesign"/>
        <meta property="og:url" content="https://sandrine.promo-5.codeur.online/"/>
        <meta property="og:image" content="images/miniature.png"/>
        <meta property="og:site_name" content="formulaire js"/>
        <meta property="fb:app_id" content=""/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:description" content="formulaire js"/>
        <meta name="twitter:title" content="formulaire js"/>
        <meta name="twitter:domain" content="Flatdesign"/>
        <meta name="twitter:image" content="images/miniature.png"/>
        <meta http-equiv="content-type" content="text/html; charset="utf-8"/>
        <meta name="description" content="formulaire js"/>
        
        
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="image/favicon.ico">
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

        <title>Formulaire JS</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css" /> 
        <link rel="stylesheet" media="screen and (max-width: 992px)" href="css/media.css" />
        

        <!-- Custom styles for this template -->
        <link href="navbar.css" rel="stylesheet">

        <!-- Fonts à télécharger -->
        <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Nosifer" rel="stylesheet"> 

  </head>

<body>
    <main id="cadre">

    <h1>FORMULAIRE DE CONTACT en <span id="horreur">javascript</span></h1>


    <form action="contact.php" method="post" onsubmit=" return verifForm(this)" class="cadre1">

    <section class="container-fluid" >
        
<!--AFFICHAGE DES ERREURS-->
<?php if (array_key_exists('errors', $_SESSION)): ?>
    <div class="alert alert-danger">
        <?= implode('<br />', $_SESSION['errors']); ?>
    </div>    
<?php unset($_SESSION['errors']); endif; ?> 


    <div class="container">

        <div class="row">  

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                <label for="lastname">Nom :</label>

                <input type="text" class="form-control" name="lastname" size="30" id="lastname" onblur="verifLastname(this)" placeholder="Nom">

            </div>  

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                <label for="firstname">Prénom :</label>

                <input type="text" class="form-control" name="firstname" size="30" id="firstname" onblur="verifFirstname(this)" placeholder="Prenom">

            </div>  

        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                <label for="cp">CP :</label>

                <input type="text" class="form-control" name="cp" size="5" id="cp" onblur="verifCp(this)" placeholder="ex: 70000">

            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                <label for="city">Ville :</label>

                <input type="text" class="form-control" name="city" size="30" id="city" onblur="verifCity(this)" placeholder="Ville"/>

            </div>  

        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

                <label for="email">Email :</label>

                <input type="email" class="form-control " name="email" size="30" id="email" onblur="verifEmail(this)" placeholder="mailmail@mail.com">

            </div>

        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <label for="message">Message :</label>

                <textarea class="form-control" name="message" rows="5" id="message" onblur="verifMessage(this)" placeholder="Votre message"></textarea>

            </div>

        </div>

            <div class="row ">

                <div class="button">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align">

                        <button type="submit" id="btn">Envoyer</button>

                        <button type="reset" id="btn">Réinitialiser</button>

                    </div>

                </div>

            </div>

        </div>  

    </section>

</form>

</main>






</body>

</html>