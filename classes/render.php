<?php

class Render
{
  
  public static function listIngredients($ingredients)
    {
      $output = "";
      foreach ($ingredients as $ing) {
       $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
      return $output;
    }
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
     }
     $output .= "\n";
     $output .= implode("\n",$recipe->getInstructions());
     $output .= "\n";
     $output .= $recipe->getYield();
     
     return $output;
    }
}

