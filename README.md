# Procedures d'urgence :

Bienvenu! Cette page contient un travail experimental consacré à la numérisation et à l'implémentation de procédures d'urgence sur des technologies numériques comme les smartphones, les tablettes et autres appareils connectés. L'idée est la suivante : On numérise des procédures dans des documents comme le XML ou le JSON, ces procédures, on les garde, par exemple, sur un serveur ce qui permet de les centraliser et de les tenir facilement à jour. Puis, on diffuse ces différents documents chez les utilisateurs, par exemple sur un navigateur web grâce à un langage comme le php ou le javascript. Les procédures prennent, du côté utilisateur, la forme d'une marche à suivre, pas à pas, interactive. L'utilisateur en situation de détresse peut se référer au guide et faire les démarches nécessaires pour assurer sa sécurité et celle de ceux avec qui il se trouve. Pour ce travail, j'ai numérisé librement les procédures d'urgence prescrites par l'Etablissement d'Assurance Contre les Incendies (ECA) et j'en ai proposé une implémentation dans un format web. La manière dont les étapes se présentent à l'utilisateur est enrichie de mes suggestions.

![alt text](https://github.com/rerouj/procedures/blob/master/screenshot/Screen%20Shot%202018-02-20%20at%2018.10.24.png)

# Usage :

Le projet ne nécessite aucune infrastructure particulière pour être testé : il a été développé en JS et PHP pur. Pour faire fonctionner une version de ce travail il faut :

  1) cloner le dossier github, 
  2) le placer dans un dossier server 
  3) lancer la home page depuis une adresse local.

# A propos du code :

Ce travail a été réalisé en php et XML mais une version statique en javascript est aussi disponible. Un tel travail mériterait un développement plus approfondi avec une technologie comme React.js (client side rendering) ou Angular.js en combinaison avec PHP (server side rendering) et un format de données alternatif comme le JSON pour l'accès à des ressources via une API. Il serait aussi tout à fait réalisable avec un framework comme Next.js ou même Meteor.js pour une version prototype.

# Context :

Ce travail a été réalisé dans le cadre du cours "publication numérique" offert à l'Université de Lausanne par Isaac Pante. "Procédures" est placé sous liscence Unil

Renato Diaz (renato.diaz@unil.ch)
