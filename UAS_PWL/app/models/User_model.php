<?php

class User_model{
    private $db;
    private $table = "users";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function login(){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE email=:email AND password=:password");
        $this->db->bind("email",$_POST["email"]);
        $this->db->bind("password",$_POST["password"]);
        $this->db->execute();
        return $this->db->single();
    }
    
    public function cekRegister(){
        $this->db->query("INSERT INTO users VALUES(null, :username, :email, :password, 'user', :tanggal_lahir, :alamat, :nomor_telp);");
        $this->db->bind("username",$_POST["username"]);
        $this->db->bind("email",$_POST["email"]);
        $this->db->bind("password",$_POST["password"]);
        $this->db->bind("tanggal_lahir",$_POST["tanggal_lahir"]);
        $this->db->bind("alamat",$_POST["alamat"]);
        $this->db->bind("nomor_telp",$_POST["nomor_telp"]);
        $this->db->execute();
        return $this->db->rowCount();
    }
}