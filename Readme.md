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

- [ ] Corriger dans navbar Professionel -> Restaurant
- [ ] Réduire et remonter le logo
- [ ] Remonter les éléments
- [ ] Recenter l'ensemble de la page.
- [X] Réduire les espacements au niveau de la navbar 
- [X] Remonter la nav bar