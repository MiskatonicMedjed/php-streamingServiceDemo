<?php
namespace ScreenMatch\Model;
class Episode implements Rated
{
    use WithRating;
    public function __construct(
        public readonly Series $series,
        public readonly string $name,
        public readonly int $number
    ) 
    {
        $this->addToSeries($this->series);
    }
    public function addToSeries(Series $series): void
    {
        $this->series->addEpisode($this);
    }

}