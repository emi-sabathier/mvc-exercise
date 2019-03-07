<?php

namespace TP_recipes\model;

class Manager
{

    protected function dbconnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        return $db;
    }

}
