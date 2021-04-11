# Package Management

Challenge 2

Installer et utiliser un package externe
Reprends ton architecture créée lors du premier exercice.
L'arborescence des dossiers doit être la suivante :

public/
    index.php
src/
    Wcs/
        Hello.php
vendor/

Le fichier index.php est l'entrée de l'application.
Dans le dossier /vendor, se trouveront les librairies installées par Composer.
Il existe sur Packagist, une librairie qui s'appelle ehime/hello-world. Tu dois l'installer et l'utiliser dans ton index.php.
Tu devras utiliser la méthode statique world() de la classe SayHello du package nouvellement installé pour afficher 'Hello World, Composer!'.

Critères de validation

Ton code est sur un repo personnel sur Github.
Ton arborescence correspond à celle demandée dans le challenge.
Ton dossier vendor contient la librairie : ehime/hello-world.
Ton fichier index.php affiche 'Hello World, Composer!'.


# composer-Autoload

Challenge 1

Tu dois créer une architecture minimaliste de projet.
L'arborescence des dossiers doit être la suivante :

public/
    index.php
src/
    Wcs/
        Hello.php
        
        
le fichier index.php est l'entrée de l'application.
le fichier Hello.php contient une classe nommée Hello qui devra posséder une méthode talk. Cette dernière devra retourner "Hello World !".

Attention, cette classe doit se trouver dans le namespace App\Wcs !

Critères de validation

Ton code est sur un repo personnel sur github.
Ton arborescence correspond à ce qui a été demandé dans le challenge
Ton composer.json contient une section autoload avec la déclaration de ton namespace racine App\
Ton fichier index.php instancie et utilise un objet App\Wcs\Hello
