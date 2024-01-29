<?php

class Request
{
    private $id;
    private $tripId;
    private $passengerId;
    private $status;
    private $pets;
    private $message;
    private $enable;
    private $dateCreate;

    /**
     * Request constructor.
     * @param $id
     * @param $tripId
     * @param $passengerId
     * @param $status
     * @param $pets
     * @param $message
     * @param $enable
     * @param $dateCreate
     */
    public function __construct($id, $tripId, $passengerId, $status, $pets, $message, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->tripId = $tripId;
        $this->passengerId = $passengerId;
        $this->status = $status;
        $this->pets = $pets;
        $this->message = $message;
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
     * Get the value of tripId
     */
    public function getTripId()
    {
        return $this->tripId;
    }

    /**
     * Set the value of tripId
     *
     * @return  self
     */
    public function setTripId($tripId)
    {
        $this->tripId = $tripId;

        return $this;
    }

    /**
     * Get the value of passengerId
     */
    public function getPassengerId()
    {
        return $this->passengerId;
    }

    /**
     * Set the value of passengerId
     *
     * @return  self
     */
    public function setPassengerId($passengerId)
    {
        $this->passengerId = $passengerId;

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
     * Get the value of pets
     */
    public function getPets()
    {
        return $this->pets;
    }

    /**
     * Set the value of pets
     *
     * @return  self
     */
    public function setPets($pets)
    {
        $this->pets = $pets;

        return $this;
    }

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */
    public function setMessage($message)
    {
        $this->message = $message;

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
}
