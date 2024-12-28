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

- [x] Rajouter Scultpeur de Ballon en desous de Magicien
- [ ] Corriger la page d'acceuil
- [x] Changer le bouton "Contact" j'aimerais qu'il sois blanc et quand l'animations du blac depasse d'un pixel le texte change en noir.
- [ ] Changer le bouton "Mention Légale"  qui sois identique que le bouton "Contact"
- [x] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous
 ![capture](/public_html/Image/test.jpg)
 - [x] Mettre un fond noir derrierre la video avec un fond blanc pour faire un style de cadre a la video
 - [ ] Metttre sur le côtes de la vidéo le bouton contact avec les reseaux sociaux
 - [x] Remplir le nouveau spectacle
 - [ ] rajouter un bouton contact dans spectacle show et dans spectacle
 - [x] Faire la page Mentions légale 
 - [ ] Stylisée Mentions Légale
 - [ ] Dégrossir les slider dans spectacle / colléctivité
 - [x] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous
 - [ ] Mettre le footer partout avec et identique voir ci dessous (l'idéake et d'alligner et une margin entre les éléments)
 ![capture](/public_html/Image/footer.jpg)
 - [ ] Mettre une marge entre la page et le footer
 - [ ] Dans le formulaire de contact remonter la barre d'écriture "Entrez votre message"
 - [ ] Rajouter une case à cochez au dessus du bouton envoyer dans le formulaire de contact et mettre un texte à côté " J'acceptez notre politique des données personelles." (si non valider envoyer une erreur pour casse obligatoire.)
  - [ ] Faire un rangement des photos par catégorie.
  ![capture](/public_html/Image/capture.jpg)
  - [x] Terminer le slider de droite à gauche.

  ## Todo des correction responsive.

    ![capture](/public_html/Image/resp.jpg)
   - [ ] Remonter le burger
   - [ ] Centrer le menu déroulant et les éléments.
   - [ ] Mettre une ligne qui délimite le haut de page à la page en question
   - [ ] Le menue déroulant ne s'affiche pas au dessus de la bare rouge (barre de délimitations)
   - [ ] quand le menue est ouvert prelonger le gris tant que le menue n'est pas fermer
   - [ ] Passer en responsive bien avant 
   




