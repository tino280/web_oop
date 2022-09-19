<?php

include 'connect/Connect.php';

class SinhVienController
{
    public function index() {
        include 'model/SinhVien.php';
        $results = (new SinhVien())-> all();
        return $results;
    }

    public function create() {
        include 'model/Lop.php';
        $arr = (new Lop()) -> all();
        include 'view/sinh_vien/create.php';
    }

    public function store($params) {
        include 'model/SinhVien.php';
        (new SinhVien()) -> create($params);
    }

    public function edit($id) {
        include 'model/SinhVien.php';
        $arr_sinh_vien = (new SinhVien()) -> edit($id);
        include 'model/Lop.php';
        $arr_lop = (new Lop()) -> all();
        include 'view/sinh_vien/edit.php';
    }

    public function update($params) {
        include 'model/SinhVien.php';
        (new SinhVien()) -> update($params);
    }

    public function delete($id) {
        include 'model/SinhVien.php';
        (new SinhVien()) -> delete($id);
    }
}