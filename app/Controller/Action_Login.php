<?php

/**
 * This file will provide its view with the necessary actions during its runtime (such as obtaining information or executing actions).
 * If you want to know the view of each action file, you just need to look it up in the routing file (Router.php).
 */

include_once("Action.php");
$action = new Action();

// $_SESSION['email'] = $_POST['email'];
// $_SESSION['password'] = $_POST['password'];

$result = $action->getService()->getPDOUser()->authenticateUserByEmail($_POST['email'], $_POST['password']);
if ($result != null) {
    $_SESSION['idUser'] = $result->getId();
    $_SESSION['username'] = $result->getUsername();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['gender'] = $result->getGender();
    $_SESSION['status'] = $result->getStatus();
    $_SESSION['phone'] = $result->getPhone();
    $_SESSION['imagePath'] = $result->getImagePath();
    $_SESSION['birthday'] = $result->getBirthday();
    $_SESSION['cin'] = $result->getCin();
    $_SESSION['enable'] = $result->getEnable(); //if not we need to redirect it to anothe page saying you can't access the site
} else {
    header("Location:index.php?action=loginFailed");
}
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
