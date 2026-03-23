<div class="container" style="padding: 40px 15px 100px; max-width:850px;">
    <!-- Breadcrumb -->
    <div style="font-size:13px; color:var(--text-muted); padding-bottom: 15px; border-bottom:1px solid #eee; margin-bottom:40px;">
        <a href="<?= BASE_URL ?>" style="color:var(--text-dark);">Trang chủ</a> <span style="margin: 0 10px;">/</span> 
        <a href="<?= BASE_URL ?>index.php?controller=news&action=list" style="color:var(--text-dark);">Tin tức</a> <span style="margin: 0 10px;">/</span> 
        <span>Chi tiết bài viết</span>
    </div>

    <h1 style="font-size:32px; font-family:var(--font-heading); text-transform:uppercase; margin-bottom:20px; line-height:1.4;"><?= $news['title'] ?></h1>
    <p style="font-size:14px; color:#999; margin-bottom:30px;"><i class="fa fa-calendar-alt"></i> Đăng lúc <?= $news['date'] ?> bởi Admin Phố Xinh</p>
    
    <div class="news-content" style="font-size:16px; line-height:1.8; color:var(--text-main);">
        <p style="font-weight:600; font-style:italic; margin-bottom:25px; color:#444;">
            <?= $news['summary'] ?> Cùng chiêm ngưỡng những tác phẩm nội thất đang làm mưa làm gió trong giới thượng lưu năm nay.
        </p>
        
        <img src="<?= $news['image'] ?>" style="width:100%; margin-bottom:30px; border-radius:4px;">
        
        <p style="margin-bottom:20px;">
            Nội thất không chỉ là những vật dụng vô tri, mà là phương tiện kể lên câu chuyện phong cách sống của gia chủ. Tại Phố Xinh, chúng tôi cung cấp những giải pháp không gian hoàn mỹ được chế tác từ bàn tay của các nghệ nhân Master hàng đầu thế giới.
        </p>
        <p style="margin-bottom:20px;">
            Đặc biệt trong năm nay, các xu hướng mang thiên nhiên vào trong nhà với chất liệu gỗ Óc chó (Walnut), gỗ Sồi, kết hợp với các loại đá Cẩm thạch tự nhiên Quartz, Marble đang là lựa chọn ưu tiên của giới thiết kế. Không gian sống đẳng cấp phải mang hơi thở của Châu Âu đương đại lãng mạn.
        </p>
        <p style="margin-bottom:40px;">
            Đến ngay chuỗi hệ thống Showroom Phố Xinh trên toàn quốc để trực tiếp trải nghiệm và cảm nhận độ êm ái trên những bộ sofa da Ý lên đến hàng trăm triệu đồng, hay sự tinh xảo trong từng nét vân gỗ tự nhiên. 
        </p>
        
        <div style="text-align:center; padding-top: 20px; border-top: 1px solid #efefef;">
             <p style="margin-bottom:20px; font-family:var(--font-heading); font-size:18px;">Bạn đã sẵn sàng để nâng tầm không gian sống của mình?</p>
             <a href="<?= BASE_URL ?>index.php?controller=product&action=list" class="btn btn-primary">XEM TẤT CẢ SẢN PHẨM</a>
        </div>
    </div>
</div>
