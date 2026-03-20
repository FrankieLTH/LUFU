<?php
class HomeController {
    public function index() {
        // Here we could load data from a Model if we had a database
        // For now, we just define variables to be used in the view
        $pageClass = ''; // Default body class
        
        require_once 'views/layouts/header.php';
        require_once 'views/home/index.php';
        require_once 'views/layouts/footer.php';
    }
}
?>
