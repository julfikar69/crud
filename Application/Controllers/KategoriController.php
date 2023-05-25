<?php

namespace Application\Controllers;

use Application\Core\Controller;

class KategoriController extends Controller
{
    protected $kategoriRoute = 'Location:' . BASE_URL . '/kategori';
    protected $header = TEMPLATE_PATH . '/header';
    protected $footer = TEMPLATE_PATH . '/footer';

    public function index()
    {
        $data = $this->model('Kategori')->getAllData();
        $judul = 'Kategori';

        $this->view($this->header,[
            'judul' => $judul
        ]);
        $this->view('kategori/index', [
            'data' => $data,
            'judul' => $judul
        ]);
        $this->view($this->footer);
    }

    public function create()
    {
        $judul = 'Form Kategori';

        $this->view($this->header,[
            'judul' => $judul
        ]);
        $this->view('kategori/form', [
            'judul' => $judul
        ]);
        $this->view($this->footer);
    }

    public function store()
    {
        if ($this->model('Kategori')->save($_POST) > 0) {
            header($this->kategoriRoute);
            exit;
        }
    }
    
    public function edit($id)
    {
        $data = $this->model('Kategori')->select()->find($id);
        $judul = 'Edit Kategori';

        $this->view($this->header,[
            'judul' => $judul
        ]);
        $this->view('kategori/edit', [
            'data' => $data,
            'judul' => $judul
        ]);
        $this->view($this->footer);
    }

    public function update()
    {
        if ($this->model('Kategori')->update($_POST) > 0) {
            header($this->kategoriRoute);
            exit;
        }
    }

    public function destroy($id)
    {
        if ($this->model('Kategori')->destroy($id) > 0) {
            header($this->kategoriRoute);
            exit;
        }
    }
}
