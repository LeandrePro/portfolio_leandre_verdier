<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css"> </head>

<body>


    <?php

     @$uti = $_POST["uti"]; 
     @$pw = $_POST["pw"]; 
     @$marche = fopen("uti.txt", "r");
     @$marche2 = fopen("mdp.txt", "r");
     @$verif = (fgets($marche));
     @$verif2 = (fgets($marche2));




    if ($uti == $verif AND $pw == $verif2) // Si le mot de passe est bon
    {

         ?>



         <form method="post" action="diaporama.php">

<div class="py-5 text-white bg-primary text-center">
    <div class="container">
      <div class="row">
       <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1" ></li><li data-target="#carouselExampleIndicators" data-slide-to="2" ></li><li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">


    <img class="d-block w-100" src="img_galerie/trafalgar_low_grand.jpg" alt="test">
  </div>
  <div class="carousel-item ">
    <img class="d-block w-100" src="img_galerie/one_piece_grand.jpg" alt="test">
  </div>
  <div class="carousel-item ">
    <img class="d-block w-100" src="img_galerie/tokyo_ghoul_grand" alt="test">
  </div>
  <div class="carousel-item ">
    <img class="d-block w-100" src="img_galerie/konosuba_grand.jpg" alt="test">
  </div> 
</div>



  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
 <div class="col-md-4">
 <form method="post" action="diaporama.php">
          <div class="form-group"> <label>Utilisateur</label>
          <input type="text" class="form-control" name="uti"  required> </div>
          <div class="form-group"> <label>Mot de passe</label>
          <input type="text" class="form-control" name="pw"  required> </div>
          <input type="submit" class="btn btn-secondary" name="action" value="Se connecter">
          </form>
 </div>
      </div>
    </div>
  </div>

                <div class="py-5 text-white bg-secondary">
                <div class="container">
                  <div class="row">
                    
                    <div class="col-md-6">
                      <h2>Inscrire un nouvel article</h2>
                      <form method="post" action="enregistrer.php">
                        <div class="form-group"> <label>Titre</label>
                        <input type="text" class="form-control" name="titre"  placeholder="Votre titre" required> </div>
                        <div class="form-group">
                        <label for="Textarea">Votre contenu</label> <textarea class="form-control" name="contenu"  rows="3" placeholder="Votre contenu" required></textarea> </div>
                        <div class="form-group"> <label>Sélectionner votre image</label>
                        <select name="image"> 
                        <option value="konosuba_grand.jpg">Konosuba.jpg</option><option value="one_piece_grand.jpg">one_piece.jpg</option><option value="sword_art_online_grand.jpg">sword_art_online.jpg</option><option value="tokyo_ghoul_grand.jpg">tokyo_ghoul.jpg</option><option value="trafalgar_low_grand.jpg">trafalgar_low.jpg</option><option value="trio_boy_grand.jpg">My_hero.jpg</option> </select>
                        </div>
                        <div class="form-group">
                        <p><input type="submit" class="btn" name="action" value="Envoyer"></p>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-6">
                      <h2>Cocher les images à afficher dans le slider</h2>
                      
                        <div class="form-group">
                        

                        <form class="slider" method="post" action="enregistrer_slider.php">
                        <?php
                        $nb_image = -1;
                        @$repertoire = opendir("img_galerie");
                        while ($fichier = readdir($repertoire)) {
                          if ($fichier !="." and $fichier !=".." and $fichier != "Thumbs.db") {
                            echo '<input type="checkbox" name="img_slider'.$nb_image.'" value="img_galerie/'.$fichier.'">'.$fichier.'<br>';
                          }
                          $nb_image++;
                        }
                        echo '<input type="submit" class="btn " name="action" value="Activer images">
                        <input type="hidden" name="nb_image" value="'.$nb_image.'">
                        <input type="hidden" name="fichier" value="fichier">';
                        ?>


                        <p></p>

                        </div>
                        </form>
                      
                    </div>
                  </div>
                </div>
              </div>
              
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</form> 

<?php
    }
    else {
      echo "<p>Mot de passe incorect</p>";
    }
    
    ?>

</body>
</html>
