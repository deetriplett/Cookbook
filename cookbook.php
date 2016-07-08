<?php

include "classes/recipes.php";
include "classes/render.php;

$recipe1 = new Recipe("lemon bars");
$recipe1->setSource = "Memaw";
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");


$recipe2 = new Recipe("chocolate mud cake");
$recipe2->setSource = "Betty Crocker";

$recipe1->addInstruction("Whisk eggs");
$recipe1->addInstruction("Fold in flour");


$recipe1->addTag("lemon");
$recipe1->addTag("dessert");

$recipe1->setYield("6 servings");

echo Render::displayRecipe($recipe1);
