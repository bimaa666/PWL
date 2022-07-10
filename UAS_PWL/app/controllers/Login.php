<?php 

class Login extends Controller{
    public function __construct()
    {
        if(isset($_SESSION["login"])){
            if($_SESSION["login"] == true ){
                if($_SESSION["auth"]->role == "user"){
                    header("Location: " . BASEURL . "/home");
                }else{
                    header("Location: " . BASEURL . "/admin");      
                }
            }
        }
    }

    public function index(){
        $data = (object) ["title" => "login"];
        $this->view("auth/login", $data);
    }

    public function cekLogin(){
        if($data = $this->model("User_model")->login()){
            unset($_POST["username"]);
            unset($_POST["password"]);
            $_SESSION["login"] = true;
            $_SESSION["auth"] = (object) $data;
            Flasher::setFlash("Berhasil Login", "success");
            header("Location: " . BASEURL . "/home");
        }else{
            header("Location: " . BASEURL . "/login");
        }
    }

    public function register(){
        $data = (object) ["title" => "Register"];
        $this->view("auth/register", $data);
    }

    public function cekRegister(){
        if($this->model("user_model")->cekRegister() > 0){
            Flasher::setFlash("Pendaftaran Berhasil", "success");
            header("Location: " . BASEURL . "/login");
        }else{
            Flasher::setFlash("Pendaftaran Gagal", "danger");
            header("Location: " . BASEURL . "/login/register");
        }
    }
}