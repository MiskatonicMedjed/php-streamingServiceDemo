<?php
namespace ScreenMatch\Model;
abstract class Title implements Rated
{
//  protected int $ID;
use WithRating;
    public function __construct(
        public readonly string $name,
        public readonly int $releaseYear,
        public readonly Genre $genre,
    )    
    {
//      $this->ID = [count(file(__DIR__ . '../movie.json'))]; ;
        $exportData = [];
//      $exportData[] = $this->ID;
        $exportData[] = $this->name;
        $exportData[] = $this->releaseYear;
        $exportData[] = $this->genre;
//      $jsonCode = json_encode($exportData);
//      file_put_contents("../$ID-title.json",$jsonCode);
    }

    abstract public function duration(): int;

}