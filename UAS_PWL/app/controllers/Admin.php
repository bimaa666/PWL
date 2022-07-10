<?php

class Admin extends Controller
{
    public function index()
    {
        $data["judul"] = "Data Admin";
        $data["daftar"] = "Daftar Admin";
        $data["admin"] = $this->model("Admin_model")->getDataAdmin();
        $this->view("templates/header",$data);
        $this->view("data_toko/admin",$data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Data Admin";
        $data["karyawan"] = $this->model("Karyawan_model")->getDataKaryawan();
        $this->view("templates/header",$data);
        $this->view("admin/tambah_admin",$data);
        $this->view("templates/footer");
    }

    public function tambahAdmin()
    {
        if($this->model("Admin_model")->addAdmin($_POST) > 0){
            Flasher::setFlash("Admin","berhasil","ditambahkan","success");
            header("Location: " . BASEURL ."/admin");
        }else{
            Flasher::setFlash("Admin","gagal","ditambahkan","error");
            header("Location: " . BASEURL ."/admin");
        }
        $_POST = null;
        exit;
    }
    
    public function edit($id)
    {
        $data["judul"] = "Edit Data Admin";
        $data["admin"] = $this->model("Admin_model")->getOneData($id);
        $this->view("templates/header",$data);
        $this->view("admin/edit_admin",$data);
        $this->view("templates/footer");
    }
    
    public function editAdmin()
    {
        if($this->model("Admin_model")->updateData($_POST) > 0){
            Flasher::setFlash("Admin","berhasil","diubah","success");
            header("Location: " . BASEURL ."/admin");
        }else{
            Flasher::setFlash("Admin","gagal","diubah","error");
            header("Location: " . BASEURL ."/admin");
        }
        $_POST = null;
        exit;
    }
    
    public function hapus($id)
    {
        if($this->model("Admin_model")->deleteAdmin($id) > 0){
            Flasher::setFlash("Admin","berhasil","dihapus","success");
            header("Location: " . BASEURL ."/admin");
        }else{
            Flasher::setFlash("Admin","gagal","dihapus","error");
            header("Location: " . BASEURL ."/admin");
        }
        $_POST = null;
        exit;
    }

    public function cari()
    {
        $data["judul"] = "Data Admin";
        $data["daftar"] = "Daftar Admin";
        $data["admin"] = $this->model("Admin_model")->getDataAdminByNama($_POST);
        $this->view("templates/header",$data);
        $this->view("data_toko/admin",$data);
        $this->view("templates/footer");
        $_POST = null;
    }

}