<?php
$jsonContent = file_get_contents('../movie.json');
$movie = json_decode($jsonContent, true);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Movie registered</title>
</head>
<body>
    <h1><?= $movie['name']; ?></h1>
    <dl>
        <dt>Year of release</dt>
        <dd><?= $movie['year']; ?></dd>

        <dt>rating</dt>
        <dd><?= $movie['rating']; ?></dd>

        <dt>Genre</dt>
        <dd><?= $movie['genre']; ?></dd>
    </dl>
</body>
</html>