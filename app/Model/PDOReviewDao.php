<?php
include_once("C_Review.php");

class PDOReviewDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addReview(Review $var)
    {
        $sqlQuery = 'INSERT INTO reviews(tripId, rating, comment, reviewerId, enable, dateCreate) 
                     VALUES (:tripId, :rating, :comment, :reviewerId, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'tripId' => $var->getTripId(),
            'rating' => $var->getRating(),
            'comment' => $var->getComment(),
            'reviewerId' => $var->getReviewerId(),
            'enable' => $var->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editReview(Review $var)
    {
        $sqlQuery = 'UPDATE reviews 
                     SET tripId = :tripId, rating = :rating, comment = :comment, 
                         reviewerId = :reviewerId, enable = :enable
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $var->getId(),
            'tripId' => $var->getTripId(),
            'rating' => $var->getRating(),
            'comment' => $var->getComment(),
            'reviewerId' => $var->getReviewerId(),
            'enable' => $var->getEnable(),
        ]);
    }

    public function deleteReview($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM reviews WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getReviewById($id)
    {
        $query = "SELECT * FROM reviews WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new Review(
            $row['id'],
            $row['tripId'],
            $row['rating'],
            $row['comment'],
            $row['reviewerId'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllReviews()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM reviews ORDER BY dateCreate DESC");
        foreach ($rs as $row) {
            $tab[] = new Review(
                $row['id'],
                $row['tripId'],
                $row['rating'],
                $row['comment'],
                $row['reviewerId'],
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
