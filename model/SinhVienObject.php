<?php

class SinhVienObject
{
    private $id;
    private $name;
    private $classId;
    private $className;

    public function __construct($params) {
        $this->id = $params['id'];
        $this->name = $params['name'];
        $this->classId = $params['classId'];
        $this->className = $params['className'] ?? "";
    }

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setClassId($classId) {
        $this->classId = $classId;
    }
    public function getClassId() {
        return $this->classId;
    }

    public function getClassName() {
        return $this->className;
    }
}