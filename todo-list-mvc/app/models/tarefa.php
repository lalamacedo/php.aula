<?php
require_once __DIR__ .'/../config/database.php';

class Tarefa {
    private $conn;

    public function __construct() //cria um banco e atribui a classe database os atributos
     { 
        $db = new Database();
        $this->conn = $db->connect();

    }


}



?>