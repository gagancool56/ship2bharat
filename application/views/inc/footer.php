<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3><?= business_info('buname') ?></h3>
        <h4>We will help you send your wishes to your loved ones.</h4>
        <div class="social-links">
            <a href="<?= social_media_links('twitter') ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="<?= social_media_links('facebook') ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="<?= social_media_links('instagram') ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="<?= social_media_links('skype') ?>" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="<?= social_media_links('linkedin') ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span><?= business_info('buname') . ' ' . date('Y') ?></span></strong>. All Rights Reserved
        </div>
    </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= asset_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset_url('vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= asset_url('vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= asset_url('vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= asset_url('vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= asset_url('vendor/jquery.min.js') ?>"></script>
<script src="<?= asset_url('vendor/sweetalert.min.js') ?>"></script>
<script src="<?= asset_url('js/custom.js') ?>"></script>

<!-- Template Main JS File -->
<script src="<?= asset_url('js/main.js') ?>"></script>

</body>

</html>