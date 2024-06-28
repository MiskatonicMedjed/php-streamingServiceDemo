<?php
namespace ScreenMatch\Model;

class Movie extends Title
{

    public function __construct(
//      int $ID,
        string $name,
        int $releaseYear,
        float $firstRating,
        Genre $genre,
        public readonly int $duration
    )    
    {
        parent::__construct(/*$ID,*/ $name, $releaseYear, $genre);
    }


    #[\Override]
    public function duration(): int
    {
        return $this->duration;
    }


}

