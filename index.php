<?php

require 'autoload.php';


use ScreenMatch\Model\{
    Movie, Episode, Genre, Series
};
use ScreenMatch\Calculations\{
    BingeCalculator, StarConverter
};

echo "\nWelcome to Screen Match! \n";

$movie = new Movie(
    'Test',
    2023,
    6,
    Genre::Comedy,
    135,
);

$movie->addRating(10);
$movie->addRating(10);
$movie->addRating(6);

var_dump($movie);

echo $movie->getAverageRating() . "\n";

$series = new Series ('Lost', 2007, Genre::Drama, 10, 20, 30);

$series->addRating(10);
$series->addRating(6);
$series->addRating(6);

var_dump($series);

echo $series->releaseYear . "\n";

$titlesToInclude = [];
$titlesToInclude[] = $movie;
$titlesToInclude[] = $series;

var_dump($titlesToInclude);

$calculation = new BingeCalculator($titlesToInclude);

var_dump($calculation);

$durationForBinging = $calculation->getDuration();

$durationInHours = $durationForBinging / 60;

$durationInDays = $durationInHours / 24;

echo "For this binge session, you will need $durationInDays days.\n";

$converter = new StarConverter;
$movieStarRating = $converter->convert($movie);
$seriesStarRating = $converter->convert($series);


echo "The movie has $movieStarRating stars and the series has $seriesStarRating stars.";

$episode = new Episode($series, 'Pilot', 1);
$episode->addRating(10);
$episode->addRating(10);
$episode->addRating(6);
$episode->addRating(6);

var_dump($episode);

echo $episode->getAverageRating();