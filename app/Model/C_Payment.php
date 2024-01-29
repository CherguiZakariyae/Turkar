<?php

class Payment
{
    private $id;
    private $userId;
    private $tripId;
    private $amount;
    private $paymentStatus;
    private $timestamp;

    /**
     * Payment constructor.
     * @param $id
     * @param $userId
     * @param $tripId
     * @param $amount
     * @param $paymentStatus
     * @param $timestamp
     */
    public function __construct($id, $userId, $tripId, $amount, $paymentStatus, $timestamp)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->tripId = $tripId;
        $this->amount = $amount;
        $this->paymentStatus = $paymentStatus;
        $this->timestamp = $timestamp;
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
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

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
     * Get the value of amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of paymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set the value of paymentStatus
     *
     * @return  self
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get the value of timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set the value of timestamp
     *
     * @return  self
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
