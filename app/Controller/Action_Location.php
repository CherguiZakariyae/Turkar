<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Color.php");
$action = new Action();
$enable = 0;
if ($_POST['enable']) $enable = 1;
$var = new Color($_POST['id'], $_POST['name'], $enable, date('d-m-y'), $_SESSION['LDAPUserUid'], date('d-m-y'), $_SESSION['LDAPUserUid']);
$action->getService()->getPDOColor()->editColor($var);
$_SESSION['idColor'] = urlencode($var->getId());
include_once("Model/C_Log.php");
$log = New Log(0,"Edit","Color",$var->getName(),$var->getId(),$_SESSION['LDAPUserUid'],"","",date('Y-m-d H:i:s'),date('Y-m-d H:i:s', time() + 30 * 86400));
$action->getService()->getPDOLog()->addLog($log);