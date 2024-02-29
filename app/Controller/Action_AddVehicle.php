<?php

/**
 * ce fichier fournira à sa vue les actions nécessaires en son temps d'exécution (comme obtenir des informations ou exécuter des actions).
 * si vous voulez connaître la vue de chaque fichier d'action, il vous suffit de rechercher à ce sujet dans le fichier de routage (Router.php).
 */
include_once("Action.php");
include_once("Model/C_Vehicle.php");
$action = new Action();
$enable = 0;
if ($_POST['enable']) $enable = 1;
$var = new Vehicle(0, $_SESSION['idUser'], $_POST['name'], $_POST['brand'], $_POST['model'], $_POST['year'], $_POST['plateNumber'], $_FILES["picture"]["name"], $enable, date('d-m-y'));
$newIdVehicle = $action->getService()->getPDOVehicle()->addVehicle($var);

$chemin_destination = "Att/";
$picture = uploadFile("picture", $chemin_destination);
//if ($picture == null) $picture = $var->getPicture();

function uploadFile($name, $destination)
{
    //$file_name = $_FILES[$name]["name"];
    // Vérifie si le fichier a été uploadé sans erreur.
    if (isset($_FILES[$name]) && $_FILES[$name]["error"] == 0) {
        $allowed_extensions = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
        //$file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        //$allowed = array("exp" => "application/octet-stream", "jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "PNG" => "image/png");
        $filename = $_FILES[$name]["name"];
        $filetype = $_FILES[$name]["type"];
        $filesize = $_FILES[$name]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION); //recuperer l'extension
        //if (!array_key_exists($ext, $allowed_extensions)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 200Mo maximum
        $maxsize = 2000 * 1024 * 1024;
        if ($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if (in_array($ext, $allowed_extensions)) {
            // Vérifie si le fichier existe avant de le télécharger.
            if (file_exists($destination . $_FILES[$name]["name"])) {
                echo $_FILES[$name]["name"] . " existe déjà.";
                return null;
            } else {
                echo "Move from : " . $_FILES[$name]["tmp_name"] . "<br>";
                echo "Move to : " . $destination . "<br>";
                echo is_file($_FILES[$name]["tmp_name"]);
                //$_FILES[$name]["name"] = $name . "." . $ext; //changer le nom de fichier
                //move_uploaded_file($_FILES[$name]["tmp_name"], $destination . $_FILES[$name]["name"]);
                move_uploaded_file($_FILES[$name]["tmp_name"], $destination . $_FILES[$name]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
                return $_FILES[$name]["name"];
            }
        } else {
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer.(Veuillez sélectionner un format de fichier valide)";
            return null;
        }
    } else if (empty($_FILES[$name]["tmp_name"])) {
        return null;
    } else {
        echo "Error: " . $_FILES[$name]["error"];
        return null;
    }
    return null;
}
