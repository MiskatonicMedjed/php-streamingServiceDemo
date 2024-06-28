<?php
namespace ScreenMatch\Model;
class Series extends Title
{
private array $episodes;

    public function __construct(
//      int $ID,
        string $name,
        int $releaseYear,
        Genre $genre,
        public readonly int $seasons,
        public readonly int $episodesPerSeason,
        public readonly int $durationPerEpisode,
    )    {
        parent::__construct(/*$ID,*/ $name, $releaseYear, $genre);
        $this->episodes = [];
    }

    #[\Override]
    public function duration(): int
    {
        return $this->durationPerEpisode * $this->episodesPerSeason * $this->seasons;
    }

    public function addEpisode (Episode $episode)
    {
        $this->episodes[] = $episode;
    }
}

