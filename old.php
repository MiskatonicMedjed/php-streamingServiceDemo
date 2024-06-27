<?php
require __DIR__ . "/src/Model/Movie.php";
require __DIR__ . "/src/functions.php";
require __DIR__ . "/movie.json";

//create function checkinput that catches console inputs when the code is executed with params

//$ratings;

//for ($i=1; $i<$argc;$i++) {
//    $ratings[$i] = $argv[$i];
//}
$movie = getmovie(__DIR__ . '/movie.json');
$numberOfRatings = count($movie["ratings"]);
$overallRating = array_sum($movie["ratings"]) / $numberOfRatings;

//[
//    "name" => "Bee Movie : Revengeance",
//    "releaseYear" => 2022,
//    "ratings" => $ratings,
//    "genre" => "Drama",
//];
$includedInPlan = false;
$userPlan = "Prime plus";
$mainName = findMovieTitle($movie["name"]);
$subName = findMovieSubtitle($movie["name"]);

echo "\nWelcome to Screen Match! \n";

echo "Movie name: " . $mainName . "\n";
echo "Subname:" . $subName . "\n";
echo "Release date: " . $movie["releaseYear"] . "\n";
echo "User Ratings: $overallRating\n";
echo "The lowest rating was " . min($movie["ratings"]) . ".\n";
showRecentReleaseMessage($movie["releaseYear"]);
includedInPlan($userPlan,$movie["releaseYear"]);
$movieAsJsonString = json_encode($movie);
file_put_contents(__DIR__ . '/movie.json', $movieAsJsonString);