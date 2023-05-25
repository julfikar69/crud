<?php

namespace Application\Models;

use Application\Core\Database;

class Rekening
{
    private $table = 'rekening';
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

    public function save($data)
    {
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO rekening(rekening,created_at) VALUES(:rekening,:created_at)";

        $this->db->query($query);
        $this->db->bind('rekening', $data['rekening']);
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
        $query = "UPDATE rekening SET rekening = :rekening, updated_at = :updated_at WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('rekening', $data['rekening']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('updated_at', $date);
        $this->db->execute();

        return $this->db->rowCount();
    }
}