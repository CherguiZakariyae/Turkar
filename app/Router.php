<?php
include_once("Controller/Action.php");


/**
 * 
 * Fichier de routage de notre projet
 * 
 * Contient un table associatif de tous les routes, pour chaque route il y a une View à afficher et action à executer
 */
$router = array(
	'profile' => array( /* Show Login Page */
		'View' => 'Profile',
		'Action' => 'Action_Profile'
	),
	'loginPage' => array( /* Show Login Page */
		'View' => 'Login',
		'Action' => 'Action_LoginPage'
	),
	'login' => array( /* Login */
		'Redirect' => 'homepage',
		//'View' => 'Login',
		'Action' => 'Action_Login'
	),
	'registerPage' => array( /* Show register Page */
		'View' => 'Register',
		'Action' => 'Action_RegisterPage'
	),
	'register' => array( /* register */
		'Redirect' => 'homepage',
		'Action' => 'Action_Register'
	),
	'logout' => array( /* logout */
		'Redirect' => 'loginPage',
		'Action' => 'Action_Logout'
	),
	'loginFailed' => array( /* Show Login Page */
		'View' => 'Login',
		'Action' => 'Action_LoginFailed'
	),
	'loginUnavailable' => array( /* Show Login Page */
		'View' => 'Login',
		'Action' => 'Action_LoginFailed'
	),
	'getLogs' => array( /* Show Login Page */
		'View' => 'ViewLogs',
		'Action' => 'Action_GetLogs'
	),
	'loginUnavailable' => array( /* Show Login Page */
		'View' => 'Login',
		'Action' => 'Action_LoginFailed'
	),
	'homepage' => array( /* Show Acceuil Page */
		'View' => 'Homepage',
		'Action' => 'Action_Homepage'
	),
	'trips' => array( /* Show Trips Page */
		'View' => 'Trips',
		'Action' => 'Action_Trips'
	),
	'manageLocations' => array( /*Locations Management*/
		'View' => 'ManageLocations',
		'Action' => 'Action_ManageLocations'
	),
	'newLocation' => array(
		'View' => 'AddLocation',
		'Action' => 'Action_New'
	),
	'addLocation' => array(
		//'View' => 'AddLocation',
		'Redirect' => 'manageLocations',
		'Action' => 'Action_AddLocation'
	),
	'showLocation' => array(
		'View' => 'ShowLocation',
		'Action' => 'Action_ShowLocation'
	),
	'editLocation' => array(
		'View' => 'EditLocation',
		'Action' => 'Action_ShowLocation'
	),
	'saveLocation' => array(
		'Redirect' => 'manageLocations',
		'Action' => 'Action_SaveLocation'
	),
	'deleteLocation' => array(
		'Redirect' => 'manageLocations',
		'Action' => 'Action_DeleteLocation'
	),
	'manageVehicles' => array( /*Vehicles Management*/
		'View' => 'ManageVehicles',
		'Action' => 'Action_ManageVehicles'
	),
	'newVehicle' => array(
		'View' => 'AddVehicle',
		'Action' => 'Action_New'
	),
	'addVehicle' => array(
		//'View' => 'AddVehicle',
		'Redirect' => 'manageVehicles',
		'Action' => 'Action_AddVehicle'
	),
	'showVehicle' => array(
		'View' => 'ShowVehicle',
		'Action' => 'Action_ShowVehicle'
	),
	'editVehicle' => array(
		'View' => 'EditVehicle',
		'Action' => 'Action_ShowVehicle'
	),
	'saveVehicle' => array(
		//'View' => 'EditVehicle',
		'Redirect' => 'manageVehicles',
		'Action' => 'Action_SaveVehicle'
	),
	'deleteVehicle' => array(
		'Redirect' => 'manageVehicles',
		'Action' => 'Action_DeleteVehicle'
	),
	'newRequest' => array(
		//'View' => 'AddVehicle',
		'View' => 'AddRequest',
		'Action' => 'Action_New'
	),
	'addRequest' => array(
		//'View' => 'AddTrip',
		'Redirect' => 'manageTrips',
		'Action' => 'Action_AddRequest',
	),
	'manageTrips' => array( /*Trips Management*/
		'View' => 'Trips',
		'Action' => 'Action_Trips'
	),
	'newTrip' => array(
		'View' => 'AddTrip',
		'Action' => 'Action_NewTrip'
	),
	'addTrip' => array(
		//'View' => 'AddTrip',
		'Redirect' => 'trips',
		'Action' => 'Action_AddTrip'
	),
	'showTrip' => array(
		'View' => 'ShowTrip',
		'Action' => 'Action_ShowTrip'
	),
	'editTrip' => array(
		'View' => 'EditTrip',
		'Action' => 'Action_ShowTrip'
	),
	'saveTrip' => array(
		'Redirect' => 'manageTrips',
		'Action' => 'Action_SaveTrip'
	),
	'deleteTrip' => array(
		'Redirect' => 'manageTrips',
		'Action' => 'Action_DeleteTrip'
	),
	'manageUsers' => array( /*Users Management*/
		'View' => 'ManageUsers',
		'Action' => 'Action_ManageUsers'
	),
	'addUser' => array(
		//'View' => 'AddUser',
		'Redirect' => 'editUser',
		'Action' => 'Action_AddUser'
	),
	'addUser&close' => array(
		//'View' => 'AddUser',
		'Redirect' => 'manageUsers',
		'Action' => 'Action_AddUser'
	),
	'deleteUser' => array(
		'Redirect' => 'manageUsers',
		'Action' => 'Action_DeleteUser'
	),
	'showUser' => array(
		'View' => 'ShowUser',
		'Action' => 'Action_ShowUser'
	),
	'newUser' => array(
		'View' => 'AddUser',
		'Action' => 'Action_NewUser'
	),
	'saveUser' => array(
		//'View' => 'EditUser',
		'Redirect' => 'editUser',
		'Action' => 'Action_SaveUser'
	),
	'editUser' => array(
		'View' => 'EditUser',
		'Action' => 'Action_ShowUser'
	),
	'majUsers' => array(
		'Redirect' => 'manageUsers',
		'Action' => 'Action_MajUsers'
	),
	'manageUserVehicles' => array(
		'View' => 'ManageUserVehicles',
		'Action' => 'Action_ManageUserVehicles'
	),
	'manageUserTrips' => array(
		'View' => 'ManageUserTrips',
		'Action' => 'Action_ManageUserTrips'
	),
	'manageUserReviews' => array(
		'View' => 'ManageUserReviews',
		'Action' => 'Action_ManageUserReviews'
	),
	'importDatabase' => array( /* Database Import*/
		'Redirect' => 'homepage',
		//'View' => 'Homepage',
		'Action' => 'Action_ImportDatabase'
	),
	'accessDenied' => array( /* AccesDenied*/
		'View' => 'AccessDenied',
		'Action' => 'Action_New'
	),
	'generatePDF' => array( /* generatePDF*/
		'View' => 'GeneratePDF',
		'Action' => 'Action_GeneratePDF'
	),
	'documentation' => array(
		'View' => 'Documentation',
		'Action' => 'Action_Documentation'
	)
);

//$actionsAll = array("homepage", "loginPage", "login", "logout", "loginFailed", "loginUnavailable", "importDatabase", "translateFrench", "translateEnglish", "accessDenied");

//fonction pour récuperer l'action de la route
function getAction($Action) //$Action => la route 
{
	/*global $actionsAll;
	$actionC = new Action();
	global $router;
	if (in_array($Action, $actionsAll)  || $actionC->getService()->getAcces($_SESSION['LDAPUserGroups'], $Action)) { //Free to go
		return $router[$Action]['Action'];
	} else { //Acces Ko
		return $router['accessDenied']['Action'];
	}*/
	global $router;
	return $router[$Action]['Action'];
}
//fonction pour récuperer la View de la route
function getView($Action) //$Action => la route 
{
	/*global $actionsAll;
	$actionC = new Action();
	global $router;
	//$_SESSION['LDAPUserGroups'] = array("Admin");
	//$list = array("Admin");
	if (in_array($Action, $actionsAll) || $actionC->getService()->getAcces($_SESSION['LDAPUserGroups'], $Action)) { //Free to go
		if (isset($router[$Action]['View'])) {
			return $router[$Action]['View'];
		} else {
			header("Location:index.php?action=" . $router[$Action]['Redirect']);
		}
	} else { //Acces Ko
		return $router['accessDenied']['View'];
	}*/
	global $router;
	if (isset($router[$Action]['View'])) {
		return $router[$Action]['View'];
	} else {
		header("Location:index.php?action=" . $router[$Action]['Redirect']);
	}
}
