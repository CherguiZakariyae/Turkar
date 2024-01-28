<?php

/**
 * 
 * Pour accéder aux différents objets de la partie Modèle nous devons passer obligatoirement par cette classe
 */

include_once("Model/PDOImageDao.php");
include_once("Model/PDOLocationDao.php");
include_once("Model/PDOPaymentDao.php");
include_once("Model/PDORequestDao.php");
include_once("Model/PDOReviewDao.php");
include_once("Model/PDOTripDao.php");
include_once("Model/PDOUserDao.php");
include_once("Model/PDOVehicleDao.php");

class service
{
    private $PDOImage;
    private $PDOLocation;
    private $PDOPayment;
    private $PDORequest;
    private $PDOReview;
    private $PDOTrip;
    private $PDOUser;
    private $PDOVehicle;
    public function __construct(
        $PDOImage,
        $PDOLocation,
        $PDOPayment,
        $PDORequest,
        $PDOReview,
        $PDOTrip,
        $PDOUser,
        $PDOVehicle
    ) {
        $this->PDOImage = $PDOImage;
        $this->PDOLocation = $PDOLocation;
        $this->PDOPayment = $PDOPayment;
        $this->PDORequest = $PDORequest;
        $this->PDOReview = $PDOReview;
        $this->PDOTrip = $PDOTrip;
        $this->PDOUser = $PDOUser;
        $this->PDOVehicle = $PDOVehicle;
    }
    /******************************************Getters******************************************/
    /**
     * Get the value of PDOImage
     */
    public function getPDOImage()
    {
        return $this->PDOImage;
    }

    /**
     * Get the value of PDOLocation
     */
    public function getPDOLocation()
    {
        return $this->PDOLocation;
    }

    /**
     * Get the value of PDOPayment
     */
    public function getPDOPayment()
    {
        return $this->PDOPayment;
    }

    /**
     * Get the value of PDORequest
     */
    public function getPDORequest()
    {
        return $this->PDORequest;
    }

    /**
     * Get the value of PDOReview
     */
    public function getPDOReview()
    {
        return $this->PDOReview;
    }

    /**
     * Get the value of PDOTrip
     */
    public function getPDOTrip()
    {
        return $this->PDOTrip;
    }

    /**
     * Get the value of PDOUser
     */
    public function getPDOUser()
    {
        return $this->PDOUser;
    }

    /**
     * Get the value of PDOVehicle
     */
    public function getPDOVehicle()
    {
        return $this->PDOVehicle;
    }
    /****************************************Getters END****************************************/

    //authentification
    public function authenticateUser($email, $password)
    {
        return $this->getPDOUser()->authenticateUserByEmail($email, $password);
    }
}
