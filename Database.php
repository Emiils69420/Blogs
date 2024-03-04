<?php

class Database{

private $pdo;

public function __construct($config){

    /*dd("mysql: " . http_build_query($config, "",";"));*/
    $connection_string = "mysql:host=$config[host];dbname=blog_darzins;user=root;password=;charset=utf8mb4";
    $this->pdo = new PDO($connection_string);
    $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
}


    public function execute() {

    $query =  $this->pdo->prepare("SELECT * FROM posts");

    $query->execute();

    return $query;
    }  
}