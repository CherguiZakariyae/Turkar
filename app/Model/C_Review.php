<?php

class Review
{
    private $id;
    private $tripId;
    private $rating;
    private $comment;
    private $reviewerId;
    private $enable;
    private $dateCreate;

    /**
     * Review constructor.
     * @param $id
     * @param $tripId
     * @param $rating
     * @param $comment
     * @param $reviewerId
     * @param $enable
     * @param $dateCreate
     */
    public function __construct($id, $tripId, $rating, $comment, $reviewerId, $enable, $dateCreate)
    {
        $this->id = $id;
        $this->tripId = $tripId;
        $this->rating = $rating;
        $this->comment = $comment;
        $this->reviewerId = $reviewerId;
        $this->enable = $enable;
        $this->dateCreate = $dateCreate;
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
     * Get the value of rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set the value of rating
     *
     * @return  self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get the value of comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of reviewerId
     */
    public function getReviewerId()
    {
        return $this->reviewerId;
    }

    /**
     * Set the value of reviewerId
     *
     * @return  self
     */
    public function setReviewerId($reviewerId)
    {
        $this->reviewerId = $reviewerId;

        return $this;
    }

    /**
     * Get the value of enable
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set the value of enable
     *
     * @return  self
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get the value of dateCreate
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set the value of dateCreate
     *
     * @return  self
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }
}
