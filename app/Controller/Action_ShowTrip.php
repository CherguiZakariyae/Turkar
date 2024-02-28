<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
$action = new Action();
if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = $_SESSION['idLocation'];
}
$var = $action->getService()->getPDOTrip()->getTripById($id);
$locations = $action->getService()->getPDOLocation()->getAllLocations();
