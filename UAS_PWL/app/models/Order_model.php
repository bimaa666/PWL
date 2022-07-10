<?php

class Order_model{
    private $db;
    private $table = "orders";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataById(){
        $this->db->query("SELECT * FROM orders WHERE id_user=:id_user");
        $this->db->bind("id_user", $_SESSION["auth"]->id_user);
        $this->db->execute();
        return $this->db->resultSet();
    }
    
    public function getSingleData($id){
        $this->db->query("SELECT * FROM orders WHERE id_order=:id");
        $this->db->bind("id", $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function cekKursi(){
        $this->db->query("SELECT * FROM schedules
                            JOIN orders USING (id_schedule)
                            WHERE id_schedule=:id_schedule AND nomor_kursi=:nomor_kursi");
        $this->db->bind("id_schedule", $_POST["tanggal_penayangan"]);
        $this->db->bind("nomor_kursi", $_POST["nomor_kursi"]);
        $this->db->execute();
        return $this->db->single();
    }

    public function tambahOrder(){
        $this->db->query("INSERT INTO orders VALUES(null, :id_user, :id_schedule, :judul_film, :nama_ruang, :nomor_kursi, NOW(), :tanggal_penayangan )");
        $this->db->bind("id_user", $_SESSION["auth"]->id_user);
        $this->db->bind("id_schedule", $_POST["id_schedule"]);
        $this->db->bind("judul_film", $_POST["judul_film"]);
        $this->db->bind("nama_ruang", $_POST["nama_ruang"]);
        $this->db->bind("nomor_kursi", $_POST["nomor_kursi"]);
        $this->db->bind("tanggal_penayangan", $_POST["tanggal_penayangan"]);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getLastData(){
        $this->db->query("SELECT * FROM orders ORDER BY id_order DESC LIMIT 1");
        $this->db->execute();
        return $this->db->single();
    }

}