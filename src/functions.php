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

function findMovieTitle(mixed $name) {
    $semicolonPosition = strpos($name,":");
    return substr($name, 0 , $semicolonPosition);
}

function findMovieSubtitle(mixed $name){
    $semicolonPosition = strpos($name,":") +1;
    return substr($name, $semicolonPosition);
}

function getMovie(mixed $fileLocation) {
    $jsonCode = file_get_contents($fileLocation);
    $movieArray = json_decode($jsonCode, true);
    return $movieArray;
}

function createMovie(string $name, int $year, float $rating, string $genre): Movie{
    //create ID system, using file get contents and json_decode to create an array from the last line, 
    //then getting the id key and using that to define the new key of the next movie to be created
    $array = [];
    $array[] = $name;
    $array[] = $year;
    $array[] = $rating;
    $array[] = $genre;

    $jsonCode = json_encode($array);
    $exportData = [
        'name' => $_POST['name'],
        'year' => $_POST['year'],
        'rating' => $_POST['rating'],
        'genre' => Genre::$_POST['genre'],
    ];
    file_put_contents('../movie.json',json_encode($exportData), FILE_APPEND);
    $movie = new Movie(
        $exportData('name'), 
        $exportData('year'), 
        $exportData('rating'), 
        $exportData('genre'));
    return $movie;
}

function jsonLookup($movieName) { //change to $movieID once id system is created
    $jsonContent = file('../movie.json');
    $movieArray = json_decode($jsonContent);
    array_filter($movieArray, );
    $idNum = [];
    $idNum = 1;
}

function jsonLookupCallback($movieName){
    echo 1;
};