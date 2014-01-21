<?php

require_once __DIR__ . '\recorder\Recorder.php';
// index.php [ipAdresse (optional)] [port (optional)]

if (isset($argv[1]))
  $address = $argv[1];
else
  $address = getHostByName(getHostName());

if (isset($argv[2]))
  $port = $argv[2];
else
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