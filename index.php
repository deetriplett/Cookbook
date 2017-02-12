<?php 
define("YEAR", 2016);
define("TITLE", "Web Developer");
define("SALARY", 65000);
define("USE_FULL_NAME", TRUE);

//This is my first name
// $first_name = "Dawn";
// $last_name = "Monroe";
// $location = "Louisville KY";
// $full_name = "Dawn Monroe";
// $role = "Web Developer";

//Conditional IF: run this code if USE FULL NAME is true
if(USE_FULL_NAME == TRUE){
  $name = $first_name + ' ' + $last_name;
  }
  else{
    $name = $first_name;
  };

  if($role == 'Teacher'){
    $info + "I am CDN";
    } elseif ( $role == 'Sanders' ) { $info = "i AM A Student at treehouse";} else {$info = "I am just visiting";
    }

$social_icons = array("twitter", "facebook", "google", "linkedin");



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
        <img src="placeimg.com/200/200/tech" alt="Place Holder">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to my Resume!</p>
      <hr />
      <ul class="social">
        <?php 
          foreach($social_icons as $icon){
         ?>
         <li><a href=""><span class="icon <?php echo $icon ?>"></span></a></li>
    <?php     
  }?> 
        
     
      </ul>
    </section>
    <section class="main">
    <ul>
 
   <?php 
   //if/elseif
   $name = "Mike";
    if ($name == "Mike") {
    echo "Hi, I am Mike!";
    } else { echo "Hello, Stranger!"; }

    //for loops
    for( $counter = 1; $counter < 10; $counter++ ){
    echo "<li>" . $counter . "</li>";  }
    ?>
      
    //for each loops
    
      <?php
     $nicknames = array("Ding Dong", "Ruby Gooby", "Chrish Chrish", "Jack Butt");
      
     foreach($nicknames as $a_name){
        echo $a_name . "<\br>"; }  
    ?>
    </ul>
   
    </section>
  </body>
</html>
