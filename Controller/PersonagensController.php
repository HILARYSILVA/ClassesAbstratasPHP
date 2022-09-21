<?php

namespace App\Controller;

use App\Model\PersonagensModel;
class PersonagensController extends Controller
{

    public static function index() 
    { 
        $model = new PersonagensModel();
        $model->getAllRows();
        parent::render("Personagens/ListaPersonagens", $model);
    }

    
    public static function form()
    {
        $model = new PersonagensModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
       parent::render("Personagens/FormPersonagens", $model);
    }


    public static function save() {

        include 'Model/PersonagensModel.php'; 
        $Personagens = new PersonagensModel();
        $Personagens->id = $_POST['id'];
        $Personagens->nome = $_POST['nome'];
        $Personagens->qualidades = $_POST['qualidades'];
        $Personagens->hobby = $_POST['hobby'];

        $Personagens->save();  

        header("Location: /Personagens"); 
    }

    public static function delete()
    {
        include 'Model/PersonagensModel.php'; 

        $model = new PersonagensModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Personagens"); 
    }

}