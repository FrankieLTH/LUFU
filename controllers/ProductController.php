<?php
class ProductController {
    public function list() {
        $dsdm = danhmuc_all();
        $iddm = isset($_GET['iddm']) ? (int)$_GET['iddm'] : 0;
        
        if ($iddm > 0) {
            $dssp = sanpham_by_danhmuc($iddm);
            $dmInfo = danhmuc_one($iddm);
            $tendm = $dmInfo ? $dmInfo['ten'] : "Danh mục không tồn tại";
        } else {
            $dssp = sanpham_all(20); // Lấy 20 SP mới nhất
            $tendm = "Tất cả sản phẩm";
        }

        $view = 'views/product/list.php';
        require_once 'views/layout/master.php';
    }

    public function detail() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($id > 0) {
            $sp = sanpham_detail($id);
            if ($sp) {
                // Lấy sản phẩm cùng loại
                $cungloai_raw = sanpham_by_danhmuc($sp['iddm']);
                // Loại bỏ sp hiện tại ra khỏi danh sách cùng loại
                $cungloai = array_filter($cungloai_raw, function($item) use ($id) {
                    return $item['id'] != $id;
                });

                $view = 'views/product/detail.php';
                require_once 'views/layout/master.php';
                return;
            }
        }
        // Nếu không có id hoặc ko tìm thấy sp
        header("Location: index.php?controller=product&action=list");
    }

    // Trang lọc riêng biệt Khuyến Mãi
    public function promotion() {
        $dsdm = function_exists('danhmuc_all') ? danhmuc_all() : [];
        $dssp = function_exists('sanpham_khuyenmai') ? sanpham_khuyenmai(40) : []; 
        $tendm = "Chương Trình Khuyến Mãi Đầu Năm";
        
        $view = 'views/product/list.php'; 
        require_once 'views/layout/master.php';
    }
}
