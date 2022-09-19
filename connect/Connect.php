<?php

class Connect
{
    private string $localhost = 'localhost';    
    private string $username = 'root';    
    private string $password = '';
    private string $database = 'web_chuyen_sau';

    private function cnt() {
        $connect = mysqli_connect($this->localhost, $this -> username, $this -> password, $this -> database);
        mysqli_set_charset($connect, 'utf8');
        return $connect;
    }

    public function select_all($sql) {
        $connect = (new self())->cnt();
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);
        return $result;
    }

    public function execute($sql) {
        $connect = (new self())->cnt();
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }
}