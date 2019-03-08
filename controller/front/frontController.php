<?php
namespace EmilieSabathier\controller\front;
use EmilieSabathier\model\RecipesManager;

require_once 'model/RecipesManager.php';

class FrontController {

    public function listRecipes(){
        
        $recipesManager = new RecipesManager();
        $recipes = $recipesManager->getListRecipes(); 

        require 'view/listRecipesView.php';
        // on est tjs dans cette fonction avec la view
    }

    public function displayRecipe($idRecipe) {
        $recipe-> $recipesManager->getRecipe($idRecipe);

        require 'view/recipeView.php';
    }
}