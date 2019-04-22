<?php

use \recipes\controller\FrontController;
use \recipes\Autoloader;

require 'Autoloader.php';
Autoloader::register();

if (isset($_GET['action'])) {

    $recipesManager = new FrontController();

    if ($_GET['action'] == 'listrecipes') {
        $recipesManager->listRecipes();
    } elseif ($_GET['action'] == 'recipe') {
        $recipesManager->displayRecipe($_GET['idRecipe']);
    }  else {
        header('Location: index.php');
    }
} else {
    
    $recipesManager = new FrontController();
    $recipesManager->listRecipes();

}
