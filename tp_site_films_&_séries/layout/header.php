<?php
require_once "data/tvShowsArray.php";
require_once "data/moviesArray.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <title>MOVIETVSHOW</title>
</head>

<body>

  <nav>
    <div>
      <a href="index.php">Home</a>
    </div>
    <div>
      <a href="movies.php">Movies</a>
    </div>
    <div>
      <a href="shows.php">TV Shows</a>
    </div>
  </nav>


  <form>
    <input type="text" name="s" placeholder="Title">
    <input type="submit" value="Search" name="s-submit">
  </form>

  <?php
  if (isset($_GET['s']) && isset($_GET['s-submit'])) {
    foreach ($movies as $movie) {
      if ($_GET['s'] = $movie['title']) {
        $p = "movie.php?movie= " . $movie['id'];
        header("Location: $p");
      }
    }
  }

  $movie = new Movie("name", "img", "original_name", 5, 7, "release_date", "overview");
