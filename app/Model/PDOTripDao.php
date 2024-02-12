<?php
include_once("C_Trip.php");

class PDOTripDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addTrip(Trip $var)
    {
        $sqlQuery = 'INSERT INTO trips(driverId, startLocationId, endLocationId, 
                      departureTime, availableSeats, status, price, enable, dateCreate) 
                     VALUES (:driverId, :startLocationId, :endLocationId, 
                             :departureTime, :availableSeats, :status, :price, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'driverId' => $var->getDriverId(),
            'startLocationId' => $var->getStartLocationId(),
            'endLocationId' => $var->getEndLocationId(),
            'departureTime' => $var->getDepartureTime(),
            'availableSeats' => $var->getAvailableSeats(),
            'status' => $var->getStatus(),
            'price' => $var->getPrice(),
            'enable' => $var->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editTrip(Trip $var)
    {
        $sqlQuery = 'UPDATE trips 
                     SET driverId = :driverId, startLocationId = :startLocationId, 
                         endLocationId = :endLocationId, departureTime = :departureTime, 
                         availableSeats = :availableSeats, status = :status, price = :price, 
                         enable = :enable
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $var->getId(),
            'driverId' => $var->getDriverId(),
            'startLocationId' => $var->getStartLocationId(),
            'endLocationId' => $var->getEndLocationId(),
            'departureTime' => $var->getDepartureTime(),
            'availableSeats' => $var->getAvailableSeats(),
            'status' => $var->getStatus(),
            'price' => $var->getPrice(),
            'enable' => $var->getEnable(),
        ]);
    }

    public function deleteTrip($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM trips WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getTripById($id)
    {
        $query = "SELECT * FROM trips WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new Trip(
            $row['id'],
            $row['driverId'],
            $row['startLocationId'],
            $row['endLocationId'],
            $row['departureTime'],
            $row['availableSeats'],
            $row['status'],
            $row['price'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllTrips()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM trips ORDER BY dateCreate DESC");
        foreach ($rs as $row) {
            $tab[] = new Trip(
                $row['id'],
                $row['driverId'],
                $row['startLocationId'],
                $row['endLocationId'],
                $row['departureTime'],
                $row['availableSeats'],
                $row['status'],
                $row['price'],
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
    public function getAllTripsByUser($id)
    {
        $tab = array();
        $query = "SELECT * FROM trips WHERE driverId=:id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
        $rs = $statement->fetchAll();
        foreach ($rs as $row) {
            $tab[] = new Trip(
                $row['id'],
                $row['driverId'],
                $row['startLocationId'],
                $row['endLocationId'],
                $row['departureTime'],
                $row['availableSeats'],
                $row['status'],
                $row['price'],
                $row['enable'],
                $row['dateCreate']
            );
        }
        if (count($tab) > 0) {
            return $tab;
        } else
            return null;
    }
}
