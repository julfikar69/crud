<?php

namespace Application\Controllers;

use Application\Core\Controller;

class RekeningController extends Controller
{
    protected $rekeningRoute = 'Location:' . BASE_URL . '/rekening';

    public function index()
    {
        $data = $this->model('Rekening')->select()->get();
        $judul = 'Rekening';

        $templatePath = 'templates';
        $this->view($templatePath.'/header',[
            'judul' => $judul
        ]);
        $this->view('rekening/index', [
            'data' => $data,
            'judul' => $judul
        ]);
        $this->view($templatePath.'/footer');
    }

    public function create()
    {
        $judul = 'Form Rekening';

        $this->view('templates/header',[
            'judul' => $judul
        ]);
        $this->view('rekening/form', [
            'judul' => $judul
        ]);
        $this->view('templates/footer');
    }

    public function store()
    {
        if ($this->model('Rekening')->save($_POST) > 0) {
            header($this->rekeningRoute);
            exit;
        }
    }
    
    public function edit($id)
    {
        $data = $this->model('Rekening')->select()->find($id);
        $judul = 'Edit Rekening';
        $this->view('templates/header',[
            'judul' => $judul
        ]);
        $this->view('rekening/edit', [
            'data' => $data,
            'judul' => $judul
        ]);
        $this->view('templates/footer');
    }

    public function update()
    {
        if ($this->model('Rekening')->update($_POST) > 0) {
            header($this->rekeningRoute);
            exit;
        }
    }

    public function destroy($id)
    {
        if ($this->model('Rekening')->destroy($id) > 0) {
            header($this->rekeningRoute);
            exit;
        }
    }

    

}
