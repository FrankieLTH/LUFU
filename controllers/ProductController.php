<?php
class ProductController {
    public function index() {
        $pageClass = 'page-internal';
        
        require_once 'views/layouts/header.php';
        require_once 'views/products/index.php';
        require_once 'views/layouts/footer.php';
    }

    public function detail() {
        $pageClass = 'page-internal';
        $productId = isset($_GET['id']) ? $_GET['id'] : null;
        
        // Load data based on ID here...
        
        require_once 'views/layouts/header.php';
        require_once 'views/products/detail.php';
        require_once 'views/layouts/footer.php';
    }
}
?>
