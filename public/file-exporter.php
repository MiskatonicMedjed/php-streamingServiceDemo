<?php
require "../src/functions.php";
$exportedMovie = createMovie($_POST['name'], $_POST['year'], $_POST['rating'], $_POST['genre']);
header('Location: /success.php?movie=' . $$_POST['name'] . '&year=' . $$_POST['year'] . '&rating=' . $$_POST['rating'] . '&genre=' . $$_POST['genre']);