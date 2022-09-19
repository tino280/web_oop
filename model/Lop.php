<?php

include 'model/LopObject.php';
class Lop
{

    public function all () {
        $arr = [];
        $sql = "select * from lop";
        $connect = new Connect();
        $results = $connect ->select_all($sql);
        foreach ($results as $each) {
            $object = (new LopObject($each));
            $arr[] = $object;
        }
        return $arr;
    }

    public function create($params){
        $object = (new LopObject($params));
        $sql = "insert into lop (name) values ('{$object -> getName()}')";
        (new Connect()) ->execute($sql);
    }

    public function find($id) {
        $arr = [];
        $connect = new Connect();
        $sql = "select * from lop where id = '$id'";
        $result = $connect ->select_all($sql);
        $arr = mysqli_fetch_array($result);
        return (new LopObject($arr)); 
    }

    public function update($params) {
        $object = (new LopObject($params));
        $sql = "update lop 
                set name = '{$object->getName()}'
                where id = '{$object->getId()}'";
        (new Connect()) ->execute($sql);
    }

    public function delete($id) {
        $sql = "delete from lop 
                where id = '$id'";
        (new Connect()) ->execute($sql);
    }
}