<?php

namespace Application\Models;

use Application\Core\Database;

class Transaksi
{
    private $table = 'transaksi';
    private $db;
    private $stmt = '';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function select($option = '*')
    {
        $query = 'SELECT '.$option.' FROM ' . $this->table . ' ';
        $this->stmt = $this->stmt .$query;
        return $this;
    }

    public function save($data)
    {
        $date = date("Y-m-d H:i:s");
        $jam = strtotime($data['jam']);
        $newJam = date('H:i:s', $jam);

        $tanggalTransaksi = $data['tanggal']. ' ' .$newJam;

        $query = "INSERT INTO
         transaksi(rekening_id,kategori_id,jumlah,keterangan,tanggal,created_at)
         VALUES(:rekening,:kategori,:jumlah,:keterangan,:tanggal,:created_at)";

        $this->db->query($query);
        $this->db->bind('rekening', $data['rekening']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('tanggal', $tanggalTransaksi);
        $this->db->bind('created_at', $date);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function join($table, $fk)
    {
        $query = 'JOIN '.$table.' ON '.$table.'.id = '.$fk.' ';
        $this->stmt = $this->stmt .$query;
        return $this;
    }

    public function get()
    {
        $this->db->query($this->stmt);
        return $this->db->resultSet();
    }
    
    public function destroy($id)
    {
        $query = "DELETE FROM ".$this->table." WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}