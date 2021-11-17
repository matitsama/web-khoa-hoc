<?php
 class KhoaHocCTL extends Controller{
     public function tatCaKhoaHoc()
     {
        $model = $this->model("KhoaHocMD");
        $data = $model->tatCaKhoaHoc();
        $this->view([
            "data" => $data,
            "view" => "Home"]);
     }
 }
?>