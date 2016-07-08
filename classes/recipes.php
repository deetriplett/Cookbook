<?php

class Recipe 
{
  private $title;
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  public $source = "Dawn Monroe";
  
 /// Different Measurements Array ///
  private $measurements = array(
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "lb",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );
 
  /// Create Title ///
  public function __construct($title = null)
  {
    $this->setTitle($title);
  }
  
  /// Find Info about Object ///
  public function __toString()
  {
      $output = "You are calling a " . __CLASS__ . " object with the title \"";
      $output .= $this->getTitle() . "\"";
      $output .= "\n It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
      $output .= "\n This display is from line " . __LINE__ . " in method " . __METHOD__;
      $output .= "\n The following methods are available for objects of this class: \n";
      $output .= implode("\n", get_class_methods(__CLASS__));
      return $output;   
  }
  
  /// TITLE ///
  public function setTitle($title)
    {
      if (empty($title)) {
        $this->title = null; 
      } else {
        $this->title = ucwords($title);
    }
  }
  
  public function getTitle()
    {
     return $this->title; 
    }
  
/// Add a New Ingredient ///  
  public function addIngredient($item, $amount = null, $measure = null)
  {
    if ($amount != null && !is_float($amount) && !is_int($amount)) {
      exit("The amount must be a float: " . gettype($amount) . " $amount given");
    }
    
    if ($measure !=null && !in_array(strtolower$measure, $this->measurements)) {
      exit("Please enter a valid measurement! " . implode(", ", $this->measurements));
    }
    
    $this->ingredients[] = array(
      "item" => ucwords($item),
      "amount" => ($amount),
      "measure" => strtolower($measure)
    );
  }
  
  /// Add a New Recipe Instruction /// 
  public function addInstruction($string)
    {
      $this->instructions[] = $string;
    }
  
  /// Retrieve Recipe Instructions ///
  public function getInstructions()
    {
      return $this->instructions;
    }
  
  /// Add/Get Tag for a Recipe ///
  
  public function addTag($tag)
    {
      $this->tags[]= strtolower($tag);
    }
  
  public function getTags()
    {
      return $this->tags;
    }
  
/// Set/Get yield for a recipe ///
  public function setYield($yield)
    {
     $this->yield = $yield;
    }

  public function getYield()
    {
     return $this->yield;
    }
  
/// Set/ Get Source of a Recipe ///
  public function setSource($source)
    {
     $this->source = ($source);
    }

  public function getSource()
    {
     return $this->source;
    }

 
  

