<?php

namespace App\DAO;

use App\Model\PersonagensModel;

use \PDO;
class PersonagensDAO extends DAO
{

    private $conexao;


    function __construct() 
    {
        
        parent::__construct();
    }


    
    function insert(PersonagensModel $model) 
    {
        
        $sql = "INSERT INTO personagens
                (nome, qualidades,hobby) 
                VALUES (?, ?,?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->qualidades);
        $stmt->bindValue(3, $model->hobby);
        $stmt->execute();      

    }

    public function update(PersonagensModel $model)
    {
        $sql = "UPDATE personagens SET nome=?, qualidades=? , hobby=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->qualidades);
        $stmt->bindValue(3, $model->hobby);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM personagens";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/PersonagensModel.php';

        $sql = "SELECT * FROM personagens WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("PersonagensModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM personagens WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
