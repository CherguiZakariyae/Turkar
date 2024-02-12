<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Trip.php");
$action = new Action();
$enable = 0;
if ($_POST['enable']) $enable = 1;
$var = new Trip(0, $_SESSION['idUser'], $_POST['startLocationId'], $_POST['endLocationId'], $_POST['departureTime'], $_POST['availableSeats'], $_POST['status'], $_POST['price'], $enable, date('d-m-y'));
$newIdTrip = $action->getService()->getPDOTrip()->addTrip($var);
