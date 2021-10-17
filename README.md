# WEB2021 : Site porfolio

## http://quentin.webdev-cf2m.be/portfolio/public/

### Date de remise, le 22/11/2022 et présentation, le 25/11/2022

- Mise en ligne sur votre espace Web, au plus tard le 22/11/2021
- Versioning du code sur votre GitHub, tout au long du projet

## Objectifs

Créer un `site portfolio`, « site vitrine », en intégrant les compétences acquises pendant les premiers mois de cours de formation qualifiante. Les stagiaires peuvent utiliser ce site pour se présenter et montrer leurs capacités lors d'entretiens chez des futurs employeurs ou pour le stage. Il doit donc contenir des informations « sérieuses » et une présentation soignée qui met en valeur le stagiaire.

## Contenu

### Au minimum :

- un menu de navigation sur chaque page
- une page d'accueil
- une section galerie
- une section liens
- une section tutoriels
- une page de contact (avec formulaire et envoi de mail)
- un accès à l'interface d'administration du site (à réaliser plus tard)
- une section pour le CV (à compléter plus tard)

## Contraintes

- A réaliser en PHP/MySQL (procédural), pour préparer l'ajout de l'interface d'administration
- Avec obligatoirement un « contrôleur frontal », donc toutes les pages passent par la page index.php (exemple : index.php?p=accueil ; index.php?p=galerie ; index.php?p=liens ; ...)
- Il est interdit d'utiliser un CMS de type WordPress, Drupal ou autre.
- Le site doit pouvoir s’afficher sur différents supports (mobile-first / responsive)
- Il est interdit d’utiliser un framework CSS de type Bootstrap

## Accueil

Cette page d’accueil doit présenter brièvement au visiteur ce qu’il va trouver dans le site pour l’inciter à le visiter plus en détails. Le stagiaire doit inclure une `présentation` personnelle qui comprend une `réflexion d’ordre médiatique` dans son approche du métier (à préciser avec Xavier).

## Galerie Photo/Vidéo

Cette section contient les travaux du stagiaire, c'est-à-dire les exercices réalisés au cours, et éventuellement des travaux personnels (graphisme, Web, dessin, vidéo,...) réalisés précédemment dans son parcours professionnel ou dans d’autres formations.Avec possibilité d’agrandir en plein écran les photos et vidéos (module LightBox).

## Liens

Cette section contient une liste de liens vers des sites intéressants pour le web (web design, webdéveloppement, web marketing, référencement,...) que vous pourriez conseiller.

## Tutoriels

Cette section contient `deux tutoriels sur le même sujet` (voir liste des sujets ci-dessous) que le stagiaire a trouvé en ligne. Il faut les `tester`, en faire le `commentaire`, afin d’en sélectionner un `à recommander et un à éviter`,`en argumentant vos choix`.

## Contacts

Cette section permet à un visiteur de laisser un message, via un formulaire en PHP. Il faut envoyer un e-mail prouvant la bonne réception du message.

## Interface d'Administration

Cela permettra, plus tard, après identification, via un CRUD, d'ajouter/modifier/supprimer du contenu facilement, dans la galerie, dans les liens,...Pour le moment, il faut `juste prévoir un lien d’accès` dans l'architecture du site et dans le menu de navigation.

## CV

Section en construction. Elle sera finalisée plus tard dans l’année avec les cours de Corinne.Il faut `juste la prévoir` dans l'architecture du site et dans le menu de navigation.

## Thèmes des tutoriels

A choisir parmi les sujets suivants :

1. HTML5 : Comment créer une image avec zones cliquables (balises <map> et <area>)
2. HTML5: Comment utiliser les API de stockage (localStorage, sessionStorage)
3. HTML5 : Comment dessiner avec l’API de dessin et d’animation (Canvas)
4. HTML5 : Comment utiliser le glisser/déposer (drag’n’drop) natif5. CSS3 : Comment réaliser un menu déroulant avec ou sans Javascript
5. CSS3 : Comment centrer horizontalement et verticalement le contenu d'une page
6. CSS3 : Comment réaliser une galerie photo avec CSS et/ou Javascript (sans jQuery)
7. CSS3 : Montrer les différents types de positionnement en CSS
8. CSS3 : Comment ajouter une police personnalisée (Google Fonts, Dafont,...)
9. CSS3 : Comment utiliser les transformations, transitions et animations avec CSS
10. CSS3 : Comment utiliser les préprocesseurs CSS (LESS, SASS,...)
11. CSS3 : Comment automatiser les tâches (minifier, concaténer, autopréfixer, Grunt, Gulp,...)
12. FTP : Comment mettre un site en ligne avec Filezilla
13. JavaScript : les variables, les types, les opérateurs, les tableaux
14. Javascript : les boucles et les conditions
15. Javascript : les fonctions
16. PHP : les variables, les types, les opérateurs, les tableaux
17. PHP : les boucles et les conditions
18. PHP : les fonctions
19. PHP : Comment envoyer par e-mail le contenu d'un formulaire de contact HTML5
20. SQL : phpMyAdmin, comment créer une base de données, créer des tables et des champs de différents types
21. SQL : les commandes SELECT, INSERT, UPDATE, DELETE
22. SQL : MySQL WorkBench, comment créer un schéma, montrer les relations OneToOne, OneToMany, ManyToMany
23. PHP/MySQL : comment réaliser une page en PHP avec une connection à une base de données via mySQLi
