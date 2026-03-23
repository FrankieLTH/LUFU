<?php
class NewsController {
    // Array tin tức ảo
    private function getMockNews() {
        return [
            1 => ['id'=>1, 'title'=>'BỘ SƯU TẬP SOFA DA THẬT NHẬP KHẨU Ý', 'image'=>'https://file.hstatic.net/1000405230/article/1_d28dbd6cdaae4219a1db6945a8e3f9a7_large.jpg', 'summary'=>'Những ấn phẩm sofa da thủ công tuyệt tác vĩ đại...', 'date'=>'20/10/2023'],
            2 => ['id'=>2, 'title'=>'BÍ QUYẾT CHỌN MUA BÀN ĂN PHÙ HỢP GIA ĐÌNH', 'image'=>'https://file.hstatic.net/1000405230/article/2_88db8b32ce554b7c8443eeb29cce2f77_large.jpg', 'summary'=>'Cùng chuyên gia Phố Xinh điểm qua những lưu ý...', 'date'=>'15/10/2023'],
            3 => ['id'=>3, 'title'=>'KHÔNG GIAN SỐNG CHUẨN MỰC TỪ ROCHE BOBOIS', 'image'=>'https://file.hstatic.net/1000405230/article/3_e3e9d8e7ea504a37b3e2b4f65c6970dc_large.jpg', 'summary'=>'Khám phá nghệ thuật sắp đặt không gian sống...', 'date'=>'05/10/2023'],
            4 => ['id'=>4, 'title'=>'MANG THIÊN NHIÊN VÀO NHÀ VỚI GỖ ÓC CHÓ', 'image'=>'https://theme.hstatic.net/1000405230/1000570560/14/hb_image4.jpg?v=173', 'summary'=>'Chất liệu gỗ Walnut không bao giờ vắng bóng trong những ngôi nhà tỷ phú.', 'date'=>'12/09/2023']
        ];
    }

    public function list() {
        $newsList = $this->getMockNews();
        $view = 'views/news/list.php';
        require_once 'views/layout/master.php';
    }

    public function detail() {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $newsList = $this->getMockNews();
        
        if (isset($newsList[$id])) {
            $news = $newsList[$id];
            $view = 'views/news/detail.php';
            require_once 'views/layout/master.php';
        } else {
            header("Location: " . BASE_URL . "index.php?controller=news&action=list");
        }
    }
}
