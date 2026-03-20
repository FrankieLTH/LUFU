<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phố Xinh - Nội thất Cao Cấp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?= isset($pageClass) ? $pageClass : '' ?>">

    <!-- Header Section -->
    <header class="header <?= isset($pageClass) && $pageClass == 'page-internal' ? 'sticky' : '' ?>" id="header" 
            style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'background-color: white; border-bottom: 1px solid var(--border-color);' : '' ?>">
        <div class="header-container">
            <button class="mobile-menu-btn" aria-label="Toggle Menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Logo -->
            <a href="index.php" class="logo" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">
                PHỐ <span class="teal-x">X</span>INH
            </a>

            <!-- Navigation Navigation -->
            <nav class="main-nav">
                <ul class="nav-list">
                    <li><a href="index.php" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">TRANG CHỦ</a></li>
                    <li><a href="index.php?controller=product&action=index" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">SẢN PHẨM KHUYẾN MÃI</a></li>
                    <li><a href="index.php?controller=product&action=index" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">PHÒNG KHÁCH</a></li>
                    <li><a href="index.php?controller=product&action=index" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">PHÒNG NGỦ</a></li>
                    <li><a href="index.php?controller=product&action=index" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">PHÒNG ĂN</a></li>
                    <li><a href="index.php?controller=page&action=about" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">GIỚI THIỆU</a></li>
                    <li><a href="index.php?controller=page&action=contact" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">LIÊN HỆ</a></li>
                </ul>
            </nav>

            <!-- Utility Icons -->
            <div class="header-utils">
                <a href="#" class="util-icon" aria-label="Search" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="util-icon" aria-label="Wishlist" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>"><i class="fa-regular fa-heart"></i></a>
                <a href="#" class="util-icon" aria-label="Account" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>"><i class="fa-regular fa-user"></i></a>
                <a href="index.php?controller=cart&action=index" class="util-icon cart-icon" aria-label="Cart" style="<?= isset($pageClass) && $pageClass == 'page-internal' ? 'color: var(--primary-color);' : '' ?>">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="cart-count">0</span>
                </a>
            </div>
        </div>
    </header>
