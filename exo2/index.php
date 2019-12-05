<?php
function chaines($noms,$name,$nom){
return $noms . $name . $nom;
};
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>
    <p><?php  echo chaines('Igor',' et',' Grichka')?></p>
  </body>
</html>
