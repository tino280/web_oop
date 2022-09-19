<?php

$action = $_GET['action'] ?? "";
switch ($action) 
{
    case "":
        include 'controller/SinhVienController.php';
        $arr = (new SinhVienController())->index();
        include 'view/sinh_vien/index.php';
        break;
    case "create":
        include 'controller/SinhVienController.php';
        (new SinhVienController())->create();
        break;
    case "store":
        include 'controller/SinhVienController.php';
        (new SinhVienController())->store($_POST);
        header('location: index.php?controller=sinh_vien');
        break;
    case "edit":
        $id = $_GET['id'];
        include 'controller/SinhVienController.php';
        (new SinhVienController())->edit($id);
        break;
    case "update":
        include 'controller/SinhVienController.php';
        (new SinhVienController())->update($_POST);
        header('location: index.php?controller=sinh_vien');
        break;
    case "delete":
        $id = $_GET['id'];
        include 'controller/SinhVienController.php';
        (new SinhVienController())->delete($id);
        header('location: index.php?controller=sinh_vien');
        break;
    default:
        echo "Nhập linh tinh cc gì đấy ba";
        break;
}