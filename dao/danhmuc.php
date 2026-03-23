<?php
require_once 'pdo.php';

function mock_categories() {
    return [
        ['id' => 1, 'ten' => 'Sofa Phòng Khách', 'hinh' => 'https://file.hstatic.net/1000405230/file/sofa.jpg'],
        ['id' => 2, 'ten' => 'Bàn Ăn', 'hinh' => 'https://file.hstatic.net/1000405230/file/ban-an.jpg'],
        ['id' => 3, 'ten' => 'Giường Ngủ', 'hinh' => 'https://file.hstatic.net/1000405230/file/giuong.jpg'],
        ['id' => 4, 'ten' => 'Tủ - Kệ', 'hinh' => 'https://file.hstatic.net/1000405230/file/tu.jpg'],
        ['id' => 5, 'ten' => 'Đồ Trang Trí', 'hinh' => 'https://file.hstatic.net/1000405230/file/trang-tri.jpg']
    ];
}

/**
 * Láy tất cả danh mục
 */
function danhmuc_all() {
    $sql = "SELECT * FROM danhmuc ORDER BY id ASC";
    $result = pdo_query($sql);
    if(empty($result)) {
        return mock_categories();
    }
    return $result;
}

/**
 * Lấy một danh mục theo id
 */
function danhmuc_one($id) {
    $sql = "SELECT * FROM danhmuc WHERE id=?";
    $result = pdo_query_one($sql, $id);
    if(empty($result)) {
        $mocks = mock_categories();
        foreach($mocks as $m) {
            if($m['id'] == $id) return $m;
        }
    }
    return $result;
}
