<?php
// Bật hiển thị lỗi khi code, tắt khi deploy
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Session start cho giỏ hàng, đăng nhập
session_start();

// Nạp các cấu hình và thư viện cơ sở
require_once 'config/database.php';
require_once 'dao/pdo.php';

// Nạp DAO
require_once 'dao/danhmuc.php';
require_once 'dao/sanpham.php';

// Điều hướng (Router)
// VD: index.php?controller=home&action=index
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Tên class controller
$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFile = "controllers/" . $controllerClassName . ".php";

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    if (class_exists($controllerClassName)) {
        $controllerObj = new $controllerClassName();
        if (method_exists($controllerObj, $action)) {
            $controllerObj->$action();
        } else {
            die("<h1>404 Not Found</h1><p>Action '$action' không tồn tại trong controller '$controllerClassName'.</p>");
        }
    } else {
        die("<h1>404 Not Found</h1><p>Class '$controllerClassName' không tồn tại.</p>");
    }
} else {
    // Controller mặc định khi nhập link sai
    die("<h1>404 Not Found</h1><p>Trang bạn yêu cầu không tồn tại (Controller: $controller).</p>");
}
