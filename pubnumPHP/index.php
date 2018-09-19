<?php

  //page d'acueil: on vérifie les urls
  if($_SERVER[REQUEST_URI] == "/pubnumPHP/index.php"||$_SERVER[REQUEST_URI] == "/pubnumPHP/"){
    //Si l'URL est valide on appel la page accueil
    include 'includes/accueil.php';
  } else {
    echo 'erreur 404';
  }

?>
