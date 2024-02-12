<?php

include_once("Action.php");
$action = new Action();
$list = $action->getService()->getPDOVehicle()->getAllVehiclesByUser($_SESSION["idUser"]);
