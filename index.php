<?php 
//This is my first name
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
    <section class ="integers">
      <pre>
        <?php 
          $one = 1;
          $two = 2;
          $three = 3;
          $string_one = "1";
   
        ?>
      </pre>
      <ul>
        <li> <?php echo $one; echo $two; echo $three ?></li> 
        <li><?php echo $string_one ?></li>
      </ul>
    </section>
  </body>
</html>
