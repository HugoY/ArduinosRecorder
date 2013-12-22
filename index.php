<?php
require_once __DIR__.'\recorder\Recorder.php';

$address = "192.168.2.1"; //172.20.82.172
$port = 100;

echo "Demarage du serveur d'enregistrement des arduinos à l'adresse $address sur le port $port\n";

$serveurEnregistrement = new Recorder();
$serveurEnregistrement->init($address, $port);
$serveurEnregistrement->run();

echo "Cette ligne ne s'affiche jamais car le serveur est dans une boucle infinie\n";