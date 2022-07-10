<?php 

class Logout extends Controller{
    public function index(){
        $_SESSION["login"] = false;
        session_destroy();
        header("Location: " . BASEURL . "/login/index");
    }
}