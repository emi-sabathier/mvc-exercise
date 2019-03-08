<?php
use EmilieSabathier\controller\front\FrontController;

require 'controller/front/frontController.php';

try {

    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'listrecipes') {

            $recipesManager = new FrontController();
            $recipesManager->listRecipes();

        } elseif ($_GET['action'] == 'recipe') {

            if ($_GET['idRecipe'] && $idRecipe > 0) {

                displayRecipe($idRecipe);
                require 'view/recipeView.php';

            } else {
                throw new Exception('Pas d\'identifiant de recette sélectionné');
            }
        }

    } else {

        $recipesManager = new FrontController();
        $recipesManager->listRecipes();        
        
    }

} catch (Exception $e) {

    $errorMessage = $e->getMessage();
    require 'view/errorView.php';

}
