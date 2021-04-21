# Mes-Heures

Mes Heures est un projet réalisé en PHP, accompagné des packages AltoRouter et AltoDispatcher, et en JavaScript avec la librairie MomentJs.

Le but est d'obtenir un tableau récapitulatif des heures effectuées durant un semaine. Le projet, initialement pensé pour assiter une assitante maternelle
lors de sa facturation, peut être transposable à plusieurs corp de métier ( par exemple: feuille de pointage).

## Installation

__1) cloner le repo :__ 

en http :
```bash
 git clone https://github.com/max-ans/mes-heures.git
```
en ssh :
```bash
 git clone git@github.com:max-ans/mes-heures.git
```
__2) se rendre dans le repo :__
```bash
cd mes-heures
```
__3) Installer les dépendances :__
```bash
composer install
```
__4) Créer la base de données et son fichier d'accès :__

a) A l'aide d'un sytème de gestion de base de données, créer une base de données nommée `mes_heures`.

b) Copier le contenu du fichier `database.sql` disponible dans le dossier `doc\sql\database.sql`
   à la racine du projet, et l'executer dans le SGBDR pour la base de donnée précédemment créée.

c) Une fois la BDD créée, créer un fichier nommé `config.ini` à la racine du dossier `app` du projet.

d) Dans `config.ini`, copier le contenu suivant :

```php
DB_HOST=
DB_NAME=
DB_USERNAME=
DB_PASSWORD=
```

Et complétez ce fichier avec vos information de connection.

__5) Lancer l'application :__

Dans le dossier où le projet a été cloné :
```bash
php -S localhost:8000 -t public
```
