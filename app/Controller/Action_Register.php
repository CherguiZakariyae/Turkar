<?php

/**
 * This file will provide its view with the necessary actions during its runtime (such as obtaining information or executing actions).
 * If you want to know the view of each action file, you just need to look it up in the routing file (Router.php).
 */

include_once("Action.php");
include_once("Model/C_User.php");
$action = new Action();

$var = new User(0, $_POST['cin'], $_POST['username'], $_POST['gender'], $_POST['email'], $_POST['password'], 'user', null, null, null, 1, getdate());
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['status'] = 'user';

$action->getService()->getPDOUser()->addUser($var);

// $email = $_POST['email'];
// $password = $_POST['password'];
// $user = $action->getService()->authenticateUser($email, $password);
// if ($user != null) {
//     $_SESSION['username'] = $user->getUsername();
//     $_SESSION['email'] = $email;
//     $_SESSION['gender'] = $user->getGender();
//     $_SESSION['status'] = $user->getStatus();
//     $_SESSION['phone'] = $user->getPhone();
//     $_SESSION['imagePath'] = $user->getImagePath();
//     $_SESSION['birthday'] = $user->getBirthday();
//     $_SESSION['cin'] = $user->getCin();
//     $_SESSION['enable'] = $user->getEnable(); //if not we need to redirect it to anothe page saying you can't access the site
// } else {
//     header("Location:index.php?action=loginFailed");
// }
