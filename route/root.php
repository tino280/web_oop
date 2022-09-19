<?php

$controller = $_GET['controller'] ?? "";
switch ($controller) {
    case "":
        include 'menu.php';
        break;
    case "lop":
        include 'route/lop.php';
        break;
    case "sinh_vien":
        include 'route/sinh_vien.php';
        break;
    default:
        echo "Nhập linh tinh cc gì đấy";
        break;
}