<?php

require 'Manager.php';

class RecipesManager extends Manager {

    protected function getListRecipes() {

        $db = $this->dbconnect(); // this.dbConnect()
        $q = $db->prepare('SELECT id, title, author, DATE_FORMAT(date_creation, \'%d/%m/%Y %H:%i:%s\') AS date_fr FROM recipes ORDER BY date_creation DESC');
        $q->execute();
        $dataListPosts = $q->fetch();

        return $dataListPosts;
    }

    protected function getRecipe($idRecipe) {

        $db = $this->dbConnect();
        $q = $db->prepare('SELECT id, title, author, content FROM recipes WHERE id = ?');
        $q->execute(array($idRecipe));
        $dataRecipe = $q->fetch(); 

        return $dataRecipe;

    }
}



