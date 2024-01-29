<?php

include_once("C_Payment.php");

class PDOPaymentDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addPayment(Payment $payment)
    {
        $sqlQuery = 'INSERT INTO payments(userId, tripId, amount, paymentStatus, timestamp) 
                     VALUES (:userId, :tripId, :amount, :paymentStatus, :timestamp)';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'userId' => $payment->getUserId(),
            'tripId' => $payment->getTripId(),
            'amount' => $payment->getAmount(),
            'paymentStatus' => $payment->getPaymentStatus(),
            'timestamp' => $payment->getTimestamp(),
        ]);

        return $this->database->getDb()->lastInsertId();
    }

    public function editPayment(Payment $payment)
    {
        $sqlQuery = 'UPDATE payments SET 
                     userId=:userId, tripId=:tripId, amount=:amount, paymentStatus=:paymentStatus, timestamp=:timestamp 
                     WHERE id=:id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $payment->getId(),
            'userId' => $payment->getUserId(),
            'tripId' => $payment->getTripId(),
            'amount' => $payment->getAmount(),
            'paymentStatus' => $payment->getPaymentStatus(),
            'timestamp' => $payment->getTimestamp(),
        ]);
    }

    public function deletePayment($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM payments WHERE id = :id");
        $deleteStatement->execute([
            'id' => $id,
        ]) or die(print_r($this->database->getDb()->errorInfo()));
    }

    public function getPaymentById($id)
    {
        $query = "SELECT * FROM payments WHERE id=:id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute([
            'id' => $id,
        ]);
        $row = $statement->fetch();
        return new Payment(
            $row['id'],
            $row['userId'],
            $row['tripId'],
            $row['amount'],
            $row['paymentStatus'],
            $row['timestamp']
        );
    }

    public function getAllPayments()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM payments ORDER BY id ASC");
        foreach ($rs as $row) {
            $tab[] = new Payment(
                $row['id'],
                $row['userId'],
                $row['tripId'],
                $row['amount'],
                $row['paymentStatus'],
                $row['timestamp']
            );
        }

        if (count($tab) > 0) {
            return $tab;
        } else {
            return null;
        }
    }
}
