<?php

class SeatList_model{
    private $db;
    private $table = "seat_lists";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSingleData($id){
        $this->db->query("SELECT * FROM seat_lists WHERE id_seat_list=:id");
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->single();
    }

}