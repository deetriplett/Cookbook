<?php

class Recipe 
{
  private $title;
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Dawn Monroe";
  
  public function setTitle($title)
    {
      $this->title = ucwords($title);
    }
  
  public function getTitle()
    {
     return $this->title; 
    }
  
  public function displayRecipe()
    {
     return $this->title . " by " . $this->source;
    }
  
}

$recipe1 = new Recipe();
$recipe1 ->source = "Memaw Fowler";
$recipe1->setTitle("lemon bars");


$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
$recipe2-> setTitle("chocolate mud cake");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe(); 
