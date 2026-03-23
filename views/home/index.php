<div class="banner">
    <a href="<?= BASE_URL ?>index.php?controller=product&action=list">
        <img src="https://theme.hstatic.net/1000405230/1000570560/14/slideshow_1.jpg?v=173" alt="Banner Pho Xinh" style="width: 100%; display:block; object-fit:cover; min-height: 400px; max-height: 700px;">
    </a>
</div>

<section class="container" style="padding: 60px 15px 40px;">
    <div class="section-title">
        <h2 style="font-size:26px; letter-spacing:2px;">SẢN PHẨM MỚI</h2>
    </div>
    <div class="product-grid-4">
        <?php foreach(array_slice($sp_noibat, 0, 8) as $sp): ?>
            <div class="product-item">
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
                            <?= number_format($sp['giamgia'], 0, ',', '.') ?>đ 
                            <span class="price-old"><?= number_format($sp['gia'], 0, ',', '.') ?>đ</span>
                        <?php else: ?>
                            <?= number_format($sp['gia'], 0, ',', '.') ?>đ
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="text-center" style="margin-top:40px; text-align:center;">
        <a href="<?= BASE_URL ?>index.php?controller=product&action=list" class="btn btn-outline" style="border: 1px solid var(--text-dark); background: transparent; padding: 12px 40px;">Xem tiếp</a>
    </div>
</section>

<section style="background: #fdfdfd; padding: 50px 0;">
    <div class="container">
        <div class="section-title">
            <h2 style="font-size:26px; letter-spacing:2px;">THƯƠNG HIỆU NỔI BẬT</h2>
        </div>
        
        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:30px; margin-bottom: 30px;">
            <div style="position:relative; cursor:pointer;" class="brand-box">
                <a href="<?= BASE_URL ?>index.php?controller=product&action=list">
                    <img src="https://theme.hstatic.net/1000405230/1000570560/14/hb_image1.jpg?v=173" alt="Hoang Nam Luxurious" style="width:100%; display:block; filter:brightness(0.85);">
                    <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                        <h3 style="color:#fff; font-size: 24px; letter-spacing: 2px; text-transform:uppercase; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Hoang Nam Luxurious</h3>
                    </div>
                </a>
            </div>
            <div style="position:relative; cursor:pointer;" class="brand-box">
                <a href="<?= BASE_URL ?>index.php?controller=product&action=list">
                    <img src="https://theme.hstatic.net/1000405230/1000570560/14/hb_image2.jpg?v=173" alt="Ashley Furniture" style="width:100%; display:block; filter:brightness(0.85);">
                    <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
                        <h3 style="color:#fff; font-size: 24px; letter-spacing: 2px; text-transform:uppercase; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Ashley Furniture</h3>
                    </div>
                </a>
            </div>
        </div>
        <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:30px;">
            <div><img src="https://theme.hstatic.net/1000405230/1000570560/14/hb_image3.jpg?v=173" style="width:100%; object-fit:cover;"></div>
            <div><img src="https://theme.hstatic.net/1000405230/1000570560/14/hb_image4.jpg?v=173" style="width:100%; object-fit:cover;"></div>
            <div><img src="https://theme.hstatic.net/1000405230/1000570560/14/hb_image5.jpg?v=173" style="width:100%; object-fit:cover;"></div>
        </div>
    </div>
</section>

<section class="container" style="padding: 60px 15px 80px;">
    <div class="section-title">
        <h2 style="font-size:26px; letter-spacing:2px;">BẢN TIN</h2>
    </div>
    <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:30px;">
        <div class="news-item">
            <a href="#"><img src="https://file.hstatic.net/1000405230/article/3_e3e9d8e7ea504a37b3e2b4f65c6970dc_large.jpg" alt="News" style="width:100%; margin-bottom:15px; height:250px; object-fit:cover;"></a>
            <h4 style="font-size:15px; margin-bottom:10px; text-transform:uppercase; font-family:var(--font-heading);"><a href="#">KHÔNG GIAN SỐNG CHUẨN MỰC TỪ ROCHE BOBOIS</a></h4>
            <p style="font-size:14px; color:var(--text-muted); line-height: 1.5;">Khám phá nghệ thuật sắp đặt không gian sống theo phong cách Parisian thanh lịch và lãng mạn.</p>
        </div>
        <div class="news-item">
            <a href="#"><img src="https://file.hstatic.net/1000405230/article/1_d28dbd6cdaae4219a1db6945a8e3f9a7_large.jpg" alt="News" style="width:100%; margin-bottom:15px; height:250px; object-fit:cover;"></a>
            <h4 style="font-size:15px; margin-bottom:10px; text-transform:uppercase; font-family:var(--font-heading);"><a href="#">BỘ SƯU TẬP SOFA DA THẬT 100% NHẬP KHẨU YTALIA</a></h4>
            <p style="font-size:14px; color:var(--text-muted); line-height: 1.5;">Những ấn phẩm sofa da thủ công tuyệt tác vĩ đại nhất từ nước Ý đã có sẵn tại showroom Nội Thất Phố Xinh.</p>
        </div>
        <div class="news-item">
            <a href="#"><img src="https://file.hstatic.net/1000405230/article/2_88db8b32ce554b7c8443eeb29cce2f77_large.jpg" alt="News" style="width:100%; margin-bottom:15px; height:250px; object-fit:cover;"></a>
            <h4 style="font-size:15px; margin-bottom:10px; text-transform:uppercase; font-family:var(--font-heading);"><a href="#">BÍ QUYẾT CHỌN MUA BÀN ĂN PHÙ HỢP GIA ĐÌNH VIỆT</a></h4>
            <p style="font-size:14px; color:var(--text-muted); line-height: 1.5;">Cùng chuyên gia Phố Xinh điểm qua những lưu ý cực kì quan trọng khi chọn mua bàn ghế ăn gia đình.</p>
        </div>
    </div>
</section>

<style>
.brand-box:hover img { filter: brightness(1) !important; transition: 0.3s ease;}
.news-item img { transition: 0.3s; }
.news-item:hover img { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
.news-item a { color: var(--text-dark); }
.news-item h4 a:hover { color: var(--primary-color); }
</style>
