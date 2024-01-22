

<?php 

$titre = strip_tags($_POST["titre"]) ;
$final_titre = fopen("titre.txt", "a");
fwrite($final_titre, "$titre\r\n");
fclose($final_titre);

$contenu = strip_tags($_POST["contenu"]) ;
$final_contenu = fopen("contenu.txt", "a");
fwrite($final_contenu, "$contenu\r\n");
fclose($final_contenu);

$image = strip_tags($_POST["image"]) ;
$final_image = fopen("img.txt", "a");
fwrite($final_image, "$image \r\n");
fclose($final_image);

echo '<form method="post" action="content.php">
<input type="hidden" name="titre" value="$titre">
<input type="hidden" name="contenu" value="$contenu"> 
<input type="hidden" name="image" value="$image"> 
</form>';

?>

<a href="diaporama.php">Retour</a>