<?php

class Admin_model{
    private $db;
    private $table = "admin";
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin()
    {
        $this->db->query("SELECT id_admin FROM " . $this->table . " WHERE username=:username AND password=:password");
        $this->db->bind("username",$_POST["username"]);
        $this->db->bind("password",$_POST["password"]);
        $this->db->execute();
        unset($_POST["username"]);
        unset($_POST["password"]);
        return $this->db->single();
    }

    public function getDataAdmin()
    {
        $this->db->query("SELECT * FROM admin AS a
                        JOIN karyawan AS k
                            ON a.id_karyawan = k.id_karyawan");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function addAdmin($data)
    {
        try{
            $this->db->query("INSERT INTO admin (id_karyawan, username, password)
                        VALUES (:id_karyawan, :username, :password)");
            $this->db->bind("id_karyawan",$data["id_karyawan"]);
            $this->db->bind("username",$data["username"]);
            $this->db->bind("password",$data["password"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    function getOneData($id)
    {
        $this->db->query("SELECT * FROM admin WHERE id_admin = :id_admin");
        $this->db->bind("id_admin",$id);
        $this->db->execute();
        return $this->db->single();
    }

    function updateData($data)
    {
        try{
            $this->db->query("UPDATE admin SET
                                username = :username,
                                password = :password
                            WHERE id_admin = :id_admin");
            $this->db->bind("id_admin",$data["id_admin"]);
            $this->db->bind("username",$data["username"]);
            $this->db->bind("password",$data["password"]);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }
    
    public function deleteAdmin($id)
    {
        try{
            $this->db->query("DELETE FROM admin WHERE id_admin = :id_admin");
            $this->db->bind("id_admin",$id);
            $this->db->execute();
        }catch(PDOException $e){
            return 0;
        }
        return $this->db->rowCount();
    }

    public function getDataAdminByNama($data)
    {
        $this->db->query("SELECT * FROM admin AS a
                        JOIN karyawan AS k
                            ON a.id_karyawan = k.id_karyawan
                        WHERE nama_karyawan LIKE '%". $data["cari"] ."%'");
        $this->db->execute();
        return $this->db->resultSet();
    }
}