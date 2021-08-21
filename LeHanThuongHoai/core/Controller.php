<?php
class Controller{
    
    public function ModelClient($model){
        require_once "./LeHanThuongHoai/client/models/".$model.".php";
        return new $model;
    }

    public function ViewClient($view, $data=[]){
        require_once "./LeHanThuongHoai/client/views/".$view.".php";
    }

    public function redirect($url){
        header('Location: '.HOST.$url);
    }
}

?>