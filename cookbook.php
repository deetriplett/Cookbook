<?php

include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/allrecipes.php";

$cookbook = new RecipeCollection("Monroe Recipes");
$cookbook-> addRecipe();
echo Render::displayRecipe($belgian_waffles);
