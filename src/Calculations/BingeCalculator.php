<?php
namespace ScreenMatch\Calculations;
use ScreenMatch\Model\Title;
class BingeCalculator
{
    private int $bingeDuration;

    public function __construct(
        public readonly array $titlesIncluded
    )
    {
        $this->bingeDuration = 0;
        foreach ($this->titlesIncluded as $title)
        {
            $this->includeTitle($title);
        }
    }

    public function includeTitle(Title $title): void
    {
        $this->bingeDuration += $title->duration();
    }

    public function getDuration(): int
    {
        return $this->bingeDuration;
    }
}