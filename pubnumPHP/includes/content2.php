<?php
    //module principal

    //stock les informations reçues du formulaire de configuration
    $value = $_POST['menu'];
    $hid = $_POST['hid'];
    $adresse = $_POST['adresse'];
    $institution = $_POST['institution'];

    settype($value, 'int');
    settype($hid, 'int');

    //chargement du fichier XML
    if (file_exists('procedures.xml')) {
        $xml = simplexml_load_file('procedures.xml');
    } else {
        exit('Echec lors de l\'ouverture du fichier procedures.xml.');
    }
    $x =  $xml[0]->sites->site[$value]->situation[0]->procedure->etape;
    //echo $hid, $value;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feu (<?php echo $xml[0]->sites->site[$value]['lieu'] ?>)</title>
    <link rel="stylesheet" href="css/style_procedure.css">
</head>
<body>
    <?php
        //Le module propose une page de veille, si la personne clique sur le bouton d'urgence alors
        //la page charge le module qui contient la procédure d'urgence 
        if($_POST['institution']||$_POST['adresse']){
            if($_POST['alert']=='on'){
                include 'includes/main_form.php';    
            }elseif($_POST['alert']=='off'){
                include 'includes/veille_form.php';
            }
        }else{
            if($_POST['alert']=='on'){
                include 'includes/main_form.php';    
            }elseif($_POST['alert']=='off'){
                include 'includes/veille_form.php';
            }
        } 
    ?>
    <a href="http://localhost:8888/pubnumPHP/feu.php">réinitialiser</a>
</body>
</html>