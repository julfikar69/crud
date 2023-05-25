<?php

namespace Application\Controllers;

use Application\Core\Controller;

class AboutController extends Controller
{
    public function index($nama = null, $pekerjaan = "Petani", $umur = 20)
    {
        $judul = 'About';
        $this->view('templates/header', [
            'judul' => $judul
        ]);
        $this->view('about/index', [
            // 'nama' => $about->getUser(),
            'nama' => $this->model('About')->getUser(),
            'pekerjaan' => $pekerjaan,
            'umur' => $umur
        ]);
        $this->view('templates/footer');

    }

    public function page()
    {
        return $this->view('about/page');
    }

    
}
