<?php 

@$slider_img = fopen("img_slider.txt", "w");
fwrite($slider_img, "");
fclose($slider_img);

@$slider_img = fopen("img_slider.txt", "a");
@$nb_image = $_POST["nb_image"];

for ($i=1; $i < $nb_image; $i++) { 
	@$fichier = $_POST["img_slider$i"];
	if (!empty($fichier)) {
		fwrite($slider_img, "$fichier\r\n");
	}
}
fclose($slider_img);
var_dump($_POST);
?>

<a href="diaporama.php">Retour</a>