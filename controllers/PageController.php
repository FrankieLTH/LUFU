<?php
class PageController {
    public function about() {
        $view = 'views/page/about.php';
        require_once 'views/layout/master.php';
    }
}
