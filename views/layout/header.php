<header class="header">
    <div class="header-top">
        <div class="container text-center">
            <span class="gold-text">Miễn phí lắp đặt và giao hàng nội thành</span>
        </div>
    </div>
    <!-- Cần set position relative cho container hoặc header main để mega menu full width hoặc content align -->
    <div class="header-main container" style="position: relative;">
        <div class="logo">
            <a href="<?= BASE_URL ?>index.php">
                <h1>PHỐ XINH</h1>
                <span>FURNITURE</span>
            </a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="<?= BASE_URL ?>index.php">Trang chủ</a></li>
                <li class="has-mega-menu">
                    <a href="<?= BASE_URL ?>index.php?controller=product&action=list">Sản phẩm <i class="fa fa-angle-down" style="font-size:12px; margin-left:2px;"></i></a>
                    <div class="mega-menu">
                        <div class="mega-menu-content">
                            <!-- Cột 1: Danh mục con -->
                            <div class="mega-col">
                                <ul>
                                    <li class="mega-cat-item active" data-target="mega-phongkhach"><a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=1">Phòng Khách</a> <i class="fa fa-angle-right"></i></li>
                                    <li class="mega-cat-item" data-target="mega-phongan"><a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=2">Phòng Ăn</a> <i class="fa fa-angle-right"></i></li>
                                    <li class="mega-cat-item" data-target="mega-phongngu"><a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=3">Phòng Ngủ</a> <i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div>
                            <!-- Cột 2: Sản phẩm tương ứng -->
                            <div class="mega-col-content">
                                <!-- Phòng Khách -->
                                <div class="mega-pane active" id="mega-phongkhach">
                                    <div class="mega-items">
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=1">
                                                <img src="https://product.hstatic.net/1000405230/product/sofa-da_c8bdfc2e5a5940c3b0eb6821fa7934bb_large.jpg" alt="Sofa">
                                                <span>Sofa Da Cao Cấp</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=1">
                                                <img src="https://product.hstatic.net/1000405230/product/ban-cafe_269b9eafa0ad4bafbc1f30d0617fb048_large.jpg" alt="Bàn Nước" onerror="this.src='https://theme.hstatic.net/1000405230/1000570560/14/no_image.jpg'">
                                                <span>Bàn Nước / Bàn Cafe</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=1">
                                                <img src="https://product.hstatic.net/1000405230/product/ke-tivi_210e7edbc4c243acbed3541bdc05ad6e_large.jpg" alt="Kệ Tivi" onerror="this.src='https://theme.hstatic.net/1000405230/1000570560/14/no_image.jpg'">
                                                <span>Kệ Tivi Hiện Đại</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=1">
                                                <img src="https://product.hstatic.net/1000405230/product/tu-ruou-go-soi_671bbd3c103248e58a78ccbe8a00ddbb_large.jpg" alt="Tủ Rượu">
                                                <span>Tủ Rượu</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Phòng Ăn -->
                                <div class="mega-pane" id="mega-phongan">
                                    <div class="mega-items">
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=2">
                                                <img src="https://product.hstatic.net/1000405230/product/ban-an-ceremic_edc54df3ab6545b7adf0e9220ef1e8cc_large.jpg" alt="Bàn ăn">
                                                <span>Bàn Ăn Cẩm Thạch</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=2">
                                                <img src="https://product.hstatic.net/1000405230/product/ghe-an_fb4b8e2b86ab48ea808ca14c77ea8c7a_large.jpg" alt="Ghế Ăn">
                                                <span>Ghế Ăn Bọc Da</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Phòng Ngủ -->
                                <div class="mega-pane" id="mega-phongngu">
                                    <div class="mega-items">
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=3">
                                                <img src="https://product.hstatic.net/1000405230/product/giuong_fcdb27b385a4435aa19ea61f77fbea86_large.jpg" alt="Giường ngủ">
                                                <span>Giường Ngủ Master</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=3">
                                                <img src="https://product.hstatic.net/1000405230/product/tu-dau-giuong_9d8af93361e64bf8ad0bb65ced9acbb7_large.jpg" alt="Tủ Đầu Giường" onerror="this.src='https://theme.hstatic.net/1000405230/1000570560/14/no_image.jpg'">
                                                <span>Tủ Đầu Giường</span>
                                            </a>
                                        </div>
                                        <div class="mega-item">
                                            <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=3">
                                                <img src="https://product.hstatic.net/1000405230/product/tu-ao_2a3f8fe75fb84c2f829ec9c0e52b2fbd_large.jpg" alt="Tủ Quần Áo" onerror="this.src='https://theme.hstatic.net/1000405230/1000570560/14/no_image.jpg'">
                                                <span>Tủ Quần Áo</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="<?= BASE_URL ?>index.php?controller=page&action=about">Thương hiệu</a></li>
                <li><a href="<?= BASE_URL ?>index.php?controller=product&action=promotion">Khuyến mãi</a></li>
                <li><a href="<?= BASE_URL ?>index.php?controller=news&action=list">Tin tức</a></li>
            </ul>
        </nav>
        <div class="header-icons">
            <a href="#"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa-regular fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
    </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const catItems = document.querySelectorAll('.mega-cat-item');
    const panes = document.querySelectorAll('.mega-pane');

    catItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            catItems.forEach(i => i.classList.remove('active'));
            panes.forEach(p => p.classList.remove('active'));

            this.classList.add('active');
            let targetId = this.getAttribute('data-target');
            let pane = document.getElementById(targetId);
            if(pane) {
                pane.classList.add('active');
            }
        });
    });
});
</script>
