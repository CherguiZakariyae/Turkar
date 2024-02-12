<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Vehicle.php");
$action = new Action();
$enable = 0;
if ($_POST['enable']) $enable = 1;
$var = new Vehicle(0, $_SESSION['idUser'], $_POST['name'], $_POST['brand'], $_POST['model'], $_POST['year'], $_POST['plateNumber'], $enable, date('d-m-y'));
$newIdVehicle = $action->getService()->getPDOVehicle()->addVehicle($var);
