<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nội thất Phố Xinh - Đẳng cấp không gian sống</title>
    <!-- Fonts: Playfair Display cho tiêu đề (Sang trọng) & Inter cho text -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<?php require_once 'views/layout/header.php'; ?>

<main class="main-content">
    <?php require_once $view; ?>
</main>

<?php require_once 'views/layout/footer.php'; ?>

</body>
</html>
