# Site de MCmagic

## Plan du site

- Accueil
- Collectivité
    - Spectacle-show
    - Initiations
- Particulier
    - Anniversaire Adultes
    - Anniversaire Enfants
    - Mariage
    - Family party
- Professionel
    - Spectacle
    - Close up
    - Restaurant
- Univers Ballons
    - Spectacle de Ballons
    - Stand Ballons
    - Structure en Ballons
- Contact

## Partie technique
### Configuration
Pour faire fonctionner les avis google, il faut remplir le fichier `.env` de cette façon:
```ini
apiKey=clé_api_google
placeId=id_du_lieu
```
### Développement local
Avant de lancer le serveur php, il faut vérifier les chemins du fichier `php.ini`. Par défaut, ils commencent par `C:\tools\php83`, mais selon la version de php ou du système d'exploitation, il convient de les mettre à jour.

Le fichier `cacert.pem` indiqué dans `php.ini` peut-être téléchargé à cette adresse: https://curl.se/docs/caextract.html.

Démarrer le serveur php avec cette commande :
```sh
php -S localhost:8000 -t public_html -c php.ini
```

Si php n'est pas disponible, il peut être installé avec chocolatey:
```sh
choco install php
```

### Déploiement en production
Seuls les dossiers `public_html` et `private_html` doivent être copiés sur le serveur.
Les autres fichiers ne doivent pas s'y trouver. 

## Todo des correction

 - [ ] faire apparaitre le score globle d'étoile de google.

 - [ ] rajouter un lien entre Politiques de confidenctialité (contact) et sous ligner Politiques de Confidentialité + couleur bleu

 - [ ] rajouter un bouton contact dans spectacle show et dans spectacle


  - [x] faire alligner la fiches contact + reseau parralle à la video (plus vers la gauche)
  - [x] Terminer le slider de droite à gauche.
  - [x] Rajouter Scultpeur de Ballon en desous de Magicien
  - [x] Changer le bouton "Contact" j'aimerais qu'il sois blanc et quand l'animations du blac depasse d'un pixel le texte change en noir.
  - [x] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous ![capture](/public_html/Image/test.jpg)
  - [x] Remplir le nouveau spectacle
  - [x] Faire la page Mentions légale 
  - [x] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous
  - [X] Corriger la page d'acceuil
  - [x] Metttre sur le côtes de la vidéo le bouton contact avec les reseaux sociaux
  - [x] Dégrossir les slider dans spectacle / colléctivité
  - [x] Changer le bouton "Mention Légale"  qui sois identique que le bouton "Contact"
  - [x] Stylisée Mentions Légale
  - [x] Mettre le footer partout avec et identique voir ci dessous (l'idéake et d'alligner et une margin entre les éléments)
  - [x] le titre du slider bien le mettre en centrer mais par contre le texte dans la rubrique le mettre en alignement a gauche
  - [x] Mettre une marge entre la page et le footer
  - [x] Rajouter une case à cochez au dessus du bouton envoyer dans le formulaire de contact et mettre un texte à côté " J'acceptez notre politique des données personelles." (si non valider envoyer une erreur pour casse obligatoire.)
  - [x] Dans le formulaire de contact remonter la barre d'écriture "Entrez votre message"


  ## Todo des correction responsive.

![capture](/public_html/Image/resp.jpg)
   - [ ] Remonter le burger
   - [ ] Centrer le menu déroulant et les éléments.
   - [ ] Mettre une ligne qui délimite le haut de page à la page en question
   - [ ] Le menue déroulant ne s'affiche pas au dessus de la bare rouge (barre de délimitations)
   - [ ] quand le menue est ouvert prelonger le gris tant que le menue n'est pas fermer
   - [ ] Passer en responsive bien avant 
   




