# composer-Autoload

Challenge

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
