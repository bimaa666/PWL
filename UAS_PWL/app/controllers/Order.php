<?php 

class Order extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION["login"])){
            header("Location: " . BASEURL . "/login");
        }
        if($_SESSION["login"] == false){
            header("Location: " . BASEURL . "/login");      
        }
    }

    public function film($id_film){
        $data = (object) [
            "title" => "Booking",
            "film" => $this->model("film_model")->getSingleData($id_film),
            "schedules" => $this->model("schedule_model")->getDataSchedules($id_film),
        ];
        $this->view("templates/heading", $data);
        $this->view("order/index", $data);
        $this->view("templates/footer");   
    }

    public function booking(){
        if(!$this->model("order_model")->cekKursi()){
            // var_dump($this->model("schedule_model")->getSingleData($_POST["tanggal_penayangan"]));die();
            $data_schedule = $this->model("schedule_model")->getSingleData($_POST["tanggal_penayangan"]);
            $_POST["tanggal_penayangan"] = $data_schedule->tanggal_penayangan;
            $_POST["id_schedule"] = $data_schedule->id_schedule;
            $_POST["nomor_kursi"] = $this->model("seatlist_model")->getSingleData($_POST["nomor_kursi"])->nomor_kursi;
            if($this->model("order_model")->tambahOrder()){
                // Flasher::setFlash("Order Berhasil", "danger");
                $id = $this->model("order_model")->getLastData()->id_order;
                header("Location: " . BASEURL . "/order/detail_history/" . $id);
            }else{
                Flasher::setFlash("Gagal menambah data", "danger");
                header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
        }else{
            Flasher::setFlash("Kursi Sudah di booking, mohon pilih Kursi Yang Lain", "danger");
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
    }

    public function history()
    {
        $data = (object) [
            "title" => "History",
            "orders" => $this->model("order_model")->getDataById()
        ];
        $this->view("templates/heading", $data);
        $this->view("home/history", $data);
        $this->view("templates/footer");  
    }

    public function detail_history($id)
    {
        $data = (object) [
            "title" => "Detail History",
            "order" => $this->model("order_model")->getSingleData($id)
        ];
        $this->view("home/detail_history", $data);
    }
    
}