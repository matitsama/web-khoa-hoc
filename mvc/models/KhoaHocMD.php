<?php
class KhoaHocMD extends Database{
    public function tatCaKhoaHoc()
    {
        $sql = "SELECT * FROM cackhoahoc";
        $dbData = mysqli_query($this->connect, $sql);
        $data = array();
        while($row = mysqli_fetch_array($dbData))
        {
            $data[] = $row;
        }
        echo(json_encode($data,JSON_PRETTY_PRINT));
        return json_encode($data,JSON_PRETTY_PRINT);
    }
}
?>