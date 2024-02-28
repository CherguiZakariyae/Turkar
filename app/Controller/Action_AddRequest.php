<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Request.php");
$action = new Action();
$var = new Request(0, $_POST['idTrip'], $_SESSION['idUser'], "Waiting", $_POST['pets'], $_POST['message'], 1, date('d-m-y'));
$newIdRequest = $action->getService()->getPDORequest()->addRequest($var);
