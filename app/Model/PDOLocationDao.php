<?php

include_once("C_Location.php");

class PDOLocationDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addLocation(Location $var)
    {
        $sqlQuery = 'INSERT INTO locations(name, enable, dateCreate) 
                     VALUES (:name, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'name' => $var->getName(),
            'enable' => $var->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editLocation(Location $var)
    {
        $sqlQuery = 'UPDATE locations 
                     SET name = :name, enable = :enable
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $var->getId(),
            'name' => $var->getName(),
            'enable' => $var->getEnable(),
        ]);
    }

    public function deleteLocation($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM locations WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getLocationById($id)
    {
        $query = "SELECT * FROM locations WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new Location(
            $row['id'],
            $row['name'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllLocations()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM locations ORDER BY name ASC");
        foreach ($rs as $row) {
            $tab[] = new Location(
                $row['id'],
                $row['name'],
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
}
