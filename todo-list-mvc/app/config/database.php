<?php

class Database //toda vez que eu for criar um banco volta pra essa classe
{
    private  $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "to_dolist";

    public $conn;
    public function conectar () : mysqli {
        $this->conn = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
       
       if ($this->conn->connect_error) {
        die("Deu erro mana: ". $this->conn->connect_error);
       }
        return $this->conn;
        
}
}   


?>