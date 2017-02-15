<?php

function hello($name) {
  if($name == "Dawn") {
    return "Hello Dawn!</br>";
  } else {
    return "Hello Stranger!</br>";
  }
 } //End hello() function

$greeting = hello("Chris");

echo $greeting;
/////////////////////////////////


function add_up($a, $b) {
  return $a + $b;
}//end add_up function

$value = add_up(2, 4);
echo $value;


////////////////////////////////

function calc($a, $b) {
  $arr = array(
    $a,
    $b,
    $a + $b
  );
  return $arr;
}// end calc function

$val = calc(5,3);

print_r($val);

////////////////////////////////

function answer() {
  return 42;
}//end answer func

function subtract ($a, $b) {
  return $a - $b;
}// end subtract function

$func = "subtract";


echo $func(3, 4);

/////////////////////////////////

$person = "Mike";

$greet = function() use($person){ //anonymous function ends with ; !!
  echo "Hi there $person!";

};

$greet();

/////////////////////////////////

?>
