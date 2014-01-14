<?php

require_once __DIR__ . '\recorder\Recorder.php';

$address = "172.20.82.164"; //172.20.82.164   192.168.2.1
$port = 100;

echo "Demarage du serveur d'enregistrement des arduinos à l'adresse $address sur le port $port\n";

try {
  $serveurEnregistrement = new Recorder();
  $serveurEnregistrement->init($address, $port);
  $serveurEnregistrement->run();
} catch (Exception $e) {
  echo $e->getMessage();
}

echo "Cette ligne ne s'affiche jamais car le serveur est dans une boucle infinie\n";