<?php

namespace App\Model;

use App\DAO\PersonagensDAO;

class PersonagensModel extends Model
{
   
    public $id, $nome, $qualidades, $hobby;
   
    
    public $rows;

   
    public function save()
    {

        $dao = new PersonagensDAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        else 
        {
            $dao->update($this);
      
        }
    }
        public function getAllRows()
        {
            $dao = new PersonagensDAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {

            $dao = new PersonagensDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new PersonagensModel();
        }

        public function delete(int $id)
    { 

        $dao = new PersonagensDAO();

        $dao->delete($id);
    }

    }