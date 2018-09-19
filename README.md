# Procedures d'urgence :

Bienvenu! Cette page contient un travail experimental consacré à la numérisation et à l'implémentation de procédures d'urgence sur des technologies numériques comme les smartphones, les tablettes et autres appareils connectés. L'idée est la suivante : On numérise des procédures dans des documents comme le XML ou le JSON, ces procédures, on les garde, par exemple, sur un serveur ce qui permet de les centraliser et de les tenir facilement à jour. Puis, on diffuse ces différents documents chez les utilisateurs, par exemple sur un navigateur web grâce à un langage comme le php ou le javascript. Les procédures prennent, du côté utilisateur, la forme d'une marche à suivre, pas à pas, interactive. L'utilisateur en situation de détresse peut se référer au guide et faire les démarches nécessaires pour assurer sa sécurité et celle de ceux avec qui il se trouve. Pour ce travail, j'ai numérisé librement les procédures d'urgence prescrites par l'Etablissement d'Assurance Contre les Incendies (ECA) et j'en ai proposé une implémentation dans un format web. La manière dont les étapes se présentent à l'utilisateur est enrichie de mes suggestions.

![alt text](https://github.com/rerouj/procedures/blob/master/screenshot/Screen%20Shot%202018-02-20%20at%2018.10.24.png)

# Remarque general :

Si j'ai modifié le contenu des étapes, c'est parce que les formats numériques permettent la réalisation d'actions simultanées dont certaines peuvent être discrètes, comme l'envoi d'un mail aux services de police, ou l'obtention et l'affichage de l'adresse de la personne en détresse. Dans une version plus aboutie, les éléments relatifs aux informations qui concernent la personne et à la communication de ces informations seront séparées des actions que celle-ci devra exécuter. En outre, il faudrait que l'ensemble des procédures d'une association comme l'ECA soit centralisées sur un serveur. On pourrait alors imaginer que les utilisateurs aient un compte lié à l'ECA et que les informations fournies sur ce compte permettent de pré-configurer les différentes procédures d'urgences selon les coordonnées de l'assuré et pour tous les biens qu'il possède. Le formulaire de configuration que j’ai inséré au début, ainsi que le dispositif technique du prototype vont d’ailleurs dans ce sens. Dans l'idéal, le formulaire devrait recueillir d’autres informations comme le numéro de l’assuré, le nombre de personnes dans l’immeuble, les établissements etc.

A cela s'ajoute la possibilité d'interphaser des capteurs avec le lancement d'une procédure d’urgence. En effet, il est tout à fait concevable d’imaginer un système qui lance une procédure d'urgence à la suite d'une forte secousse ou lorsqu’un capteur détecte la présence d'une quantité importante de fumée. Dans ce travail expérimental, je pose les bases formelles d'un tel projet. En cliquant sur le bouton en haut, vous serez accueilli par un formulaire de configuration. Ce formulaire est une illustration : il donne à voir comment réagissent les pages lorsque les informations one été fournies ou non. Les infos envoyées ne sont pas stockées et mon prototype ne place aucun cookie sur votre navigateur. Vous devez cependant choisir le lieu pour lequel vous souhaitez lancer la simulation. Ce travail conjugue plusieurs technologies web : le HTML/CSS, le javascript, le PHP et le XML. Bonne exploration et soyez prudent ! 

# A propos des technologies :

Ce travail a été réalisé en php mais une version statique en javascript est aussi disponible. Un tel travail mériterait un développement plus approfondi avec une technologie comme React.js (client side rendering) ou Angular.js en combinaison avec PHP (server side rendering). Il serait aussi tout à fait réalisable avec un framework comme Next.js ou même Meteor.js pour une version prototype.

# Context :

Ce travail a été réalisé dans le context du cours "publication numérique" offert à l'Université de Lausanne par Isaac Pante.

Renato Diaz (renato.diaz@unil.ch)
