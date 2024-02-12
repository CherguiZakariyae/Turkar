<?php

include_once("Action.php");
$action = new Action();
$locations = $action->getService()->getPDOLocation()->getAllLocations();
