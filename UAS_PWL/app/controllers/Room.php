<?php 

class Room extends Controller{
    public function getRoom($id_schedule){
        $data = (array) $this->model("room_model")->getDataRoom($id_schedule);
        
        echo json_encode($data);
    }
}