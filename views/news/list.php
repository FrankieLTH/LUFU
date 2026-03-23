<div class="container" style="padding: 60px 15px 100px;">
    <!-- Breadcrumb -->
    <div style="font-size:13px; color:var(--text-muted); padding-bottom: 20px; border-bottom:1px solid #eee; margin-bottom:40px;">
        <a href="<?= BASE_URL ?>" style="color:var(--text-dark);">Trang chủ</a> <span style="margin: 0 10px;">/</span> 
        <span style="color:var(--text-dark); font-weight:500; text-transform:uppercase;">Tin Tức Sự Kiện</span>
    </div>

    <div class="section-title">
        <h2 style="font-size: 32px;">BẢN TIN PHỐ XINH</h2>
        <p>Cập nhật xu hướng thiết kế nội thất mới nhất toàn cầu</p>
    </div>
    
    <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
        <?php foreach($newsList as $news): ?>
            <div class="news-item">
                <a href="<?= BASE_URL ?>index.php?controller=news&action=detail&id=<?= $news['id'] ?>">
                    <img src="<?= $news['image'] ?>" alt="<?= $news['title'] ?>" style="width:100%; height:250px; object-fit:cover; margin-bottom:20px; border-radius:4px; transition:0.3s;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                </a>
                <p style="font-size:13px; color:#999; margin-bottom:10px;"><i class="fa fa-calendar-alt"></i> Đăng ngày: <?= $news['date'] ?></p>
                <h3 style="font-size:15px; margin-bottom:15px; font-family:var(--font-heading); text-transform:uppercase; line-height:1.5;">
                    <a href="<?= BASE_URL ?>index.php?controller=news&action=detail&id=<?= $news['id'] ?>" style="color:var(--text-dark); display:block;"><?= $news['title'] ?></a>
                </h3>
                <p style="color:var(--text-muted); font-size:14px; line-height:1.6; margin-bottom:15px;">
                    <?= $news['summary'] ?>
                </p>
                <a href="<?= BASE_URL ?>index.php?controller=news&action=detail&id=<?= $news['id'] ?>" style="font-size:13px; font-weight:600; text-transform:uppercase; color:var(--primary-color);">Đọc tiếp <i class="fa fa-arrow-right" style="font-size:10px; margin-left:3px;"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
