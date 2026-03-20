    <main class="internal-main pt-header">
        <!-- Page Banner -->
        <div class="page-banner" style="background-image: url('https://images.unsplash.com/photo-1540574163026-643ea20ade25?q=80&w=1600&auto=format&fit=crop');">
            <div class="page-banner-overlay"></div>
            <div class="page-banner-content">
                <h1 class="page-title">SẢN PHẨM KHUYẾN MÃI</h1>
                <div class="breadcrumbs">
                    <a href="index.php">Trang chủ</a> <span>/</span> <span>Sản phẩm</span>
                </div>
            </div>
        </div>

        <section class="container shop-layout mt-4 text-left">
            <!-- Sidebar Filter -->
            <aside class="shop-sidebar">
                <div class="filter-widget">
                    <h3 class="filter-title">DANH MỤC</h3>
                    <ul class="filter-list">
                        <li><a href="#">Sofa (24)</a></li>
                        <li><a href="#">Bàn Ăn (15)</a></li>
                        <li><a href="#">Giường Ngủ (12)</a></li>
                        <li><a href="#">Tủ Kệ (8)</a></li>
                        <li><a href="#">Đèn Trang Trí (10)</a></li>
                    </ul>
                </div>
                
                <div class="filter-widget">
                    <h3 class="filter-title">KHOẢNG GIÁ</h3>
                    <ul class="filter-list">
                        <li><label><input type="checkbox"> Dưới 10.000.000đ</label></li>
                        <li><label><input type="checkbox"> 10.000.000đ - 20.000.000đ</label></li>
                        <li><label><input type="checkbox"> 20.000.000đ - 50.000.000đ</label></li>
                        <li><label><input type="checkbox"> Trên 50.000.000đ</label></li>
                    </ul>
                </div>

                <div class="filter-widget">
                    <h3 class="filter-title">CHẤT LIỆU</h3>
                    <ul class="filter-list">
                        <li><label><input type="checkbox"> Gỗ Tự Nhiên</label></li>
                        <li><label><input type="checkbox"> Da Thật</label></li>
                        <li><label><input type="checkbox"> Da PU</label></li>
                        <li><label><input type="checkbox"> Vải Nỉ</label></li>
                        <li><label><input type="checkbox"> Đá Marble</label></li>
                    </ul>
                </div>
            </aside>

            <!-- Main Product Grid -->
            <div class="shop-content">
                <div class="shop-toolbar border-bottom pb-2 mb-4">
                    <p>Hiển thị 1–12 của 50 kết quả</p>
                    <select class="sort-select">
                        <option>Thứ tự mặc định</option>
                        <option>Mức độ phổ biến</option>
                        <option>Mới nhất</option>
                        <option>Giá: thấp đến cao</option>
                        <option>Giá: cao xuống thấp</option>
                    </select>
                </div>

                <div class="product-grid columns-3">
                    <!-- Products -->
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <a href="index.php?controller=product&action=detail&id=1"><img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=800&auto=format&fit=crop" alt="Sofa Cao Cấp"></a>
                            <div class="product-actions">
                                <button class="action-btn"><i class="fa-solid fa-bag-shopping"></i></button>
                                <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="index.php?controller=product&action=detail&id=1">Sofa Vải Hiện Đại D7</a></h3>
                            <p class="product-price">25,500,000 VNĐ</p>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <a href="index.php?controller=product&action=detail&id=5"><img src="https://images.unsplash.com/photo-1540574163026-643ea20ade25?q=80&w=800&auto=format&fit=crop" alt="Sofa"></a>
                            <div class="product-actions">
                                <button class="action-btn"><i class="fa-solid fa-bag-shopping"></i></button>
                                <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="index.php?controller=product&action=detail&id=5">Sofa Nỉ Góc Chữ L</a></h3>
                            <p class="product-price">32,000,000 VNĐ</p>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image-wrapper">
                            <a href="index.php?controller=product&action=detail&id=6"><img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop" alt="Bed"></a>
                            <div class="product-actions">
                                <button class="action-btn"><i class="fa-solid fa-bag-shopping"></i></button>
                                <button class="action-btn"><i class="fa-regular fa-heart"></i></button>
                            </div>
                            <div class="badge badge-soldout">-15%</div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="index.php?controller=product&action=detail&id=6">Giường Ngủ Bọc Da</a></h3>
                            <p class="product-price">18,500,000 VNĐ</p>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="pagination mt-4 pb-5">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
    </main>
