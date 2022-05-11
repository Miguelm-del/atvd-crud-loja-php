<?php
class Database {

    private $username = "root";
    private $senha = "6655321@Lm";
    private $database = "loja";
    private $conexao;

    function __construct(){
        $this->conexao = new PDO("mysql:host=localhost;dbname=$this->database", $this->username, $this->senha);
        // $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function getConexao(){
        return $this->conexao;
    }

}