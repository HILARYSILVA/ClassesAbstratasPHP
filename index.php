<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use App\Controller\PersonagensController;

switch ($uri_parse) 
{
      case '/Personagens':
            PersonagensController::index();
            break;

      case '/Personagens/form':
            PersonagensController::form();
            break;

      case '/Personagens/save':
            PersonagensController::save();
            break;

      case '/Personagens/delete':
            PersonagensController::delete();
            break;
      }