<?php
class App{
    public $controller = "KhoaHocCTL";
    public $action = "tatCaKhoaHoc";
    public $params = [];

    public function __construct()
    {
        $request = $this->getUrl();
        // controller
        if(isset($request[0])){
            if(file_exists("./mvc/controllers/".$request[0].".php")){
                    $this->controller = $request[0];
                }
                unset($request[0]);
        }
        // require controller de kiem tra xem action method có trong controller hay không
        require_once "./mvc/controllers/".$this->controller.".php";
        // kiểm tra action có tồn tại hay không
        if(isset($request[1])){
            if(method_exists($this->controller,$request[1]))
            {
                $this->action = $request[1];
            }
            unset($request[1]);
        }
        // params - các tham số của hàm (action)
        $this->params = $request?array_values($request):[];
        // call actions
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller,$this->action],$this->params);

    }
    
    public function getUrl()
    {
        if(isset($_GET['url']))
        {
            return explode('/',filter_var(trim($_GET['url'], '/')));
        }
    }
}
?>