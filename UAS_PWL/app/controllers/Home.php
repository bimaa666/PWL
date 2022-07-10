<?php 

class Home extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION["login"])){
            header("Location: " . BASEURL . "/login");
        }
        if($_SESSION["login"] == false){
            header("Location: " . BASEURL . "/login");      
        }
    }

    public function index(){
        $data = (object) [
            "title" => "Daftar Film",
            "films" => $this->model("film_model")->getData()
        ];
        $this->view("templates/heading", $data);
        $this->view("home/index", $data);
        $this->view("templates/footer");   
    }
    
    public function film($id){
        if($film = $this->model("film_model")->getSingleData($id)){
            $data = (object) [
                "title" => "Detail Films",
                "film" => $film
            ];
            $this->view("templates/heading", $data);
            $this->view("home/film", $data);
            $this->view("templates/footer");   
        }
    }
}