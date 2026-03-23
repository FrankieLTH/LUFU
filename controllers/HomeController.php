<?php
class HomeController {
    public function index() {
        // Lấy dữ liệu thông qua DAO
        $dsdm = danhmuc_all();
        $sp_noibat = sanpham_noibat(8);
        $sp_khuyenmai = sanpham_khuyenmai(4);

        // Định không gian view
        $view = 'views/home/index.php';
        
        // Gọi Master Layout
        require_once 'views/layout/master.php';
    }
}
