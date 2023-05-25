<?php

namespace Application\Core;

use Application\Models;

class Controller
{
     public function view($view, $data = [])
     {
         require '../Application/Views/' . $view . '.php';
     }

     public function model($model)
     {
         $model = '\Application\Models\\'.$model;

         return new $model;
     }
}