<?php

/**
 * This file will provide its view with the necessary actions during its runtime (such as obtaining information or executing actions).
 * If you want to know the view of each action file, you just need to look it up in the routing file (Router.php).
 */
if (isset($_SESSION['User'])) {
    $_SESSION['username'] = null;
    $_SESSION['email'] = null;
    $_SESSION['gender'] = null;
    $_SESSION['status'] = null;
    $_SESSION['phone'] = null;
    $_SESSION['imagePath'] = null;
    $_SESSION['birthday'] = null;
    $_SESSION['cin'] = null;
    $_SESSION['enable'] = null;
}
