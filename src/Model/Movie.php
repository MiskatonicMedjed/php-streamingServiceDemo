<?php
class Movie {
    private array $ratings;
    private float $averageRating;


    public function __construct(
        public readonly string $name,
        public readonly int $releaseYear,
        public readonly Genre $genre,
    )    {
        $this->rating = [];
    }

    public function setRating(float $rating):void 
    {
        $this->ratings[] = $reviewRating;
    }

    public function getName(){
        return $this->name;
    }
    public function getReleaseYear(){
        return $this->releaseYear;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getAverageRating(): float 
    {
        $ratingsSum = array_sum($this->ratings);
        $numberOfRatings = count ($this->ratings);

        return $ratingsSum / $numberOfRatings;
    }


}