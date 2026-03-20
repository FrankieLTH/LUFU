<?php
class PageController {
    public function about() {
        $pageClass = 'page-internal';
        
        require_once 'views/layouts/header.php';
        require_once 'views/pages/about.php';
        require_once 'views/layouts/footer.php';
    }

    public function contact() {
        $pageClass = 'page-internal';
        
        require_once 'views/layouts/header.php';
        require_once 'views/pages/contact.php';
        require_once 'views/layouts/footer.php';
    }
}
?>
