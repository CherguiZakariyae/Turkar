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
	'manageColors' => array( /*Colors Management*/
		'View' => 'ManageColors',
		'Action' => 'Action_ManageColors'
	),
	'newColor' => array(
		'View' => 'AddColor',
		'Action' => 'Action_New'
	),
	'addColor' => array(
		'Redirect' => 'editColor',
		'Action' => 'Action_AddColor'
	),
	'addColor&close' => array(
		'Redirect' => 'manageColors',
		'Action' => 'Action_AddColor'
	),
	'showColor' => array(
		'View' => 'ShowColor',
		'Action' => 'Action_ShowColor'
	),
	'editColor' => array(
		'View' => 'EditColor',
		'Action' => 'Action_ShowColor'
	),
	'saveColor' => array(
		'Redirect' => 'editColor',
		'Action' => 'Action_SaveColor'
	),
	'saveColor&close' => array(
		'Redirect' => 'manageColors',
		'Action' => 'Action_SaveColor'
	),
	'deleteColor' => array(
		'Redirect' => 'manageColors',
		'Action' => 'Action_DeleteColor'
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
	'saveUser&close' => array(
		//'View' => 'EditUser',
		'Redirect' => 'manageUsers',
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
