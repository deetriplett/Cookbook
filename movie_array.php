<?php 
$movie = [
"title" => "The Empire Strikes Back",
 "year" => 1980,
  "director" => "Irvin Kershner",
  "imdb_rating" => 8.8,
  "imdb_ranking" => 11
];
?>

<h1><?php echo $movie["title"]?> <?php echo $movie["year"]?></h1>

<table>
  <tr>
    <th>Director</th>
    <td>Robert Zemeckis</td>
  </tr>
  <tr>
    <th>IMDB Rating</th>
    <td>8.5</td>
  </tr>
  <tr>
    <th>IMDB Ranking</th>
    <td>53</td>
  </tr>
</table>
