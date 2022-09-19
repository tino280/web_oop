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
        $array = [];
        $sql = "select 
                sinh_vien.*,
                lop.name as className 
                from 
                    sinh_vien
                join 
                    lop
                where
                    sinh_vien.classId = lop.id";
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
        $sql = "insert into sinh_vien(name, classId) values ('{$object -> getName()}', '{$object -> getClassId()}')";
        $connect = new Connect();
        $connect ->execute($sql);
    }

    public function edit($id){
        $sql  ="select * from sinh_vien where id = '$id'";
        $connect = new Connect();
        $result = $connect -> select_all($sql);
        $each = mysqli_fetch_array($result);
        return new SinhVienObject($each);
    }

    public function update($params){
        $object = new SinhVienObject($params);
        $sql  ="update sinh_vien
                set
                    name = '{$object->getName()}',
                    classId = '{$object->getClassId()}'
                where id = '{$object->getId()}'";
        $connect = new Connect();
        $connect -> execute($sql);
    }

    public function delete($id){
        $sql  ="delete from sinh_vien
                where id = '$id'";
        $connect = new Connect();
        $connect -> execute($sql);
    }
}