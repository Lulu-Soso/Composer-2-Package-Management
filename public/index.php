<?php
/* C'est lui qui va se charger d'importer tes classes.
Il est nécessaire de require le fichier autoload.php 
dans ton index.php, pour pouvoir utiliser les namespaces.*/

require_once __DIR__ . '/../vendor/autoload.php';


$hello = new App\Wcs\Hello();
echo $hello->talk() ." ". "(1st exercice autoload)";
echo "<br>";

$sayHello = new HelloWorld\SayHello();
echo $sayHello->world() ." ". "(2nd exercice Package Management)";



