<div class="container" style="padding: 60px 15px;">
    <div class="detail-container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; margin-bottom: 80px;">
        <div class="detail-img">
            <img src="<?= $sp['hinh'] ?>" alt="<?= $sp['ten'] ?>" style="width: 100%; display: block; object-fit: cover; border: 1px solid var(--border-color);">
        </div>
        <div class="detail-info" style="display: flex; flex-direction: column; justify-content: center;">
            <p style="text-transform:uppercase; letter-spacing: 2px; color: var(--text-muted); font-size: 13px; margin-bottom: 10px;">ID Sản Phẩm: #PX<?= str_pad($sp['id'], 4, '0', STR_PAD_LEFT) ?></p>
            <h1 style="font-size: 36px; margin-bottom: 20px; font-family: var(--font-heading); color: var(--text-dark);"><?= $sp['ten'] ?></h1>
            <div style="font-size: 28px; font-weight: 600; color: var(--text-dark); margin-bottom: 30px;">
                <?php if($sp['giamgia'] > 0): ?>
                    <span style="color: var(--primary-color);"><?= number_format($sp['giamgia'], 0, ',', '.') ?>đ</span>
                    <span class="price-old" style="font-size: 18px; margin-left: 15px; font-weight: 400;"><?= number_format($sp['gia'], 0, ',', '.') ?>đ</span>
                <?php else: ?>
                    <span style="color: var(--primary-color);"><?= number_format($sp['gia'], 0, ',', '.') ?>đ</span>
                <?php endif; ?>
            </div>
            <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 40px; font-size: 16px;">
                <?= $sp['mota'] ?>
                Dòng sản phẩm mang thiết kế cao cấp, chất liệu được kiểm duyệt gắt gao theo tiêu chuẩn Châu Âu. Đảm bảo độ bền bỉ và nét đẹp vượt thời gian.
            </p>
            <div style="display: flex; gap: 15px; margin-bottom: 40px; border-bottom: 1px solid #eaeaea; padding-bottom: 40px;">
                <input type="number" value="1" min="1" style="width: 80px; padding: 15px; border: 1px solid #ddd; text-align:center; font-size:18px; outline: none;">
                <button class="btn btn-primary" style="flex:1; font-weight: 600; letter-spacing: 1px;"><i class="fa fa-shopping-cart" style="margin-right:8px;"></i> Thêm Vào Giỏ Hàng</button>
            </div>
            
            <div style="font-size: 14px; color: #555;">
                <p style="margin-bottom:15px; display:flex; align-items:center;"><i class="fa fa-truck" style="width:30px; font-size:20px; color: var(--primary-color);"></i> Giao hàng và lắp đặt miễn phí nội thành.</p>
                <p style="margin-bottom:15px; display:flex; align-items:center;"><i class="fa fa-shield-alt" style="width:30px; font-size:20px; color: var(--primary-color);"></i> Bảo hành chính hãng 5 năm.</p>
                <p style="margin-bottom:15px; display:flex; align-items:center;"><i class="fa fa-headset" style="width:30px; font-size:20px; color: var(--primary-color);"></i> Gọi ngay Hotline: <strong>1800 1234</strong> để được tư vấn thiết kế.</p>
            </div>
        </div>
    </div>

    <!-- Cùng loại -->
    <?php if(!empty($cungloai)): ?>
    <div class="section-title">
        <h2>Sản Phẩm Tương Tự</h2>
        <p>Lựa chọn thay thế mang cùng phong cách thiết kế</p>
    </div>
    <div class="product-grid">
        <?php foreach(array_slice($cungloai, 0, 4) as $cl): ?>
            <div class="product-item">
                <div class="product-img">
                    <a href="<?= BASE_URL ?>index.php?controller=product&action=detail&id=<?= $cl['id'] ?>">
                        <img src="<?= $cl['hinh'] ?>" alt="<?= $cl['ten'] ?>">
                    </a>
                </div>
                <div class="product-info">
                    <h3 class="product-title" style="font-size:16px;">
                        <a href="<?= BASE_URL ?>index.php?controller=product&action=detail&id=<?= $cl['id'] ?>"><?= $cl['ten'] ?></a>
                    </h3>
                    <div class="product-price">
                        <?php if($cl['giamgia'] > 0): ?>
                            <?= number_format($cl['giamgia'], 0, ',', '.') ?>đ
                        <?php else: ?>
                            <?= number_format($cl['gia'], 0, ',', '.') ?>đ
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<style>
@media(max-width: 768px){
    .detail-container {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
}
</style>
