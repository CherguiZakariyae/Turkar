<?php

/**
 * Project Controller
 */


//inclus le fichier de routage

include_once("Router.php");
session_start();

//get the current path
//$currentPath = parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH);
// if ($_SERVER['SERVER_NAME'] == "turkar.com") {
//   if (strpos($currentPath, "preprod") != false) {
//     /** turkar.com/app/preprod */
//     $_SESSION['environment'] = "PREPROD";
//   } else {
//     $_SESSION['environment'] = "PROD";
//   }
// } else {
//   $_SESSION['environment'] = "DEV";
// }

//Définiton du langue
//Début
if (isset($_SESSION['lang'])) {
  if ($_SESSION['lang'] == "turk") {
    include "Langue/turk.inc";
  } else {
    $_SESSION['lang'] = "en";
    include "Langue/en.inc";
  }
} else {
  if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $BrowserLanguage = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($BrowserLanguage == 'turk') {
      include "Langue/turk.inc";
      $_SESSION['lang'] = "turk";
    } else {
      include "Langue/en.inc";
      $_SESSION['lang'] = "en";
    }
  }
}
//cette partie de code est pour récuperer l'action(la route)
//Début

if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else if (isset($_POST['action'])) {

  $action = $_POST['action'];
} else {
  $action = "homepage";
}

//+
if ((!isset($_SESSION['username']) || $_SESSION['username'] == null) && $action != "login" && $action != "registerPage" && $action != "register") $action = "loginPage";
//Fin

//rint_r($_SESSION);

$action_p = getAction($action); //Appelez la fonction getAction dans Router.php pour récupérer l'action qui sera exécutée.
$view = getView($action); //Appelez la fonction getVue dans Router.php pour récupérer la vue qui sera affichée.

//echo "<br>action_p : ".$action_p;
//echo "<br>vue : ".$vue;

include_once("Controller/" . $action_p . ".php"); //récuperer l'action
include_once("View/" . $view . ".php"); //récuperer la vue