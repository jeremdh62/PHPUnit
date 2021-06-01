# PHP Unit

PHP Unit sert à tester du code PHP, ici on va voir comment créer un projet PHP avec des tests unitaires.

## Installation

On utilise [composer](https://getcomposer.org/) installer PHP Unit.

### Création d'un projet

```bash
composer init
```

```bash
composer require --dev phpunit/phpunit
```

### Utiliser ce projet 

```bash
composer install
```

## Usage

### Création d'un projet

 On créer un dossier "src" où se trouvera le code et un dossier "tests" où il y aura tous les tests

Dans le "composer.json" il faudra ajouter :

```json
    "autoload": {
        "psr-4": {
            "App\\":"src/"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "App\\Tests\\":"tests/"
        }
    },
```

Ensuite il faut faire la commande suivante :

```bash
composer dump-autoload -o
```

Pour paramétrer phpunit il faudra créer un fichier phpinit.xml.dist :

```xml
<?xml version="1.0" encoding="UTF-8"?>

<phpunit colors="true" testdox="true">
     
</phpunit>
```

### Lancement des tests

Maintenant pour lancer les tests il  faut aller à la racine du projet :
```bash
.\vendor\bin\phpunit.bat tests
```

## License
[MIT](https://choosealicense.com/licenses/mit/)