<?php
require_once 'pdo.php';

function mock_products() {
    return [
        [
            'id' => 1, 
            'iddm' => 1, 
            'ten' => 'Sofa Da Thật Nhập Khẩu Italia', 
            'gia' => 45000000, 
            'giamgia' => 39900000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/sofa-da_c8bdfc2e5a5940c3b0eb6821fa7934bb_large.jpg', 
            'mota' => 'Sofa da bò tót thật 100% nhập khẩu từ Ý. Thiết kế hiện đại mang lại vẻ sang trọng cho phòng khách.'
        ],
        [
            'id' => 2, 
            'iddm' => 2, 
            'ten' => 'Bàn Ăn Mặt Đá Cẩm Thạch Cao Cấp', 
            'gia' => 25000000, 
            'giamgia' => 21000000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/ban-an-ceremic_edc54df3ab6545b7adf0e9220ef1e8cc_large.jpg', 
            'mota' => 'Bàn ăn cao cấp dành cho 6-8 người. Chân mạ PVD vàng gold kết hợp mặt đá cẩm thạch chống xước.'
        ],
        [
            'id' => 3, 
            'iddm' => 3, 
            'ten' => 'Giường Ngủ Master Bọc Da', 
            'gia' => 35000000, 
            'giamgia' => 0, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/giuong_fcdb27b385a4435aa19ea61f77fbea86_large.jpg', 
            'mota' => 'Không gian phòng ngủ đẳng cấp hoàng gia với thiết kế tinh xảo, chất liệu êm ái cho giấc ngủ hoàn hảo.'
        ],
        [
            'id' => 4, 
            'iddm' => 4, 
            'ten' => 'Tủ Rượu Gỗ Óc Chó Walnut', 
            'gia' => 18000000, 
            'giamgia' => 15500000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/tu-ruou-go-soi_671bbd3c103248e58a78ccbe8a00ddbb_large.jpg', 
            'mota' => 'Thiết kế tinh xảo bề mặt vân gỗ tự nhiên. Ngăn chứa rộng rãi tối ưu hóa khả năng decor.'
        ],
        [
            'id' => 5, 
            'iddm' => 1, 
            'ten' => 'Sofa Nỉ Cao Cấp Góc Chữ L', 
            'gia' => 12000000, 
            'giamgia' => 0, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/sofa-goc-hien-dai_7d353683afee4b7eaff56efba227e85c_large.png', 
            'mota' => 'Sofa hiện đại nhỏ gọn tối ưu không gian. Tiện lợi khi nằm nghỉ ngơi.'
        ],
        [
            'id' => 6, 
            'iddm' => 5, 
            'ten' => 'Đèn Chùm Pha Lê Tiệp Khắc', 
            'gia' => 5500000, 
            'giamgia' => 4900000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/den-chum_9e3d55ab8dce49fcab17ccf5f0884d6b_large.jpg', 
            'mota' => 'Thắp sáng không gian lộng lẫy, chất liệu pha lê chùm siêu sáng và lấp lánh.'
        ],
        [
            'id' => 7, 
            'iddm' => 1, 
            'ten' => 'Sofa Da Thông Minh Chỉnh Điện', 
            'gia' => 32000000, 
            'giamgia' => 28000000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/sofa-chinh-dien_db5d0df8357d4cc6a7ecf3db1ecadd70_large.jpg', 
            'mota' => 'Tích hợp chức năng bật ngả chân bằng nút bấm điện tiện nghi.'
        ],
        [
            'id' => 8, 
            'iddm' => 2, 
            'ten' => 'Ghế Ăn Bọc Da Cao Cấp', 
            'gia' => 2200000, 
            'giamgia' => 1800000, 
            'hinh' => 'https://product.hstatic.net/1000405230/product/ghe-an_fb4b8e2b86ab48ea808ca14c77ea8c7a_large.jpg', 
            'mota' => 'Sử dụng chân sắt tĩnh điện cực kì chắc chắn, đệm da lót siêu êm mông.'
        ],
    ];
}

/**
 * Lấy danh sách toàn bộ sản phẩm (hoặc giới hạn)
 */
function sanpham_all($limit = 12) {
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT $limit";
    $result = pdo_query($sql);
    if (empty($result)) {
        return mock_products();
    }
    return $result;
}

/**
 * Lấy chuyên sâu các sản phẩm nổi bật
 */
function sanpham_noibat($limit = 4) {
    $sql = "SELECT * FROM sanpham WHERE noibat = 1 ORDER BY id DESC LIMIT $limit";
    $result = pdo_query($sql);
    if (empty($result)) {
        return array_slice(mock_products(), 0, $limit);
    }
    return $result;
}

/**
 * Lấy sản phẩm đang có giá mới/khuyến mãi lớn
 */
function sanpham_khuyenmai($limit = 4) {
    $sql = "SELECT * FROM sanpham WHERE giamgia > 0 ORDER BY giamgia ASC LIMIT $limit";
    $result = pdo_query($sql);
    if (empty($result)) {
        $mocks = mock_products();
        $km = array_filter($mocks, function($p) {
            return $p['giamgia'] > 0;
        });
        return array_slice($km, 0, $limit);
    }
    return $result;
}

/**
 * Láy chi tiết 1 sản phẩm
 */
function sanpham_detail($id) {
    $sql = "SELECT * FROM sanpham WHERE id=?";
    $result = pdo_query_one($sql, $id);
    if (empty($result)) {
        $mocks = mock_products();
        foreach($mocks as $p) {
            if($p['id'] == $id) return $p;
        }
    }
    return $result;
}

/**
 * Lấy sản phẩm theo danh mục
 */
function sanpham_by_danhmuc($iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm=?";
    $result = pdo_query($sql, $iddm);
    if (empty($result)) {
        $mocks = mock_products();
        return array_filter($mocks, function($p) use ($iddm) {
            return $p['iddm'] == $iddm;
        });
    }
    return $result;
}
