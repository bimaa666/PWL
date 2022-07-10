<?php

class Room_model{
    private $db;
    private $table = "rooms";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataRoom($id_schedule){
        $this->db->query("SELECT * FROM schedules 
                    JOIN " . $this->table . " USING(id_room)
                    JOIN seat_lists USING(id_room)
                    WHERE id_schedule=:id_schedule");
        $this->db->bind("id_schedule", $id_schedule);
        $this->db->execute();
        return $this->db->resultSet();

    }

}