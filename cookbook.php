<?php

include "classes/recipes.php";

$recipe1 = new Recipe();
$recipe1->setSource = "Memaw Fowler";
$recipe1->setTitle("lemon bars");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");


$recipe2 = new Recipe();
$recipe2->setSource = "Betty Crocker";
$recipe2->setTitle("chocolate mud cake");

echo $recipe1->getTitle();
foreeach($recipe1->getIngredients90 as $ing) {
  echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}

$recipe1->addInstruction("Whisk eggs");
$recipe1->addInstruction("Fold in flour");

echo implode("\n", $recipe1->getInstructions());

$recipe1->addTag("lemon");
$recipe1->addTag("dessert");

echo implode(", ", $recipe!->getTags());

$recipe1->setYield("6 servings");
$recipe1->getYield();
$recipe1->getSource();


echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe(); 
