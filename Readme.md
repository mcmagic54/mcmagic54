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
### Développement local
Démarrer le server php avec cette commande :
```sh
php -S localhost:8000 -t public_html -c php.ini
```

Si php n'est pas disponible, il peut être installé avec chocolatey:
```sh
choco install php
```

### Déploiement en production
Seuls les dossiers `public_html` et `public_html` doivent être copiés sur le serveur.
Les autres fichiers ne doivent pas s'y trouver. 

## Todo

- [ ] Corriger la page d'acceuil
- [ ] Changer le bouton "Contact" j'aimerais qu'il sois blanc et quand l'animations du blac depasse d'un pixel le texte change en noir.
- [ ] Changer le bouton "Mention Légale"  qui sois identique que le bouton "Contact"
- [ ] Dégrossir au Maximun la page d'acceuil avec le slide qui fais la page comme voir capture ci desous
 ![capture](/public_html/Image/test.jpg)
 - [ ] Mettre un fond noir derrierre la video avec un fond blanc pour faire un style de cadre a la video
 - [x] Remplir le nouveau spectacle
 - [ ] rajouter un bouton contact dans spectacle show et dans spectacle
 - [-] Faire la page Mentions légale 


