<?php

include 'controller/LopController.php';
$action= $_GET['action'] ?? "";
switch ($action) {
    case "":
        (new LopController()) -> index();
        break;
    case "create":
        (new LopController()) -> create();
        break;
    case "store":
        (new LopController()) -> store($_POST);
        header('location: index.php?controller=lop');
        break;
    case "edit":
        $id = $_GET['id'];
        (new LopController()) -> edit($id);
        break;
    case "update":
        (new LopController()) -> update($_POST);
        header('location: index.php?controller=lop');
        break;
     case "delete":
        $id = $_GET['id'];
        (new LopController()) -> delete($id);
        header('location: index.php?controller=lop');
        break;
    default:
        echo "Nhập linh tinh cc gì thế ba ._.";
        break;
}