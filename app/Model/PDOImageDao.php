<?php

include_once("C_Image.php");

class PDOImageDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addImage(Image $image)
    {
        $sqlQuery = 'INSERT INTO images(vehicleId, filePath) 
                     VALUES (:vehicleId, :filePath)';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'vehicleId' => $image->getVehicleId(),
            'filePath' => $image->getFilePath(),
        ]);

        return $this->database->getDb()->lastInsertId();
    }

    public function editImage(Image $image)
    {
        $sqlQuery = 'UPDATE images SET 
                     vehicleId=:vehicleId, filePath=:filePath 
                     WHERE id=:id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $image->getId(),
            'vehicleId' => $image->getVehicleId(),
            'filePath' => $image->getFilePath(),
        ]);
    }

    public function deleteImage($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM images WHERE id = :id");
        $deleteStatement->execute([
            'id' => $id,
        ]) or die(print_r($this->database->getDb()->errorInfo()));
    }

    public function getImageById($id)
    {
        $query = "SELECT * FROM images WHERE id=:id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
        $row = $statement->fetch();
        return new Image(
            $row['id'],
            $row['vehicleId'],
            $row['filePath']
        );
    }

    public function getAllImages()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM images ORDER BY id ASC");
        foreach ($rs as $row) {
            $tab[] = new Image(
                $row['id'],
                $row['vehicleId'],
                $row['filePath']
            );
        }

        if (count($tab) > 0) {
            return $tab;
        } else {
            return null;
        }
    }
}
