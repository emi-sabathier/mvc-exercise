<?php

require 'controller/front/frontController.php';

$action = $_GET['action'];
$idRecipe = $_GET['idRecipe'];

try {

    if (isset($action)) {

        if (isset($action) == 'listRecipes') {

            listRecipes();

            require 'view/listRecipesView.php';

        } elseif (isset($action) ==  'recipe' ) {

            if (isset($idRecipe) && $idRecipe > 0) {

                recipe($idRecipe);
                require 'view/recipeView.php';

            } else {
                throw new Exception ('Pas d\'identifiant de recette sélectionné');
            }
        }

    } else {
        listRecipes();
        require 'view/listRecipesView.php';
    }

} catch (Exception $e) {

    $errorMessage = $e->getMessage();
    require 'view/errorView.php';

}
