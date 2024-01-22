<div class="py-5 text-white bg-primary text-center">
    <div class="container">
      <div class="row">
       <div class="col-md-8">



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

<?php 

@$slider_img = fopen("img_slider.txt", "r");

echo '<div id="slider">';

while (!feof($slider_img)) {

  $nb_image = fgets($slider_img);

  if (!empty($nb_image)) {
    echo '<div class="carousel-item active">
      <img class="d-block w-100" src="'.$nb_image.'">
    </div>';
  }
}

fclose($slider_img);
echo "</div>";

?>


    

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





        <!--
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class='active'></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>  </ol>
  <div class="carousel-inner">

<?php 

@$slider_img = fopen("img_slider.txt", "r");


//$somme = 0;

while (!feof($slider_img)) {

  $nb_image = fgets($slider_img);

  if (!empty($nb_image)) {
    echo "<div class='carousel-item'>
    <img src='$nb_image' class='d-block w-100'>
    </div>";
  }
}

fclose($slider_img);
/*
$tour = 0;

$slider_img = fopen("img_slider.txt", "r");

while (!feof($slider_img)) {
  $tour++;
  $nb_image = fgets($slider_img);
  if (!empty($nb_image)) {
    echo '<span class="dot" onclick="currentslide('.$tour.')"></span>';
  }
}*/

?>

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
-->


</div>
 <div class="col-md-4">



 <form method='post' action='admin.php'>
   
    	<label>Utilisateur</label><br>
          <input type="text"  id="la" name="uti"  required><br>
         <label>Mot de passe</label><br>
          <input type="text" id="la" name="pw"  required><br>
          <input type="submit" class="btn btn-secondary" name="action" value="Se connecter">

          </form>
 </div>
      </div>
    </div>
  </div>

  <div class="py-5 text-white bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table table-inverse table-bordered">
            <thead>
              <tr>
                <th>Article à la une</th>
                
              </tr>
            </thead>
            <tbody>

            <tr><td><?php 

          @$final_titre = fopen("titre.txt", "r");
          @$final_contenu = fopen("contenu.txt", "r");
          @$final_image = fopen("img.txt", "r");

          @$titre = $_POST["titre"];
          @$contenu = $_POST["contenu"]; 
          @$image = $_POST["image"]; 
 
          while (!feof($final_titre)) {
             $titre = (fgets($final_titre));

             $image = (fgets($final_image));

             $contenu = (fgets($final_contenu));

              echo "<h1>".$titre."</h1><br>";
              echo "<p>".$contenu."</p><br>";
              echo "<img src='img_galerie/".$image."' width='600' height='300' border='2' />";
          }

            ?> 
        </td></tr></tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>