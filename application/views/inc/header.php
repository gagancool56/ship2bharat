  <!-- ======= Header ======= -->
  <?php
    $login_url = 'https://app.instashipin.com/';
    $signup_url = 'https://www.qxpress.net/Member/QXSohoRegist';
    ?>
  <header id="header" class="d-flex align-items-center shadow-lg">
      <div class="container d-flex align-items-center">

          <h1 class="logo me-auto"><a href="<?= base_url() ?>" class="fs-4"><img src="<?= asset_url('img/logo.png') ?>" alt=""></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Home</a></li>
                  <li><a class="nav-link scrollto" href="<?= base_url('#services') ?>">Why <?= business_info('buname') ?>?</a></li>
                  <li><a class="nav-link scrollto" href="<?= base_url('#about') ?>">How it works?</a></li>
                  <li><a class="nav-link scrollto " href="<?= base_url('#clients') ?>">Clients</a></li>
                  <li><a class="nav-link scrollto" href="<?= base_url('#contact') ?>">Contact Us</a></li>
                  <li><a class="nav-link scrollto" href="<?= base_url('payment') ?>">Payment</a></li>
                  <li><a class="getstarted scrollto" href="<?= $login_url ?>">Login</a></li>
                  <li><a class="getstarted scrollto" href="<?= $signup_url ?>">Signup for free</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->