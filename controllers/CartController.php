<?php
class CartController {
    public function index() {
        $pageClass = 'page-internal';
        
        require_once 'views/layouts/header.php';
        require_once 'views/cart/index.php';
        require_once 'views/layouts/footer.php';
    }
}
?>
