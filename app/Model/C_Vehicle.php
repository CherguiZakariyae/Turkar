<?php

class Vehicle
{
    private $id;
    private $ownerID;
    private $name;
    private $brand;
    private $model;
    private $year;
    private $plateNumber;
    private $picture;
    private $enable;
    private $dateCreate;

    public function __construct($id, $ownerID, $name, $brand, $model, $year, $plateNumber, $picture, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->ownerID = $ownerID;
        $this->name = $name;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->plateNumber = $plateNumber;
        $this->picture = $picture;
        $this->enable = $enable;
        $this->dateCreate = $dateCreate;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getOwnerID()
    {
        return $this->ownerID;
    }

    public function setOwnerID($ownerID)
    {
        $this->ownerID = $ownerID;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function getPlateNumber()
    {
        return $this->plateNumber;
    }

    public function setPlateNumber($plateNumber)
    {
        $this->plateNumber = $plateNumber;
        return $this;
    }

    public function getEnable()
    {
        return $this->enable;
    }

    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }

    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}
