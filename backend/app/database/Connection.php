<?php

namespace app\database;
use PDO;

class Connection{
    public function connect(){
        return new PDO("mysql:host=localhost;dbname=osdb", "root", "",[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }
}