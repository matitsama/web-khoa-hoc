<?php
class Database{
    public $connect;
    protected $serverName = "localhost";
    protected $userName = "root";
    protected $password = "";
    protected $dbName = "dbkhoahoc";

    public function __construct()
    {
        $this->connect = mysqli_connect($this->serverName,$this->userName,$this->password);
        mysqli_select_db($this->connect, $this->dbName);
        mysqli_query($this->connect,"SET NAMES 'utf8'");
    }
}
?>