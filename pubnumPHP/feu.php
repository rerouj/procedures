<?php
//Page principal de la simulation
$hid = $_POST['hid'];
  if($_SERVER[REQUEST_URI] == "/pubnumPHP/feu.php" || $_SERVER[REQUEST_URI] == "/php/feu.php?hid={$hid}") {
    // la page va chercher les modules selon les informations reçues par le serveurs.
    // si le forumulaire menu à été valider et rempli alors charge le module en charge
    // desp rocédure d'urgence
    if($_POST['menu']){
        include 'includes/content2.php';
    }elseif($_POST['hid']){
        include 'includes/content2.php';
    }else{
    //autrement charge le module avec le formulaire de configuration 
        include 'includes/content1.php';
    }
  } else {
    echo 'erreur 404';
  }

?>
