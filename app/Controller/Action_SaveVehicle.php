<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Location.php");
$action = new Action();
$enable = 0;
if ($_POST['enable']) $enable = 1;
$var = new Location($_POST['id'], $_POST['name'], $enable, date('d-m-y'));
$action->getService()->getPDOLocation()->editLocation($var);
$_SESSION['idLocation'] = urlencode($var->getId());
