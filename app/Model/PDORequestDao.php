<?php

include_once("C_Request.php");

class PDORequestDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addRequest(Request $var)
    {
        $sqlQuery = 'INSERT INTO requests(tripId, passengerId, status, pets, message, enable, dateCreate) 
                     VALUES (:tripId, :passengerId, :status, :pets, :message, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'tripId' => $var->getTripId(),
            'passengerId' => $var->getPassengerId(),
            'status' => $var->getStatus(),
            'pets' => $var->getPets(),
            'message' => $var->getMessage(),
            'enable' => $var->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editRequest(Request $var)
    {
        $sqlQuery = 'UPDATE requests 
                     SET tripId = :tripId, passengerId = :passengerId, status = :status, 
                         pets = :pets, message = :message, enable = :enable
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $var->getId(),
            'tripId' => $var->getTripId(),
            'passengerId' => $var->getPassengerId(),
            'status' => $var->getStatus(),
            'pets' => $var->getPets(),
            'message' => $var->getMessage(),
            'enable' => $var->getEnable(),
        ]);
    }

    public function deleteRequest($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM requests WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getRequestById($id)
    {
        $query = "SELECT * FROM requests WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new Request(
            $row['id'],
            $row['tripId'],
            $row['passengerId'],
            $row['status'],
            $row['pets'],
            $row['message'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllRequests()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM requests ORDER BY dateCreate DESC");
        foreach ($rs as $row) {
            $tab[] = new Request(
                $row['id'],
                $row['tripId'],
                $row['passengerId'],
                $row['status'],
                $row['pets'],
                $row['message'],
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
