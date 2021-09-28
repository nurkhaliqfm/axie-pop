<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Axie Pop Project</title>
    <meta content="Axie Pop NFT Game" name="descriptison">
    <meta content="Axie Pop NFT GAME Community" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/img/favicon/favico.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/img/favicon/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/icofont/icofont.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/venobox/venobox.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/owl-carousel/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/aos/aos.css') ?>" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

    <style>
        .blink {
            animation: blinker 0.9s linear infinite;
            color: #1c87c9;
            font-size: 30px;
            font-weight: bold;
            font-family: sans-serif;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .blink-one {
            animation: blinker-one 1s linear infinite;
        }

        @keyframes blinker-one {
            0% {
                opacity: 0;
            }
        }

        .blink-two {
            animation: blinker-two 1.4s linear infinite;
        }

        @keyframes blinker-two {
            100% {
                opacity: 0;
            }
        }


        .wafixed {
            position: fixed;
            left: 20px;
            bottom: 5px;
            z-index: 999;
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Start Footer -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h1 class="logo"><a href="index.html"><img src="assets/img/logo.png" style="width:50%" alt=""></a></h1>
                            <p>
                                Axie Pop Community <br>
                                Indonesia<br><br>
                                <strong>Phone:</strong> +62 82 291 938 794<br>
                                <strong>Email:</strong> official@axiepop.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://twitter.com/axieminigames?s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=100072879234290" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://instagram.com/axieminigames?utm_medium=copy_link" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="https://vt.tiktok.com/ZSeJCqDBE/" class="tiktok"><i class="bx bxl-discord"></i></a>
                                <a href="https://discord.gg/VAn83anb" class="discord"><i class="bx bxl-discord"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#ourhero">Hero</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#getslp">SLP</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#clientstopaz">Topaz</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#donate">Donate</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>


                    <div class="col-lg-7 col-md-6 footer-newsletter">
                        <h4>STAY UP TO DATE</h4>
                        <p>Subscribe to our mailing list to stay updated with the latest drops and news.</p>
                        <i>Your email address is only used to register in our Axie POP, NFTs and Marketplace newsletter. Learn more about the management of your data and your rights in our Privacy Policy and about our relationship with you in our Terms and Conditions</i>
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Enter Your Email Here For Good Info"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright ">
                &copy; Copyright <strong><span class="">Axie Pop</span></strong>. All Rights Reserved
            </div>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Additional JS FIles -->
    <script src="<?php echo base_url('assets/js/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/php-email-form/validate.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/waypoints/jquery.waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/counterup/counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/venobox/venobox.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/isotope-layout/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/aos/aos.js') ?>"></script>

    <!-- Main JS File -->
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>