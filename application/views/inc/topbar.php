<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= business_info('buname') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= asset_url('img/favicon.png') ?>" rel="icon">
    <link href="<?= asset_url('img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="<?= asset_url('vendor/google-fonts.css') ?>" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= asset_url('vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= asset_url('css/style.css') ?>" rel="stylesheet">

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="<?= 'mailto:' . business_info('email') ?>"><?= business_info('email') ?></a>
                <i class="bi bi-phone-fill phone-icon"></i><a href="<?= 'tel:' . business_info('phone') ?>"><?= business_info('phone') ?></a>
            </div>
            <div class="social-links d-none d-md-block">
                <a href="<?= social_media_links('twitter') ?>" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                <a href="<?= social_media_links('facebook') ?>" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="<?= social_media_links('instagram') ?>" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                <a href="<?= social_media_links('linkedin') ?>" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>