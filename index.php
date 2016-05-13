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
      <p>Let's Get Started!</p>
      <p><?php echo "Hello, World!"?></p>
    </section>
   <?php 
    echo TITLE;
    echo YEAR;
    echo SALARY;
    ?>
    <section class ="integers">
      <pre>
        <?php 
          $one = 1;
          $two = 2;
          $three = 3;
          $string_one = "1"
        ?>
      </pre>
      <ul>
        <li> <?php echo $one; echo $two; echo $three ?></li> 
        <li><?php echo $string_one ?></li>
      </ul>
      <pre>
        <?php 
// (\n) means a new line
//          $greeting = "Hello, Friends!\n";
//          $greeting{0} = "J";
//          $secondary_greeting = "What up?";
//          echo $greeting;
//          echo $secondary_greeting;

//          $bool = TRUE;
//          var_dump($bool);
//          $bool = FALSE;
//          var_dump(($bool) 1);
//          var_dump(($bool) -1);
//          var_dump(($bool) "abc");
//          var_dump(($bool) 0);
//          var_dump(($bool) 2.2);
        ?>
      </pre>
    </section>
    
  </body>
</html>
