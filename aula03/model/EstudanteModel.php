<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula03/model/Database.php';

class EstudanteModel 
{
    private int $idade;

    private string $nome;

    private $database;

    //Getters and setters
    public function __construct()
    {
        $this->database = new Database();
    }
    

        public function listarModel(): array
        {
            $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
            
            
            //$array = array();
            //$array = array[]; 
            return $dadosArray;
        }

        public function salvarModel(string $nome, int $idade)
        {
            $sql = "INSERT into estudantes (nome, idade) values ('$nome', '$idade')";
            $this->database->insert($sql);
            echo"Estudante salvo com sucesso!";
        }
}