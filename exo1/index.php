<?php
function chaines($noms)
 {
   return $noms;
 }?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <p>Bonjour
   <?php
   $nom = chaines('Igor');
  echo $nom;
  ?>
  et
 <?php
 $nom = chaines('Grichka');
echo $nom;
?>
</p>
<p>
<?php
$nom = chaines('Igor l\'alcoolique');
echo $nom;
?>
</p>
  </body>
</html>
