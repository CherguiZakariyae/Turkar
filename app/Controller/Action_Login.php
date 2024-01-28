<?php

/**
 * This file will provide its view with the necessary actions during its runtime (such as obtaining information or executing actions).
 * If you want to know the view of each action file, you just need to look it up in the routing file (Router.php).
 */

include_once("Action.php");
$action = new Action();

$_SESSION['username'] = "test";
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
