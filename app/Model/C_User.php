<?php

class User
{
    private $id;
    private $CIN;
    private $username;
    private $gender;
    private $email;
    private $password;
    private $status;
    private $phone;
    private $imagePath;
    private $birthday;
    private $enable;
    private $dateCreate;

    private $vehicles;
    private $trips;

    /**
     * User constructor.
     * @param $id
     * @param $CIN
     * @param $username
     * @param $gender
     * @param $email
     * @param $password
     * @param $status
     * @param $phone
     * @param $imagePath
     * @param $birthday
     * @param $enable
     * @param $dateCreate
     */
    public function __construct($id, $CIN, $username, $gender, $email, $password, $status, $phone, $imagePath, $birthday, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->CIN = $CIN;
        $this->username = $username;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
        $this->phone = $phone;
        $this->imagePath = $imagePath;
        $this->birthday = $birthday;
        $this->enable = $enable;
        $this->dateCreate = $dateCreate;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of CIN
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set the value of CIN
     *
     * @return  self
     */
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;
        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get the value of imagePath
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set the value of imagePath
     *
     * @return  self
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * Get the value of enable
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set the value of enable
     *
     * @return  self
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * Get the value of dateCreate
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set the value of dateCreate
     *
     * @return  self
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }

    /**
     * Get the value of vehicles
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Set the value of vehicles
     *
     * @return  self
     */
    public function setVehicles($vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Get the value of trips
     */
    public function getTrips()
    {
        return $this->trips;
    }

    /**
     * Set the value of trips
     *
     * @return  self
     */
    public function setTrips($trips)
    {
        $this->trips = $trips;

        return $this;
    }
}
