<?php

class Film_model{
    private $db;
    private $table = "films";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){
        $this->db->query("SELECT * FROM " . $this->table);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getSingleData($id){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id_film=:id_film");
        $this->db->bind("id_film", $id);
        $this->db->execute();
        return $this->db->single();
    }
}