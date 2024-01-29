<?php

class Trip
{
    private $id;
    private $driverId;
    private $startLocationId;
    private $endLocationId;
    private $departureTime;
    private $availableSeats;
    private $status;
    private $price;
    private $enable;
    private $dateCreate;

    /**
     * Trip constructor.
     * @param $id
     * @param $driverId
     * @param $startLocationId
     * @param $endLocationId
     * @param $departureTime
     * @param $availableSeats
     * @param $status
     * @param $price
     * @param $enable
     * @param $dateCreate
     */
    public function __construct($id, $driverId, $startLocationId, $endLocationId, $departureTime, $availableSeats, $status, $price, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->driverId = $driverId;
        $this->startLocationId = $startLocationId;
        $this->endLocationId = $endLocationId;
        $this->departureTime = $departureTime;
        $this->availableSeats = $availableSeats;
        $this->status = $status;
        $this->price = $price;
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
     * Get the value of driverId
     */
    public function getDriverId()
    {
        return $this->driverId;
    }

    /**
     * Set the value of driverId
     *
     * @return  self
     */
    public function setDriverId($driverId)
    {
        $this->driverId = $driverId;

        return $this;
    }

    /**
     * Get the value of startLocationId
     */
    public function getStartLocationId()
    {
        return $this->startLocationId;
    }

    /**
     * Set the value of startLocationId
     *
     * @return  self
     */
    public function setStartLocationId($startLocationId)
    {
        $this->startLocationId = $startLocationId;

        return $this;
    }

    /**
     * Get the value of endLocationId
     */
    public function getEndLocationId()
    {
        return $this->endLocationId;
    }

    /**
     * Set the value of endLocationId
     *
     * @return  self
     */
    public function setEndLocationId($endLocationId)
    {
        $this->endLocationId = $endLocationId;

        return $this;
    }

    /**
     * Get the value of departureTime
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * Set the value of departureTime
     *
     * @return  self
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * Get the value of availableSeats
     */
    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    /**
     * Set the value of availableSeats
     *
     * @return  self
     */
    public function setAvailableSeats($availableSeats)
    {
        $this->availableSeats = $availableSeats;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

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
}
