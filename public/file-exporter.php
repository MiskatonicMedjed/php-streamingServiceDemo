<?php
require "../src/functions.php";

$exportedMovie = new movie ($_POST['name'], $_POST['year'], $_POST['rating'], $_POST['genre'], $_POST['duration']);

header('Location: /success.php?'/*movieID=' . /*$exportedMovie->ID .*/ . 'name=' . $exportedMovie->name . '&year=' . $exportedMovie->releaseYear . '&rating=' . $exportedMovie->firstRating . '&genre=' . $exportedMovie->genre. '&duration=' . $exportedMovie->duration);