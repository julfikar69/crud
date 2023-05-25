<?php

namespace Application\Controllers;

use Application\Core\Controller;

class TransaksiController extends Controller
{
    protected $transaksiRoute = 'Location:' . BASE_URL . '/transaksi';
    protected $header = TEMPLATE_PATH . '/header';
    protected $footer = TEMPLATE_PATH . '/footer';

    public function index()
    {
        $judul = 'Transaksi';
        $data = $this->model('Transaksi')
                        ->select(
                            'rekening.rekening,
                            kategori.kategori,
                            transaksi.id,
                            transaksi.jumlah,
                            transaksi.keterangan,
                            transaksi.tanggal')
                        ->join('rekening', 'rekening_id')
                        ->join('kategori', 'kategori_id')
                        ->get();

        $this->view($this->header,[
            'judul' => $judul
        ]);
        $this->view('transaksi/index', [
            'data' => $data,
            'judul' => $judul
        ]);
        $this->view($this->footer);
    }

    public function create()
    {
        $kategori = $this->model('Kategori')->getAllData();
        $rekening = $this->model('Rekening')->select()->get();


        $judul = 'Form Transaksi';

        $this->view($this->header,[
            'judul' => $judul
        ]);
        $this->view('transaksi/form', [
            'judul' => $judul,
            'kategori' => $kategori,
            'rekening' => $rekening
        ]);
        $this->view($this->footer);
    }

    public function store()
    {
        if ($this->model('Transaksi')->save($_POST) > 0) {
            header($this->transaksiRoute);
            exit;
        }
    }

    
}
