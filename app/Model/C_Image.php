<?php

class Image
{
    private $id;
    private $vehicleId;
    private $filePath;

    /**
     * Image constructor.
     * @param $id
     * @param $vehicleId
     * @param $filePath
     */
    public function __construct($id, $vehicleId, $filePath)
    {
        $this->id = $id;
        $this->vehicleId = $vehicleId;
        $this->filePath = $filePath;
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
     * Get the value of vehicleId
     */
    public function getVehicleId()
    {
        return $this->vehicleId;
    }

    /**
     * Set the value of vehicleId
     *
     * @return  self
     */
    public function setVehicleId($vehicleId)
    {
        $this->vehicleId = $vehicleId;

        return $this;
    }

    /**
     * Get the value of filePath
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set the value of filePath
     *
     * @return  self
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;

        return $this;
    }
}
