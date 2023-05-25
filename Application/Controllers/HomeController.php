<?php

namespace Application\Controllers;


class HomeController extends \Application\Core\Controller
{
    public function index()
    {
        return $this->view('home/index');
    }
}


