<div class="container" style="padding: 40px 15px 80px;">
    <!-- Breadcrumb -->
    <div style="font-size:13px; color:var(--text-muted); padding-bottom: 15px; border-bottom:1px solid #eee; margin-bottom:30px;">
        <a href="<?= BASE_URL ?>" style="color:var(--text-dark);">Trang chủ</a> <span style="margin: 0 10px;">/</span> 
        <span>Danh mục</span> <span style="margin: 0 10px;">/</span>
        <span style="color:var(--text-dark); font-weight:600; text-transform:none;"><?= $tendm ?></span>
    </div>

    <!-- Layout chia đôi (Collections Layout) -->
    <div class="collections-layout">
        <!-- Sidebar Bộ lọc chuyên sâu -->
        <aside class="sidebar-filter">
            <h3>Danh mục sản phẩm</h3>
            <ul>
                <li><a href="<?= BASE_URL ?>index.php?controller=product&action=list">Tất cả sản phẩm</a></li>
                <?php 
                    $nav_categories = isset($dsdm) ? $dsdm : (function_exists('danhmuc_all') ? danhmuc_all() : []);
                    foreach($nav_categories as $dm):
                ?>
                    <li>
                        <a href="<?= BASE_URL ?>index.php?controller=product&action=list&iddm=<?= $dm['id'] ?>" <?= (isset($_GET['iddm']) && $_GET['iddm']==$dm['id']) ? 'style="color:var(--primary-color); font-weight:600;"' : '' ?> ><?= $dm['ten'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <h3 style="margin-top:30px;">Khoảng giá</h3>
            <ul>
                <li><a href="#"><label style="cursor:pointer; display:flex; align-items:center; gap:8px;"><input type="checkbox"> Dưới 10,000,000₫</label></a></li>
                <li><a href="#"><label style="cursor:pointer; display:flex; align-items:center; gap:8px;"><input type="checkbox"> 10,000,000₫ - 30,000,000₫</label></a></li>
                <li><a href="#"><label style="cursor:pointer; display:flex; align-items:center; gap:8px;"><input type="checkbox"> 30,000,000₫ - 50,000,000₫</label></a></li>
                <li><a href="#"><label style="cursor:pointer; display:flex; align-items:center; gap:8px;"><input type="checkbox"> Trên 50,000,000₫</label></a></li>
            </ul>
        </aside>

        <!-- Product Grid chính thức -->
        <div class="collection-main">
            <!-- Header phía trên Grid -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 25px;">
                <h1 style="font-size:24px; text-transform:uppercase; margin:0; font-family: var(--font-heading);"><?= $tendm ?></h1>
                
                <div class="sort-by" style="font-size:14px;">
                    Sắp xếp: 
                    <select style="padding:8px 25px 8px 15px; border:1px solid #ddd; outline:none; margin-left:10px; font-family: var(--font-body); font-size:14px; background: #fff; cursor:pointer;">
                        <option>Sản phẩm nổi bật</option>
                        <option>Giá: Tăng dần</option>
                        <option>Giá: Giảm dần</option>
                        <option>Tên: A-Z</option>
                        <option>Tên: Z-A</option>
                        <option>Cũ nhất</option>
                        <option>Mới nhất</option>
                        <option>Bán chạy nhất</option>
                    </select>
                </div>
            </div>

            <div class="product-grid-4" style="grid-template-columns: repeat(3, 1fr);">
                <?php 
                if(!empty($dssp)):
                    foreach($dssp as $sp): 
                ?>
                    <div class="product-item">
                        <?php if($sp['giamgia'] > 0): ?>
                            <span class="product-badge">-<?= round((($sp['gia'] - $sp['giamgia'])/$sp['gia'])*100) ?>%</span>
                        <?php endif; ?>
                        <div class="product-img">
                            <a href="<?= BASE_URL ?>index.php?controller=product&action=detail&id=<?= $sp['id'] ?>">
                                <img src="<?= $sp['hinh'] ?>" alt="<?= $sp['ten'] ?>">
                            </a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title" style="font-size:13px; text-transform:uppercase;">
                                <a href="<?= BASE_URL ?>index.php?controller=product&action=detail&id=<?= $sp['id'] ?>"><?= $sp['ten'] ?></a>
                            </h3>
                            <div class="product-price">
                                <?php if($sp['giamgia'] > 0): ?>
                                    <span style="color:var(--primary-color)"><?= number_format($sp['giamgia'], 0, ',', '.') ?>đ</span> 
                                    <span class="price-old"><?= number_format($sp['gia'], 0, ',', '.') ?>đ</span>
                                <?php else: ?>
                                    <?= number_format($sp['gia'], 0, ',', '.') ?>đ
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php 
                    endforeach;
                else:
                ?>
                    <p style="grid-column: 1/-1; text-align:center; padding: 40px; border: 1px dashed #ddd;">Chưa có sản phẩm nào trong danh mục này.</p>
                <?php endif; ?>
            </div>
            
            <?php if(!empty($dssp)): ?>
            <!-- Pagination Phố Xinh (Mockup) -->
            <div style="text-align:center; margin-top:50px; padding-top:20px; border-top: 1px solid #f0f0f0;">
                <div style="display:inline-flex; gap:10px;">
                    <span style="width:36px; height:36px; display:flex; align-items:center; justify-content:center; background:var(--text-dark); color:#fff; border-radius:3px;">1</span>
                    <a href="#" style="width:36px; height:36px; display:flex; align-items:center; justify-content:center; border:1px solid #ddd; color:var(--text-dark); border-radius:3px; transition:0.3s;" onmouseover="this.style.background='var(--text-dark)'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='var(--text-dark)';">2</a>
                    <a href="#" style="width:36px; height:36px; display:flex; align-items:center; justify-content:center; border:1px solid #ddd; color:var(--text-dark); border-radius:3px; transition:0.3s;" onmouseover="this.style.background='var(--text-dark)'; this.style.color='#fff';" onmouseout="this.style.background='transparent'; this.style.color='var(--text-dark)';"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
