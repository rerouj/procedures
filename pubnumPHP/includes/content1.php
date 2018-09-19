<!-- formulaire de cofiguration -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Configuration</title>
  <link rel="stylesheet" href="css/style_procedure.css">
</head>
<body>
    <div id="container">
        <div id="box">
            <p class="titre">Formulaire de configuration </br>(*champ non requis): </p>
            <form action="feu.php" method="post">
                <p class="form_titre">* INSTITUTION: </p>
                <input type="text" name="institution" class="conf_input">
                <p class="form_titre">* ADRESSE: </p>
                <input type="adresse" name="adresse" class="conf_input"></br>
                <!-- 
                <p class="form_titre">* MAIL: </p>
                <input type="text" name="mail" class="conf_input"></br>
                -->
                <p class="form_titre">CHOISIR UN SITE: </p>
                <select name="menu" id="sel_menu">
                    <option value="2">Administrations</option>
                    <option value="3">Ecoles</option>
                    <option value="4">Hôpitaux</option>
                    <option value="5">Camping</option>
                    <option value="6">Garderie</option>            
                    <option value="7">Hôtel</option>                        
                </select></br>
                <input type="submit" value="Envoyer" class="form_button">
                <input type="hidden" name="alert" value="off">
            </form>
        </div>
    </div>
</body>
</html>