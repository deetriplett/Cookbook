<?php 
$name = "Dawn";
$location = "Louisville, KY";
$full_name = "Dawn Monroe";
$name = "$full_name";



?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> Resume</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="https://placeimg.com/200/200/tech" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to my Resume!</p>
      <hr />
      <ul class="social">
        <li><a href="twitter.com/deetriplett"><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <p>Let's Get Started!</p>
      <p><?php echo "Hello, World!"?></p>
    </section>
  </body>
</html>
