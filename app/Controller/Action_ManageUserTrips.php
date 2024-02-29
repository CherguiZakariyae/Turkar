<?php

include_once("Action.php");
$action = new Action();
$list = $action->getService()->getAllTripsByUser($_SESSION["idUser"]);
