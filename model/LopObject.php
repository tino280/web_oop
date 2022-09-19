<?php

class LopObject
{
    private $id;
    private $name;

    public function __construct($row) {
        $this->id = $row['id'] ?? "";
        $this->name = $row['name']??"";
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}