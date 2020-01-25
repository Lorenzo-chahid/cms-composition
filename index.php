<?php
// Template: architecture
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
</head>
<body>
    <h1>Prendre soin de votre schéma de vie.</h1>
    
    <div class="contenu col-12">
        <div class="row">
            <div class="sectionLeft col-5">
                <h2>Contact</h2>
                <p>Route de Hamoir, 87 - 4500 Huy</p>
                <p>info@meublescomposition.be</p>

                <p>+32 (0)85 21 52 38</p>
            </div>
            <div id = "black"class="sectionRight col-7">
                <p><strong>
                    Horaires
                </strong>
                </p>

                <div id="horaire">
                    <p>Lundi > dimanche :</p>
                    <p>(Fermé le mardi)</p>
                    <p>10h > 18h30</p>
                </div>
                <div>
                    <p>
                        <p>
                            Une question,
                        </p>
                        <p>
                            une demande d'offre ?
                        </p>
                    </p>
                </div>
                <div>
                <h6>
                    Formulaire de contact
                </h6>
                </div>
            </div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    <div class="container-fluid" id="formulaire">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    <form>




<div class="col-sm-12">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    <div class="container-fluid" id="formulaire">
  <div class="row">
    <div class="col-md-10 offset-md-1">
    <form>
    <div class="form-group">
Nom *<p></p> <input type="text" name="name" value="<?php echo $name;?>" class="form-control">
  <span class="error"><p></p> <?php echo $nameErr;?></span>
</div>  
  
  <p><p>

  <div class="form-group">
  Prénom:<p></p> <input type="text" name="firstname" value="<?php echo $firstname;?>" class="form-control">
  <span class="error"> <p></p><?php echo $firstnameErr;?></span>
  </div>

  
  <p><p>
  <div class="form-group">
  E-mail:<p></p> <input type="text" name="email" value="<?php echo $email;?>" class="form-control">
  <span class="error"><p></p> <?php echo $emailErr;?></span>
  </div>
  


  <p><p>
  <div class="form-group">
  Tél *<p></p> <input type="text" name="country" value="<?php echo $country;?>" class="form-control"><p></p>
  <span class="error"> <?php echo $countryErr;?></span>
  </div>
  
  

  <p><p>
  
  <p><p>
  <div class="form-group">
  Code postal<p></p> <input type="text" name="country" value="<?php echo $country;?>" class="form-control"><p></p>
  <span class="error"> <?php echo $countryErr;?></span>
  </div>
  
  

  <p><p>
  <div class="form-group">
  Votre message *<p></p> <textarea name="comment" rows="5"  class="form-control"><?php echo $comment;?></textarea>
  <p><p>
  
  </div>
  
  
  <span class="error"> <?php echo $genderErr;?></span>
  <p><p>
  <div class="form-group">
  </div>
  <input type="submit" id=envoyer class="form-control" name="submit" value="Envoyer">
</form>
</form>
</div>
</div>
</div>
  </div>
</div>
</div>
</form>
</div>



        </div>
        <div class="row">
            <div >
                <img class="image3" src="localhost/wordpress-5.3.2/premierWordpress/wp-content/themes/cms/img/2600x700_01.jpg" alt="lit">
            </div>
            <div class="col-7">
                <div>
                    <h2>
                        <strong>
                            10% sur vos prochains achats ?
                        </strong>
                    </h2>
                </div>
                <div>
                    Ma wishlist
                </div>

                <div>
                    <h2>
                        <strong>
                            Rendez-nous visite ! 
                        </strong>
                    </h2>
                </div>

                <div>
                    <h6>
                        <strong>
                            Google map 
                        </strong>
                    </h6>
                </div>

                <div>
                    <h6>
                        <strong>
                            Horaires 
                        </strong>
                    </h6>
                </div>

                <div>
                    <p>Lundi > dimanche :</p>
                    <p>(Fermé le mardi)</p>
                    <p>10h > 18h30</p>
                </div>

                
            </div>
        </div> 
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7">
                <div class="jumbotron"></div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                
            </div>
            <div class="col-6">
                
            </div>
            <div class="col-6">
                
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                
            </div>
            <div class="col-4">
                
            </div>
            <div id="black" class="col-4">
                <p>Horaires</p>
                <p> Lundi > dimanche : (Fermé le mardi)</p>
                <p>10h > 18h30</p>
            </div>
        </div>
        <?php get_footer(); ?>
    </div>
</body>
</html>