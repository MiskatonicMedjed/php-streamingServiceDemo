<?php

function showRecentReleaseMessage(int $year): void {
    //$planStatus = "Standard";
    if ($year > 2023) {
        echo "This movie is a recent release.\n";
        //$planStatus = "Prime +";
    } elseif ($year > 2020 && $year <=2023) {
        echo "This movie is still new.\n";
        //$planStatus = "Prime";
    } else {
        echo "This movie is not a recent release.\n";
    }
    //return $planStatus;
}

function includedInPlan(string $userPlan, int $year): void{
    $includedInPlan = $userPlan == "Prime plus" || $year < 2020 || $userPlan == "Prime" && $year <2024;
    $string = $includedInPlan == true ? "This movie is included in your plan.\n" : "This movie isn't included in your plan. Try upgrading to watch it now! :)\n";
    echo $string; 
}

function findMovieTitle(mixed $name): string {
    $semicolonPosition = strpos($name,":");
    return substr($name, 0 , $semicolonPosition);
}

function findMovieSubtitle(mixed $name): string{
    $semicolonPosition = strpos($name,":") +1;
    return substr($name, $semicolonPosition);
}

//function getMovie(int $movieID): array {
//    $jsonCode = file_get_contents($fileLocation);
//    $movieArray = json_decode($jsonCode, true);
//    return $movieArray;
//}

function createMovie(string $name, int $year, float $rating, string $genre, int $duration): Movie{
//    $ID = [count(file(__DIR__ . '../movie.json'))]; 
    //file divides the json line by line into an array, then count counts the number of elements of that array, giving highest array index address + 1 as result

    $exportData = [
//        'ID' => $ID,
        'name' => $name,
        'year' => $year,
        'rating' => $rating,
        'genre' => $genre,
        'duration' => $duration,
    ]; //Takes params and ID var and creates array to be used for __construct, converting string $genre into Genre::$genre

    $movie = new Movie(
//        $ID('ID'),
        $exportData('name'), 
        $exportData('year'), 
        $exportData('rating'), 
        $exportData('genre'),
        $exportData('duration')
        );
    return $movie;
}

