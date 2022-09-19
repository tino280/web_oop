<?php

include 'connect/Connect.php';
class LopController
{
    public function index() {
        include 'model/Lop.php';
        $arr = (new Lop()) -> all();
        include 'view/lop/index.php';
    }

    public function create(){
        include 'view/lop/create.php';
    }

    public function store($params) {
        include 'model/Lop.php';
        (new Lop()) -> create($params);
    }

    public function edit($id) {
        include 'model/Lop.php';
        $arr = (new Lop()) -> find($id);
        include 'view/lop/edit.php';
    }

    public function update($params) {
        include 'model/Lop.php';
        (new Lop()) -> update($params);
    }

    public function delete($id) {
        include 'model/Lop.php';
        (new Lop()) -> delete($id);
    }
}