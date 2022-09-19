<?php

include 'model/SinhVienObject.php';
class SinhVien
{
    private $name;
    private $classId;

    public function setName($name){
        $this -> name = $name;
    }
    public function getName(){
        return $this -> name;
    }

    public function setClassId($classId){
        $this -> classId = $classId;
    }
    public function getClassId(){
        return $this -> classId;
    }

    public function all(){
        $arr = [];
        $sql = "select 
                student.*,
                class.name as className 
                from 
                    student
                join 
                    class
                where
                    student.classId = class.id";
        $connect = new Connect();
        $results = $connect ->select_all($sql);
        foreach($results as $each) {
            $object = new SinhVienObject($each);
            $arr[]  = $object;
        }
        return $arr;
    }

    public function create($params){
        $object = new SinhVienObject($params);
        $sql = "insert into student(name, classId) values ('{$object -> getName()}', '{$object -> getClassId()}')";
        $connect = new Connect();
        $connect ->execute($sql);
    }

    public function edit($id){
        $sql  ="select * from student where id = '$id'";
        $connect = new Connect();
        $result = $connect -> select_all($sql);
        $each = mysqli_fetch_array($result);
        return new SinhVienObject($each);
    }

    public function update($params){
        $object = new SinhVienObject($params);
        $sql  ="update student
                set
                    name = '{$object->getName()}',
                    classId = '{$object->getClassId()}'
                where id = '{$object->getId()}'";
        $connect = new Connect();
        $connect -> execute($sql);
    }

    public function delete($id){
        $sql  ="delete from student
                where id = '$id'";
        $connect = new Connect();
        $connect -> execute($sql);
    }
}