<?php
class Controller{
    public function model($model)
    {
        if(file_exists("./mvc/models/".$model.".php"))
        {
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }
        return -1;
    }

    public function view($data = [])
    {
        require_once "./mvc/views/MasterView.php";
    }
}
?>