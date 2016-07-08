<?php

class RecipeCollection
{
  private $title;
  private $recipes = array();
  
/// Create Title for Recipes ///  
  public function __construct($title = null)
  {
    $this->setTitle($title);
  }
  
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
   
 /// Add a Recipe to the Array List ///
  public function addRecipe($recipe)
  {
    $this->recipes[] = $recipe;
  }
  
 /// Retrieve Recipes ///
  public function getRecipes()
  {
    return $this->recipes;
  }
  
  public function getRecipeTitles()
  {
    $titles = array();
    foreach ($this->recipe->getTitle()) {
      return $titles;
    }
  }

/// GET COMBINED INGREDIENTS ///  
public function getCombinedIngredients()
    {
        $ingredients = array();
        foreach ($this->recipes as $recipe) {
          foreach($recipe->getIngredients() as $ing) {
            $item = $ing["item"];
            if (strpos($item, ",")) {
              $item = strstr($item, ",", true);
              }
             if (in_array($item."s", $ingredients)) {
              $item.="s";
              } else if (in_array(substr($item, 0, -1), $ingredients)) {
              $item = substr($item, 0, -1);
              }
              $ingredients[$item] = array (
                $ing["amount"],
                $ing["measure"]
                );
              }
            }
           
        return $ingredients;
    }   
  
///Filter Recipes by Tags ///    
  public function filterByTags($tag)
  {
    $taggedRecipes = array();
    foreach ($this->recipes as $recipe) {
      if(in_array(strtolower($tag), $recipe->getTags())) {
        $taggedRecipes[] = $recipe;
      }
    }
    return $taggedRecipes;
   }
             
/// Filter Recipes by Array Key/ID ///
public function filterById($id)
        {
          return $this->recipes[$id];
             }
}//end class RecipeCollection
