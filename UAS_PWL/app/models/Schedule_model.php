<?php

class Schedule_model{
    private $db;
    private $table = "schedules";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataSchedules($id_film){
        $this->db->query("SELECT * FROM ". $this->table ." WHERE id_film=:id_film");
        $this->db->bind("id_film", $id_film);
        $this->db->execute();
        return $this->db->resultSet();
    }
    
    public function getSingleData($id){
        $this->db->query("SELECT * FROM ". $this->table ." WHERE id_schedule=:id_schedule");
        $this->db->bind("id_schedule", $id);
        $this->db->execute();
        return $this->db->single();
    }
}