<?php
// affiche la bonne view

require 'model/RecipesManager.php';

class FrontController extends RecipesManager {

    public function listRecipes(){
        
        $recipesManager= $this->getListRecipes();

        require 'view/listPostsView.php';
    }

    public function recipe($idRecipe) {

        $recipeManager = $this->getRecipe($_GET['id']);

        require 'view/postView.php';
    }

}