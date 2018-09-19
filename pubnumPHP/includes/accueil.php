<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <style>
        div{
            display: flex;
            width:950px;
        }
        p{
            width:33%;
            text-align:justify;
            padding:10px;
            font-family:'Open Sans', sans-serif, Arial, sans-serif;
        }
        h1{
            font-family:'Open Sans', sans-serif, Arial, sans-serif;
            margin: 0px;
            margin-top:20px;
            padding:0px;
        }
        .bouton{
            font-family:'Open Sans', sans-serif, Arial, sans-serif;
            font-size:20px;
            margin-top:28px;
            margin-left:20px;
            width:200px;
            height:30px;
            background-color: red;
            color:white;
        }
        .bouton:hover{
            font-family:'Open Sans', sans-serif, Arial, sans-serif;
            font-size:20px;
            margin-top:28px;
            margin-left:20px;
            width:200px;
            height:30px;
            background-color: pink;
            color:black;
        }
    </style>
</head>
<body>
    <div>
        <h1>PROCEDURE D'URGENCE: </h1>
        <form action="feu.php" method="post">
            <input type="submit" value="ENTRER" class="bouton">
        </form>
    </div>
    <div>
        <p>
        Bienvenu! 
        Cette page contient un travail experimental consacré à la numérisation et à l'implémentation de procédures d'urgence sur des technologies numériques comme les smartphones, les tablettes et autres appareils connectés. L'idée est la suivante : On numérise des procédures dans des documents comme le XML ou le JSON, ces procédures, on les garde, par exemple, sur un serveur ce qui permet de les centraliser et de les tenir facilement à jour. Puis, on diffuse ces différents documents chez les utilisateurs, par exemple sur un navigateur web grâce à un langage comme le php ou le javascript. Les procédures prennent du côté utilisateur la forme d'une marche à suivre, pas à pas, interactive. L'utilisateur en situation de détresse peut se référer au guide et faire les démarche nécessaires pour assurer sa sécurité et celle de ceux avec qui ils se trouve.
        Pour ce travail, j'ai numérisé librement les procédures d'urgence prescrites par l'Etablissement d'Assurance Contre les Incendies (ECA) et j'en ai proposé une implémentation dans un format web. La manière dont les étapes se présentent à l'utilisateur est enrichie de mes suggestions. 
        </p>
        <p>
        Si j'ai modifié le contenu des étapes, c'est notamment parce que les formats numériques permettent la réalisation d'actions simultanées dont certaines peuvent être discrètes, comme l'envoi d'un mail aux services de police, ou l'obtention et l'affichage de l'adresse de la personne en détresse. 
        Dans une version plus aboutie, les éléments relatifs aux informations qui concernent la personne et à la communication de ces informations seront séparées des actions que celle-ci devra exécuter. En outre, il faudrait que l'ensemble des procédures d'une association comme l'ECA soit centralisées sur un serveur ; on pourrait imaginer que les utilisateurs aient un compte lié à l'ECA et que les informations fournies sur ce compte permette de pré-configurer les différentes procédures d'urgences selon le lieu de l'assuré, et ses coordonnées etc. Le formulaire de configuration que j’ai inséré au début, ainsi que le dispositif technique du prototype va d’ailleurs dans ce sens. Dans l'idéal, le formulaire devrait recueillir d’autres informations comme le numéro de l’assuré, le nombre de personnes dans l’immeuble etc. 
        </p>
        <p>
        A cela s'ajoute la possibilité d'interphaser des capteurs avec le lancement d'une procédure d’urgence. En effet, il est tout à fait concevable d’imaginer un système qui lance une procédure d'urgence à la suite d'une forte secousse ou lorsqu’un capteur détecte la présence d'une quantité importante de fumée. Dans ce travail expérimental, je pose les bases formelles d'un tel projet : je propose une numérisation des procédures d'urgence classiques en cas d'incendie. Cette numérisation peut être consultée sur le lien suivant:
        <a href="http://tannhauser.ch/pubnum/php/procedures.xml"> procedures.xml </a> 
        En cliquant sur le bouton suivant vous serez accueilli par un formulaire de configuration. Ce formulaire est une illustration ; il donne à voir comment réagissent les pages lorsque les informations one été fournies ou non. Les infos envoyées ne sont pas stockées et mon prototype ne place aucun cookie sur votre navigateur. Vous devez cependant choisir le lieu pour lequel vous souhaitez lancer la simulation. Ce travail conjugue plusieurs technologies web : le HTML/CSS, le javascript, le PHP et le XML. 
        Bonne exploration et soyez prudent !

        </br>Renato Diaz (renato.diaz@unil.ch)
        </p>
    </div>
</body>
</html>