<?php
use EmilieSabathier\controller\front\FrontController;

require 'controller/front/frontController.php';

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'listrecipes') {

        $recipesManager = new FrontController();
        $recipesManager->listRecipes();

    } elseif ($_GET['action'] == 'recipe') {

        $recipesManager = new FrontController();
        $recipesManager->displayRecipe($_GET['idRecipe']);

    } elseif ($_GET['action'] == "") {

        header('Location: index.php');

    } 
    
} else {

    $recipesManager = new FrontController();
    $recipesManager->listRecipes();

}
