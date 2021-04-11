<?php
/* C'est lui qui va se charger d'importer tes classes.
Il est nécessaire de require le fichier autoload.php 
dans ton index.php, pour pouvoir utiliser les namespaces.*/

require_once __DIR__ . '/../vendor/autoload.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();

