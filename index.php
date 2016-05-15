<?php 
define("YEAR", 2016);
define("TITLE", "Web Developer");
define("SALARY", 65000);

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
     <pre>
      <?php 
      $a = 10;
      $b = 10;
 
      $sum = $a + $b;
      $diff = $a - $b; 
      $product = $a * $b;
      $quotient = $a / $b;

      //$product = $product + 1;
      $product++;
      $product--;

      $c = 20;
      $d = "10";
      $e = 25;

      var_dump( $a == $b );//equal
      var_dump( $a === $d );//indentical
      var_dump( $a != $b );//not equal
      var_dump( $a !== $b );//not identical
      ?>
      
      <ul>
      <li><?php echo $sum ?> </li>
      <li><?php echo $diff ?></li>
      <li><?php echo $product ?></li>
      <li><?php echo $quotient ?></li>
      </ul>
   
    </pre>
    </section>
  </body>
</html>
