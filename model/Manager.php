<?php

namespace EmilieSabathier\model;

class Manager
{

    protected function dbconnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=db_recipes;charset=utf8', 'root', '');
        return $db;
    }

}
