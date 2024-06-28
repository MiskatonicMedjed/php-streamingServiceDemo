<?php
namespace ScreenMatch\Model;

use ScreenMatch\Exception\InvalidRatingException;

trait WithRating 
{
    private array $rating = [];

    /**
     * @throws \InvalidArgumentException If rating is negative or larger than 10.
     */
    public function addRating(float $reviewRating):void 
    {
        if ($reviewRating < 0 || $reviewRating > 10)
        {
            throw new InvalidRatingException();
        }
        $this->ratings[] = $reviewRating;
    }

    public function getAverageRating(): float 
    {
        $sumOfRatings = array_sum ($this->ratings);
        $numberOfRatings = count ($this->ratings);
        return $sumOfRatings / $numberOfRatings;
    }

}