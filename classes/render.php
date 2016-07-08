<?php

class Render
{
  public function __toString()
  {
    $output - "The following methods are available for " . __CLASS__ . " objects: \n";
    $output .= implode("\n", get_class_methods(__CLASS__));
  }
    return $output;
   
 /// Create Shopping List Method ///
    public static function listShopping($ingredients_list)
    {
      ksort($ingredients_list);
      return implode("\n", array_keys($ingredients_list));
    }
 
 /// Create a Recipe List ///
    public static function listRecipes($titles)
    {
      asort($titles);
      $output ="";
      foreach ($titles as $key => $title) {
        if ($output != "") {
          $output .= "\n";
        }
        $output .= "[$key] $title";
      }
        
      return $output;
    }

/// Create an Ingredient List ///
  public static function listIngredients($ingredients)
    {
      $output = "";
      foreach ($ingredients as $ing) {
       $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
      return $output;
    }
  } 
 /// Display all recipe Info ///
   public static function displayRecipe($recipe)
    {
     $output = "";
     $output .= $recipe->getTitle() . " by " . $this->getSource();
     $output .= "\n";
     $output .= implode(", ",$recipe->getTags());
     $output .= "\n";
     $output .= self::listIngredients($recipe->getIngredients());
     $output .= "\n";
     
       $output .= "\n";
     
     $output .= "\n";
     $output .= implode("\n",$recipe->getInstructions());
     $output .= "\n";
     $output .= $recipe->getYield();
     
     return $output;
    }
}

