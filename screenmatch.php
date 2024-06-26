<?php
$movieName = "Bee Movie";
$releaseYear = 2022;
$ratings = [];
$numberOfRatings = $argc - 1;
$includedInPlan = false;
$userPlan = "Prime plus";

for ($i=1; $i<$argc;$i++) {
    $ratings[$i] = $argv[$i];
}

$overallRating = array_sum($ratings) / $numberOfRatings;


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
function includedInPlan(string $userPlan, int $year){
    $includedInPlan = $userPlan == "Prime plus" || $year < 2020 || $userPlan == "Prime" && $year <2024; 
    return $includedInPlan;
}

echo "Welcome to Screen Match! \n";

echo "Movie name: $movieName\n";
echo "Release date: $releaseYear\n";
showRecentReleaseMessage($releaseYear);
echo "User Ratings: $overallRating\n";
$includedInPlan = includedInPlan($userPlan,$releaseYear);
if ($includedInPlan = 1){
    echo "This movie is included in your plan.\n";
} else {
    echo "This movie isn't included in your plan. Try upgrading to watch it now! :)\n";
}


