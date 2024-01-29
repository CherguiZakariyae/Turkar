<?php

/**
 * 
 * cette class est destinée à nous fournir l'objet Service qui nous permet d'accéder à tous les modèles de notre projet,
 * et c'est la class qui contient la partie de code à modifier pour faire la connexion à la base de données.
 */
?>
<?php
include_once(__DIR__ . "/../MySQLDataSource.php");
include_once(__DIR__ . "/../Database.php");
include_once(__DIR__ . "/../Model/C_Image.php");
include_once(__DIR__ . "/../Model/C_Location.php");
include_once(__DIR__ . "/../Model/C_Payment.php");
include_once(__DIR__ . "/../Model/C_Request.php");
include_once(__DIR__ . "/../Model/C_Review.php");
include_once(__DIR__ . "/../Model/C_Trip.php");
include_once(__DIR__ . "/../Model/C_User.php");
include_once(__DIR__ . "/../Model/C_Vehicle.php");

include_once(__DIR__ . "/../Model/PDOImageDao.php");
include_once(__DIR__ . "/../Model/PDOLocationDao.php");
include_once(__DIR__ . "/../Model/PDOPaymentDao.php");
include_once(__DIR__ . "/../Model/PDORequestDao.php");
include_once(__DIR__ . "/../Model/PDOReviewDao.php");
include_once(__DIR__ . "/../Model/PDOTripDao.php");
include_once(__DIR__ . "/../Model/PDOUserDao.php");
include_once(__DIR__ . "/../Model/PDOVehicleDao.php");
include_once(__DIR__ . "/../Service.php");

class Action
{
    private $service;
    private $database;
    private $config;

    public function __construct()
    {
        $this->config = parse_ini_file(__DIR__ . '/../config.ini');
        $database_host = $this->config['database_host'];
        $database_name = $this->config['database_name'];
        $database_user = $this->config['database_user'];
        $database_password = $this->config['database_password'];
        $datasource = new MySQLDataSource($database_host, $database_name, $database_user, $database_password);

        $this->database = new DataBase($datasource);
        $this->database->Open();

        $PDOImage = new PDOImageDao($this->database);
        $PDOLocation = new PDOLocationDao($this->database);
        $PDOPayment = new PDOPaymentDao($this->database);
        $PDORequest = new PDORequestDao($this->database);
        $PDOReview = new PDOReviewDao($this->database);
        $PDOTrip = new PDOTripDao($this->database);
        $PDOUser = new PDOUserDao($this->database);
        $PDOVehicle = new PDOVehicleDao($this->database);
        $this->service = new service(
            $PDOImage,
            $PDOLocation,
            $PDOPayment,
            $PDORequest,
            $PDOReview,
            $PDOTrip,
            $PDOUser,
            $PDOVehicle,
        );
    }
    public function getService()
    {
        return $this->service;
    }
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * Get the database
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Get the value of config
     */
    public function getConfig()
    {
        return $this->config;
    }
}
