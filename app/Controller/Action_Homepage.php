<?php

/**
 * This file will provide its view with the necessary actions during its runtime (such as obtaining information or executing actions).
 * If you want to know the view of each action file, you just need to look it up in the routing file (Router.php).
 */
include_once("Action.php");
$action = new Action();
$tripsCount = $action->getService()->getPDOTrip()->getCountTrips();
$usersCount = $action->getService()->getPDOUser()->getCountUsers();
$vehiclesCount = $action->getService()->getPDOVehicle()->getCountVehicles();
$trips = $action->getService()->getLatestTrips();
