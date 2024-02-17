<?php
include_once("C_Vehicle.php");

class PDOVehicleDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addVehicle(Vehicle $var)
    {
        $sqlQuery = 'INSERT INTO vehicles(ownerID, name, brand, model, year, plateNumber, enable, dateCreate) 
                     VALUES (:ownerID, :name, :brand, :model, :year, :plateNumber, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'ownerID' => $var->getOwnerID(),
            'name' => $var->getName(),
            'brand' => $var->getBrand(),
            'model' => $var->getModel(),
            'year' => $var->getYear(),
            'plateNumber' => $var->getPlateNumber(),
            'enable' => $var->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editVehicle(Vehicle $var)
    {
        $sqlQuery = 'UPDATE vehicles 
                     SET ownerID = :ownerID, name = :name, brand = :brand, model = :model, 
                         year = :year, plateNumber = :plateNumber, enable = :enable,
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $var->getId(),
            'ownerID' => $var->getOwnerID(),
            'name' => $var->getName(),
            'brand' => $var->getBrand(),
            'model' => $var->getModel(),
            'year' => $var->getYear(),
            'plateNumber' => $var->getPlateNumber(),
            'enable' => $var->getEnable(),
        ]);
    }

    public function deleteVehicle($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM vehicles WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getVehicleById($id)
    {
        $query = "SELECT * FROM vehicles WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new Vehicle(
            $row['id'],
            $row['ownerID'],
            $row['name'],
            $row['brand'],
            $row['model'],
            $row['year'],
            $row['plateNumber'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllVehicles()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM vehicles ORDER BY dateCreate DESC");
        foreach ($rs as $row) {
            $tab[] = new Vehicle(
                $row['id'],
                $row['ownerID'],
                $row['name'],
                $row['brand'],
                $row['model'],
                $row['year'],
                $row['plateNumber'],
                $row['enable'],
                $row['dateCreate']
            );
        }

        if (count($tab) > 0) {
            return $tab;
        } else {
            return null;
        }
    }
    public function getAllVehiclesByUser($id)
    {
        $tab = array();
        $query = "SELECT * FROM vehicles WHERE ownerID=:id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
        $rs = $statement->fetchAll();
        foreach ($rs as $row) {
            $tab[] = new Vehicle(
                $row['id'],
                $row['ownerID'],
                $row['name'],
                $row['brand'],
                $row['model'],
                $row['year'],
                $row['plateNumber'],
                $row['enable'],
                $row['dateCreate']
            );
        }
        if (count($tab) > 0) {
            return $tab;
        } else
            return null;
    }
    public function getCountVehicles()
    {
        $list = $this->getAllVehicles();
        if ($list !== null) {
            return count($list);
        } else {
            return 0;
        }
    }
}
