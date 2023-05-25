<?php

namespace Application\Models;

use Application\Core\Database;

class Kategori
{
    private $table = 'kategori';
    private $db;
    private $stmt;

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

    public function where($cond)
    {
        $query = 'WHERE '.$cond.' ';
        $this->stmt = $this->stmt .$query;
        return $this;
    }
    
    public function find($cond)
    {
        $query = 'WHERE id = '.$cond.' ';
        $this->stmt = $this->stmt .$query;
        $this->db->query($this->stmt);
        return $this->db->single();
    }

    public function get()
    {
        $this->db->query($this->stmt);
        return $this->db->resultSet();
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function save($data)
    {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO kategori(kategori,tipe,created_at) VALUES(:kategori,:tipe,:created_at)";

        $this->db->query($query);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('created_at', $date);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function destroy($id)
    {
        $query = "DELETE FROM ".$this->table." WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $date = date("Y-m-d H:i:s");
        $query = "UPDATE kategori SET kategori = :kategori, tipe = :tipe, updated_at = :updated_at WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('updated_at', $date);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
